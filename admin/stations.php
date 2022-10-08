<?php include 'templates/header.php'?>
<?php include 'templates/sidebar.php'?>
<?php 
include 'templates/functions.php';
$stations=getstations()?>
<style type="text/css">
	.add-btn{
		border: 1px solid #d7dbe6;
		border-radius: 4px;
		width: 160px;
		font-size: 15px;
		color: white;
		background-color: #594ef7;
		margin: 1rem;
		padding: 1rem 1.5rem;

	}
	.people img{
		width: 60px;
		height: auto;
		border-radius: unset;

	}
</style>


<section id="interface">
	<?php include 'templates/nav.php'?>
	<h3 class="i-name">
		Stations
	</h3>
	<div class="values">
		<div class="val-box">
			<i class="bi bi-people"></i>
			<div>
				<h3>8,267</h3>
				<span>New Users</span>
			</div>	
		</div>
		<div class="val-box">
			<i class="bi bi-bag-check"></i>
			<div>
				<h3>8,267</h3>
				<span>New Users</span>
			</div>	
		</div>
		<div class="val-box">
			<i class="bi bi-basket"></i>
			<div>
				<h3>8,267</h3>
				<span>New Users</span>
			</div>	
		</div>
		<div class="val-box">
			<i class="bi bi-currency-dollar"></i>
			<div>
				<h3>8,267</h3>
				<span>New Users</span>
			</div>	
		</div>
	</div>
	<div class="add-btn text-uppercase my-4 mx-5 p-3">
		add stations
	</div>
	<div class="baord">
			<table width="100%">
				<thead>
					<tr>
						<td>Name</td>
						<td>Adress</td>
						<td>Latitude</td>
						<td>Longitude</td>
						<td>Desponible</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
<?php foreach ($stations as $station) {
	print '
		<tr>
			<td class="people">
				<img src="images/'.$station['image'].'">
				<div class="people-de">
					<h5>'.$station['city'].'</h5>

				</div>
			</td>

			<td class="people-des">
				<h5>'.$station['adress'].'</h5>
				
			</td>

			<td class="role">
				<p>'.$station['latitude'].'</p>
			</td>
			<td class="role">
				<p>'.$station['longitude'].'</p>
			</td>
			<td class="role">
				<p>'.$station['desponible'].'</p>
			</td>
			<td class="edit"><a  href="#">Edit</a></td>
			<td class="delete"><a  href="#">Delete</a></td>
		</tr>
	';
	
} ?>
				</tbody>
			</table>
	</div>
</section>

<script>
	$('#menu-btn').click(function(){
		$('#menu').toggleClass("active");
	})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>