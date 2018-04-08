
<?php
    require("fonction.php");
    $categorie = listeCategorie();
	include("entete.php");
?>


	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<!--<div class="col-md-7 col-md-push-5 text-left intro"></div>-->
					<h1 style="margin-left:200px">Changement de meuble ou nouveaux accessoires ?</h1>
					<h3 style="margin-left:390px">Amusez-vous à réaménager votre jardin</h3>
					<!-- <h2>Shift is a Collection of a Beautiful &amp; Premium Themes.</h2> -->
				
				
			</div>
			<div class="row">
                <?php
                    for($i=0;$i<count($categorie);$i++){
                ?>
                    <div class="col-md-4 text-center animate-box">
                        <a class="work" href="<?php echo $categorie[$i]->nom ?>-<?php echo $categorie[$i]->id ?>.html">
                            <div class="work-grid" style="background-image:url(<?php echo $categorie[$i]->image ?>);">
                                <div class="inner">
                                    <div class="desc">
                                        <h3><?php echo $categorie[$i]->nom ?></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    }
                ?>				
			</div>
		</div>
	</div>
	
	<div id="fh5co-author" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>A little about me</h2>
				</div>
			</div>
				</div>-->
				<div style="margin-left:550px" class="col-md-5 col-md-pull-1 animate-box">
						<div class="fh5co-contact-info" style="margin-left:-75px">
							<ul>
								<li>Nom et prénom : Rakotozanany Mialy</li>
								<li>Numéro : ETU0000578</li>
							</ul>
						</div>
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

