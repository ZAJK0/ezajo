<?php
	include "config.php";
	include "header.php";?>

    <div id="mainBody">

	<div class="container">

	<div class="row">
<?php
	include "sidebar.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $srch = $_POST['srch'];

}?>
<div class="span-9">
<h4>vyhľadávanie pre:</h4>
<h1><?=$srch?></h1>
<div class="obsah produkty">
			<?php
				$selectitems = $pagenum * 15;
				$search = lowercase($srch);
				$sql = "SELECT nazov, popisproduktu, cena, img, urlnazov FROM `projektdatart` WHERE nazov LIKE '%$search%' LIMIT $selectitems,9;";
				$products = $DB->prepare($sql);
				$products->execute();
				$index_products = $products->fetchAll(PDO::FETCH_OBJ);
				foreach ($index_products as $product) {
				if (@getimagesize($product->img)) {
					$image = $product->img;
				}else{
					$image = "css/fail.jpg";
				}
			
				?>
				  <div class="thumbnail produkt">
					<a  href="product_details.php?produkt=<?= $product->urlnazov ?>"><img class="productImg" src='<?= $image ?>' alt="<?= $product->nazov ?>"></a>
					<div class="caption">
					  <h5><span class="fw-bold"><?=str_replace("-", " ",  strlen($product->nazov) > 30 ? substr($product->nazov, 0,25) . '...' : $product->nazov ) ?></h5>					
					  <div class="buttony">  
					    <h4 style="text-align:center"> <a class="btn btn-primary" href="product_details.php?produkt=<?= $product->urlnazov ?>"><?= $product->cena ?>€</a></h4>
					    <h4 style="text-align:center"> <a class="btn btn-warning" href="product_details.php?produkt=<?= $product->urlnazov ?>">Vložiť do košíka</a></h4>
					  </div>
					</div>
				  </div>


				<?php } ?>
			</div>
	</div>
</div>