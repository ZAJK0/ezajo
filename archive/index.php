<?php
include 'header.php';
?>

<div id="mainBody">

	<div class="container">

	<div class="row mainContent">

<!-- Sidebar ================================================== -->

	<?php
	include 'sidebar.php'	
	?>

	<!-- Sidebar end=============================================== -->
	<div class="span-9">		
		<h1>Výpredaj!</h1>
		<p>
			Aktuálne prebieha vianočna akcia! Všetky produkty sú zľavnené o 10%!
		</p>
		<h3>Toto sú naše top produkty!</h3>
		<div class="container">
			<ul class="items">
				<?php
			$sql = "SELECT nazov, popisproduktu, cena, img, urlnazov FROM `projektdatart` WHERE znacka='philips' LIMIT 25,9;";
			$products = $DB->prepare($sql);
			$products->execute();
			$index_products = $products->fetchAll(PDO::FETCH_OBJ);
			
			foreach ($index_products as $product) {
				// Check if the 'nazov' property exists before accessing it
				if (property_exists($product, 'nazov') && $product->nazov !== null) {
					?>
					<li class="item">
						<div class="card">
							<a class="card-img" href="product_details.php?produkt=<?= $product->urlnazov ?>">
								<img src='<?= $product->img ?>' alt="<?= $product->nazov ?>"/>
							</a>
							<div class="card-inf">
								<h5 class="card-name">
									<a href="product_details.php?produkt=<?= $product->urlnazov ?>"><?= $product->nazov ?></a>
								</h5>
								<div class="card-buy">
									<a class="red" href="product_details.php?produkt=<?= $product->urlnazov ?>">
										<?= $product->cena ?>€
									</a>
									<a class="blue" href="#">
										Pridať do košíka
									</a>
								</div>
							</div>
						</div>
					</li>
					<?php
				} else {
					// Handle the case where 'nazov' property is null or doesn't exist
					echo '<li class="item"><div class="card">Product information is not available.</div></li>';
				}
			}
			?>
		</ul>
	</div>
</div>

	</div>
	
	<div class="span9">		
		

		<h4>Latest Products </h4>
		<ul class="thumbnails">
		<?php 
        while($product_cards= $products->fetch(PDO::FETCH_ASSOC)){
                    $name = $product_cards['nazov'];
                    $img = $product_cards['img'];
					
                    $link = $product_cards['link'];
					$cena = $product_cards['cena'];
					if(!(@is_array(getimagesize($img)))){
						$img = "css\localhost-file-not-found.jpg";
					}
					
					

                    echo '
					<li class="span3">
				  <div class="thumbnail">
					<a  href="'.$link.'"><img class="productImg" src="'.$img.'" alt=""/></a>
					<div class="caption">
					  <h5>'.$name.'</h5>					
					  <h4 style="text-align:center"> <a class="btn btn-primary" href="#">'.$cena.' €</a></h4>
					</div>
				  </div>
				</li>';
                }
            ?>

				
			  </ul>	
		</div>

		</div>

	</div>

</div>

<!-- Footer ================================================================== -->

<?php include 'parts/footer.php' ?>