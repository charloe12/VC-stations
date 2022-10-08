  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">add new station</h1>
        <p class="col-lg-10 fs-4">la ghaliba ila lah</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action='add.php' method="post" enctype="multipart/form-data" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">image</    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="size" value="100000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="image" type="file" />
   
           
          </div>
          
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">city</label> 
            <input  type="text" class="form-control"  placeholder="" name='city'>
           
          </div>
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">adress</label> 
            <input  type="text" class="form-control"  placeholder="" name='adress'>
           
          </div>
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">latitude</label> 
            <input  type="text" class="form-control"  placeholder="ex: 10.4343" name='latitude'>
           
          </div>
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">longitude</label> 
            <input  type="text" class="form-control"  placeholder="ex: 10.4343" name='longitude'>
           
          </div>
          <div class="d-flex flex-column align-items-center mb-3">
            <label class="fs-4 m-1">disponible</label> 
            <input  type="text" class="form-control"  placeholder="YES OR NO" name='disponible'>
           
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">add</button>
          <hr class="my-4">
          <small class="text-muted">By clicking add, your database gonna change.</small>
        </form>
      </div>
    </div>
  </div>