<?php
	$retailers = array(
		array(
			'name' => 'Amazon.com',
			'logo' => '/img/amazon.png',
			'link' => 'http://www.amazon.com/s/ref=nb_sb_noss_1?url=search-alias%3Daps&field-keywords=buzz+away+extreme'
		),
		array(
			'name' => 'Drugstore.com',
			'logo' => '/img/drugstorecom.png',
			'link' => 'http://www.drugstore.com/search/search_results.asp?N=0&Ntx=mode%2Bmatchallpartial&Ntk=All&srchtree=5&Ntt=buzz+away&Go.x=0&Go.y=0&CSRFToken=UmXwPncbJtO0OVs6%2FkRM1isau%2F85M4R6QPgIh%2FVdNco%3D'
		),
		array(
			'name' => 'E Vitamins',
			'logo' => '/img/evitamins.png',
			'link' => 'http://search.evitamins.com/search?asug=&w=buzz+away'
		)
	);
?>

<div>
	<h3>Buy Buzz Away Extreme online at these, and many other fine online retailers</h3>
	<span class="divider"></span>
	<?php foreach ($retailers as $retailer) :
		$name = $retailer['name'];
		$logo = $retailer['logo'];
		$link = $retailer['link']; ?>
		
		<div class="retailer">
			<a href="<?php echo $link ?>" alt="<?php echo $name ?>" style="background-image:url(<?php echo $logo ?>);" target="_blank"></a>
			<a href="<?php echo $link ?>" alt="<?php echo $name ?>" target="blank">Shop Now</a>
		</div>
	<?php endforeach ?>
</div>