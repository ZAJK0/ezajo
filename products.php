<?php
	include "config.php";
	include "header.php";
	include "sidebar.php";


	$prevNazov = "";
	$prevNazvy = "";

	$pole_kategorii_1 = array();
	$pole_kategorii_2 = array();
	$pole_kategorii_3 = array();
	$pole_kategorii_4 = array();
	$pole_kategorii_5 = array();
	$pole_kategorii_6 = array();
	$pole_kategorii_7 = array();
	$pole_kategorii_8 = array();
	$pole_kategorii_9 = array();	
	$pole_kategorii_10 = array();	


	$polia_kategorii = [$pole_kategorii_1, $pole_kategorii_2, $pole_kategorii_3, $pole_kategorii_4, $pole_kategorii_5, $pole_kategorii_6, $pole_kategorii_7, $pole_kategorii_8, $pole_kategorii_9, $pole_kategorii_10];
	$pole_kategorii_url = [];


	if (isset($_GET['page'])) {
		$pagenum = $_GET['page'];
	}else{
		$pagenum = 0;
	}

?>
<div class="span-9">
	<?php 
		if (isset($_GET['k1'])){
			$k1 = $_GET['k1'];
			$pole_kategorii_url[] = $k1;
		} 
		if (isset($_GET['k2'])){
			$k2 = $_GET['k2'];
			$pole_kategorii_url[] = $k2;
		}
		if (isset($_GET['k3'])){
			$k3 = $_GET['k3'];
			$pole_kategorii_url[] = $k3;
		}
		if (isset($_GET['k4'])){
			$k4 = $_GET['k4'];
			$pole_kategorii_url[] = $k4;
		}
		if (isset($_GET['k5'])){
			$k5 = $_GET['k5'];
			$pole_kategorii_url[] = $k5;
		}
		if (isset($_GET['k6'])){
			$k6 = $_GET['k6'];
			$pole_kategorii_url[] = $k6;
		}
		if (isset($_GET['k7'])){
			$k7 = $_GET['k7'];
			$pole_kategorii_url[] = $k7;
		}
		if (isset($_GET['k8'])){
			$k8 = $_GET['k8'];
			$pole_kategorii_url[] = $k8;
		}
		if (isset($_GET['k9'])){
			$k9 = $_GET['k9'];
			$pole_kategorii_url[] = $k9;
		}
		if (isset($_GET['k10'])){
			$k10 = $_GET['k10'];
			$pole_kategorii_url[] = $k10;
		}


		$pocet_kategorii = count($pole_kategorii_url);
		
		if(isset($k10)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5." | ".$k6." | ".$k7." | ".$k8." | ".$k9." | ".$k10;
			$lastItem = $k10;}
		elseif(isset($k9)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5." | ".$k6." | ".$k7." | ".$k8." | ".$k9;
			$lastItem = $k9;
		}elseif(isset($k8)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5." | ".$k6." | ".$k7." | ".$k8;
			$lastItem = $k8;
		}elseif(isset($k7)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5." | ".$k6." | ".$k7;
			$lastItem = $k7;
		}elseif(isset($k6)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5." | ".$k6;
			$lastItem = $k6;
		}elseif(isset($k5)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4." | ".$k5;
			$lastItem = $k5;
		}elseif(isset($k4)){
			$sql_k = $k1." | ".$k2." | ".$k3." | ".$k4;
			$lastItem = $k4;
		}elseif(isset($k3)){
			$sql_k = $k1." | ".$k2." | ".$k3;
			$lastItem = $k3;
		}elseif(isset($k2)){
			$sql_k = $k1." | ".$k2;
			$lastItem = $k2;
		}elseif(isset($k1)){
			$sql_k = $k1;
			$lastItem = $k1;
		}

		$sql = "SELECT DISTINCT kategoria FROM `projektdatart` WHERE kategoria LIKE '$sql_k%'";



		

		$kategorie = $DB->prepare($sql);
		$kategorie->execute();
		$kategorie = $kategorie->fetchAll(PDO::FETCH_OBJ);
		foreach($kategorie as $kategoria){
			$kategoria = $kategoria->kategoria;
			$nase_kategorie = explode(" | ", $kategoria);
			if (isset($nase_kategorie[$pocet_kategorii])) {
				$pod_kategoria = $nase_kategorie[$pocet_kategorii];
				$prevNazov=$lastItem;
				$prevNazvy=$sql_k;

			} else {
				
				$pod_kategoria = "";
			}
			if((!in_array($pod_kategoria, $polia_kategorii[$pocet_kategorii-1])) && ($pod_kategoria != "")){
				$polia_kategorii[$pocet_kategorii-1][] = $pod_kategoria;
			}
			
		}
		$je_podkategoria = false;
		foreach ($polia_kategorii as $polia_kategorie) {
			if($polia_kategorie){
				$je_podkategoria = true;
			}
		}
		
		
		if($je_podkategoria){
		
		?>
	<h3><?= $prevNazvy?></h3>
    <h1><?= $prevNazov?></h1>

	<div class="container-categories">
		<ul class="items">
			<?php 	
				
				
				if($polia_kategorii[0]){
					foreach ($polia_kategorii[0] as $k1_s) {
						
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$k1_s?>"><?=  $k1_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[1]){
					foreach ($polia_kategorii[1] as $k2_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$k2_s?>"><?=  $k2_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[2]){
					foreach ($polia_kategorii[2] as $k3_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$k3_s?>"><?=  $k3_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[3]){
					foreach ($polia_kategorii[3] as $k4_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$k4_s?>"><?=  $k4_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[4]){
					foreach ($polia_kategorii[4] as $k5_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$k5_s?>"><?=  $k5_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[5]){
					foreach ($polia_kategorii[5] as $k6_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$pole_kategorii_url[5]?>&k7=<?=$k6_s?>"><?=  $k6_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[6]){
					foreach ($polia_kategorii[6] as $k7_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$pole_kategorii_url[5]?>&k7=<?=$pole_kategorii_url[6]?>&k8=<?=$k7_s?>"><?=  $k7_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[7]){
					foreach ($polia_kategorii[7] as $k8_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$pole_kategorii_url[5]?>&k7=<?=$pole_kategorii_url[6]?>&k8=<?=$pole_kategorii_url[7]?>&k9=<?=$k8_s?>"><?=  $k8_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[8]){
					foreach ($polia_kategorii[8] as $k9_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$pole_kategorii_url[5]?>&k7=<?=$pole_kategorii_url[6]?>&k8=<?=$pole_kategorii_url[7]?>&k9=<?=$pole_kategorii_url[8]?>&k10=<?=$k9_s?>"><?=  $k9_s ?></a></li>
						<?php
					}
				}elseif($polia_kategorii[9]){
					foreach ($polia_kategorii[9] as $k10_s) {
						?>
							<li class="item"><a href="products.php?k1=<?=$pole_kategorii_url[0]?>&k2=<?=$pole_kategorii_url[1]?>&k3=<?=$pole_kategorii_url[2]?>&k4=<?=$pole_kategorii_url[3]?>&k5=<?=$pole_kategorii_url[4]?>&k6=<?=$pole_kategorii_url[5]?>&k7=<?=$pole_kategorii_url[6]?>&k8=<?=$pole_kategorii_url[7]?>&k9=<?=$pole_kategorii_url[8]?>&k10=<?=$pole_kategorii_url[9]?>&k11=<?=$k10_s?>"><?=  $k10_s ?></a></li>
						<?php
					}
				}


				
			?>	
		</ul>
	</div>
	<?php } ?>

	<div class="obsah produkty">
			<?php
				$selectitems = $pagenum * 15;
				$sql = "SELECT nazov, popisproduktu, cena, img, urlnazov FROM `projektdatart` WHERE kategoria LIKE '$sql_k%' LIMIT $selectitems,9;";
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
	<?php
	include "parts/footer.php";
	
	?>

