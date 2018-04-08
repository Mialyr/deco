
<?php
    require("fonction.php");
    $id = $_GET['id'];
    $categorie = listeCategorie();
    $findByIdCateg = findCategorie("where id = '".$id."'");
	include("entete.php");
?>
	
	<div id="fh5co-author">
		<div class="container">
			<div class="row top-line animate-box">
				<div style="float:left">
					<img style="width:600px;height:400px" src="<?php echo $findByIdCateg[0]->image ?>"/>
				</div>
				<div style="margin-top:120px">
					<h2 style="text-align:center"><?php echo $findByIdCateg[0]->nom ?></h2>
					<p style="text-align:center"><?php echo $findByIdCateg[0]->description ?></p>
				</div>
			</div>
		</div>
	</div>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

