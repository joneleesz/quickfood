<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		width: 100%;
		margin: 0px;
	}
</style>
<!-- for prev and next button -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


	<div class="container-full text-center">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<?php
				$banners = Yii::$app->getBannerByGroup(1);
			?>

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php
				$index = 0;

				foreach($banners as $item) {
					if ($index == 0) { ?>
						<li data-target="#myCarousel" data-slide-to="<?= $index ?>" class="active"></li>
					<?php } else { ?>
						<li data-target="#myCarousel" data-slide-to="<?= $index ?>"></li>
					<?php }
					$index = $index + 1;
				}
				?>
			</ol>



			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php
				$index = 0;
				foreach($banners as $item) {
					if ($index == 0) { ?>
						<div class="item active">
							<img src="<?= '/' . $item->image ?>" alt="<?= $item->keywords ?>">

							<div class="carousel-caption">
								<h3><?= $item->keywords ?></h3>

								<p><?= $item->description ?></p>
							</div>
						</div>
					<?php } else { ?>
						<div class="item">
							<img src="<?= '/' . $item->image ?>" alt="<?= $item->keywords ?>">

							<div class="carousel-caption">
								<h3><?= $item->keywords ?></h3>

								<p><?= $item->description ?></p>
							</div>
						</div>
						<?php
					}
					$index++;
				}
				?>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br>
			the chicken was involved; the pig was committed.
		</p>
	</div>

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">Reasons to use this template</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Bootstrap-powered</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fat-free</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Creative Commons</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Author's support</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Which code editor would you recommend?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally,
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a>
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>,
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

	</div>	<!-- /container -->
