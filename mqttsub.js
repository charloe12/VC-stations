
const clientId = 'mqtt_' + Math.random().toString(16).slice(3)

const host = 'ws://18.217.93.176:8883'

const options = {
    clientId: clientId,
    username: 'energitech',
    password: 'mqttenergitech',
    clean: true,
    reconnectPeriod: 1000
}

console.log('Connecting mqtt client')
const client = mqtt.connect(host, options)

client.on('error', (err) => {
    console.log('Connection error: ', err)
    client.end()
})

client.on('reconnect', () => {
    console.log('Reconnecting...')
})

client.on('connect', () => {
    console.log('Client connected:' + clientId)
    // Subscribe
    client.subscribe('testtopic', { qos: 1 })
    client.on('message', (topic, message, packet) => {
        message=message.toString()
        var text=message.split(',')
        console.log('Received Message: ' + text + 'On topic: ' + topic)
        
        $(document).ready(function(data){
            
            console.log(text)
           

            if(text){
                console.log('ajax good');
                $.ajax({
                    url:'mqtt.php',
                    method:'POST',
                    DataType:'json',
                    data:{
                        id:text[0],
                        despo:text[1]
                    },
                    error:function(data, textStatus, errorMessage){
                        console.log('Error: ', errorMessage);}
                })
            }
        })
}); 
})

