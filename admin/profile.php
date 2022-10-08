<?php include 'templates/header.php'?>
<?php include 'templates/sidebar.php'?>
<?php 
include 'templates/functions.php';
$admins=getadmins()?>


<section id="interface">
	<?php include 'templates/nav.php'?>
	<h3 class="i-name">
		Dashboard
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
	<div class="baord">
			<table width="100%">
				<thead>
					<tr>
						<td>Name</td>
						<td>Title</td>
						<td>Role</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
<?php foreach ($admins as $admin) {
	print '
		<tr>
			<td class="people">
				<img src="img/'.$admin['image'].'">
				<div class="people-de">
					<h5>'.$admin['name'].'</h5>
					<p>'.$admin['email'].'</p>

				</div>
			</td>

			<td class="people-des">
				<h5>'.$admin['title'].'</h5>
				
			</td>

			<td class="role">
				<p>'.$admin['role'].'</p>
			</td>

			<td class="edit"><a  href="#">Edit</a></td>

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


</body>
</html>