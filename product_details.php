<?php
	include "config.php";
	$url_produkt = $_GET['produkt'];
	if (isset($_GET['produkt'])) {
		
		
	$sql = "SELECT nazov, popisproduktu, cena, img, urlnazov,kategoria FROM `projektdatart` WHERE urlnazov='$url_produkt' LIMIT 1";
	$produkt = $DB->prepare($sql);
	$produkt->execute();
	$zvoleny_produkt = $produkt->fetchAll(PDO::FETCH_OBJ);
	}else{
		echo "oppa";
	}
	include "header.php";


?>
<main class="main-page">
	<div class="product">
		<div class="product-path">
			<ul class="produktKat">
				<li><a class="kategorie" href="index.php">Domov</a></li>
				<li><a  class="kategorie" href="products.php">Produkty</a></li>
				<div><h3><?php foreach ($zvoleny_produkt as $produktik) echo ($produktik->kategoria) ?></h3></div>
				<!-- <li class="active"><p><?php foreach ($zvoleny_produkt as $produktik) echo ($produktik->nazov) ?></p></li> -->
			</ul>	
		</div>
		
		<div class="produktDetail">
			<?php 
				foreach ($zvoleny_produkt as $produktik) {
					if (@getimagesize($produktik->img)) {
						$image = $produktik->img;
					}else{
						$image = "css/fail.jpg";
					}
				?> 
						<img src="<?= $image ?>" class="imgTest" alt="<?= $produktik->nazov ?>"/>
				<div class="datailInfo">
						<h1><?= $produktik->nazov ?></h1>
						<p><?=str_replace("-", " ",  strlen($produktik->popisproduktu) > 300 ? substr($produktik->popisproduktu, 0,1000) . '...' : $produktik->popisproduktu ) ?></p>
						<div class="">
							<p class="cena"><?= $produktik->cena ?>€</p>
							<button type="" class=""> Pridať do košíka</button>
						</div>
				</div>
			</div>
		<div class="popis">
			<h1>Popis produktu</h1>
			<span><?=$produktik->popisproduktu?></span>
		</div>
		
		
			<?php	}?>
	</div>
<?php
	include "parts/footer.php";
?>
