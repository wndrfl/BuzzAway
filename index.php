<?php include('header.php'); ?>

<?php include('product-data.php'); ?>

<section class="main-section main-section-hero">
	<div class="overlay"></div>
	<div class="container">

		<div class="hero-prod-info">

			<div class="hero-prod-image" style="background-image:url(/img/main-prod-image.png);"></div>

			<div class="hero-headline">

				<h1><div class="blur"></div><span>A Naturally Effective Way to Protect from Insects</span></h1>
				<div class="hero-text">
					<div class="col-xs-6">
						<span class="icon col-xs-4" style="background-image:url(/img/hero-icon-1.png);"></span>
						<p class="col-xs-8">Natural Botanical Formula that is completely DEET-free</p>
					</div>
					<div class="col-xs-6">
						<span class="icon col-xs-4" style="background-image:url(/img/hero-icon-2.png);"></span>
						<p class="col-xs-8">Available in Spray or Towelettes for Easy Application</p>
					</div>
				</div>
				
			</div>

			

			<div class="hero-bottom-banner">
				<div class="hero-ctas">
					<a href="" class="button teal-button shop-now">Shop Now</a>
					<a href="" class="button green-button find-a-store">Find a Store</a>
				</div>

				<div class="hero-prod-details">
					<div class="hero-corner-cut">
						<span class="right-shape"></span>
						<span class="lil-tri"></span>
						<span class="triangle"></span>
						<span class="lil-tri-bottom"></span>
						<span class="about">About</span>
						<span>^</span>
					</div>
				</div>

			</div>
			<div class="hero-prod-detail-wrapper">
				<?php foreach ($hero_prod_info as $item) : 
					$icon = $item['icon'];
					$text = $item['text'];
				?>
					<div class="hero-prod-detail col-sm-3">
						<div class="hero-prod-detail-image-container">
							<span class="bracket"></span>
							<div class="hero-prod-detail-icon" style="background-image:url(<?php echo $icon ?>);"></div>
							<span class="bracket"></span>
						</div>
						<div class="hero-prod-detail-text">
							<span class="arrow"></span>
							<p><?php echo $text ?></p>
						</div>
						
					</div>
				<?php endforeach ?>
			</div>
		</div>
		
	</div>
</section>

<section class="main-section main-section-product">
	<div class="container">
		<div class="product-desc">

			<span class="corner cut left"></span>
			<span class="corner blue left"></span>
			<p>Offering a long-lasting and extremely effective DEET-free repellent, Buzz Away Extreme provides a family-friendly eco-positive alternative for anyone who spends time outdoors. Buzz Away Extreme's spray or towelette application process and unique blend of natural plant oils are designed to help avoid insect bites over an extended period of time.</p>
			<span class="corner blue right"></span>
			<span class="corner cut right"></span>

			<a href="" class="button teal-button shop-now">Shop Now</a>
			<a href="" class="button green-button find-a-store">Find A Store</a>
		</div>
	</div>

	<div class="product-toggle-container container">
		<?php foreach($products as $product) :
			$title  = $product['title'];
			$id 	= $product['id']; ?>
			<div class="product-toggle col-xs-6" id="<?php echo $id ?>">
				<div>
					<h2><?php echo $title ?></h2>
					<p>Shop Now</p>
				</div>
				<span class="arrow"></span>
			</div>
		<?php endforeach ?>
	</div>

	<?php foreach($products as $product) :
		$title  = $product['title'];
		$main_image  = $product['main_image'];
		$desc = $product['desc'];
		?>
			<div class="product">
				<div class="container">
					<div class="product-image" style="background-image:url(<?php echo $main_image ?>)"></div>

					<!-- <h2><?php echo $title ?><span>Shop Now</span></h2> -->

					<p><?php echo $desc ?></p>
					<ul class="product-specs">
						<?php foreach ($product['specs'] as $spec) : ?>
							<li><?php echo $spec ?></li>
						<?php endforeach ?>
					</ul>
					<div class="where-to-buy">
						<p>Where to Buy:</p>
						<?php foreach($product['stores'] as $store) :?>
							<a href="<?php echo $store['link'] ?>" style="background-image:url(<?php echo $logo ?>);"></a>
						<?php endforeach ?>
						<a href="" class="button green-button">Find A Store</a>
					</div>
				</div>
			</div>

			<div class="product-variations">
				<div class="container">
					<?php foreach ($product['variations'] as $variation): 
						$size  = $product['size'];
						$price = $product['price'];
						$image = $product['image'];
						$name  = $product['name'];
						?>

						<div class="variation">
							<div class="variation-image"></div>
							<p class="variation-size"><?php echo $size ?></p>
							<p class="variation-price">MSRP <?php echo $price ?></p>
							<p>(prices vary online)</p>
							<span class="divider"></span>
							<h3 class="variation-name"><?php echo $name ?></h3>
						</div>

					<?php endforeach ?>
				</div>
			</div>
		</div>
	<?php endforeach ?><!--end foreach product -->
	
</section>

<section class="main-section">
	<div class="container">
		<h3><strong>Buzz Away Extreme</strong> is a natural insect repellent designed to combat mosquitos and ticks, while helping prevent bug borne diseases. It’s a fast acting, quickly applied, and healthy alternative to help you stay safe outside.</h3>
	</div>
</section>

<section class="main-section">
	<div class="container">
		<h3>Studies by the USDA and the University of Guelph concluded that Buzz Away Extreme:</h3>
		<div class="fact">
			<span class="data-icon icon" style="background-image:url(/img/data-icon-1);"></span>
			<p>Delivered an average mean protection time (against three species of mosquitoes) of 7.2 hours.</p>
		</div>
		<div class="fact">
			<span class="data-icon icon" style="background-image:url(/img/data-icon-2);"></span>
			<p>Is as effective as 7% to 20% DEET-based products.</p>
		</div>
		<a href="" class="button green-button">Find A Store</a>
	</div>
</section>

<section class="main-section">
	<h3>What Do Our Customers Say?</h3>
	<?php include('testimonials.php') ?>
</section>

<section class="main-section">
	<p>BUZZ AWAY EXTREME SPRAY AND TOWELETTES ARE AVAILABLE IN NATURAL GROCERY, HEALTH FOOD AND SUPPLEMENT STORES EVERYWHERE!</p>
</section>

<?php include('shop-now.php') ?>

<?php include('find-a-store.php') ?>

<?php include('footer.php'); ?>