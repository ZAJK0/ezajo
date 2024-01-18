<?php
	$sql = "SELECT DISTINCT kategoria FROM `projektdatart` ";
	$kategorie = $DB->prepare($sql);
	$kategorie->execute();
	$kategorie = $kategorie->fetchAll(PDO::FETCH_OBJ);
	$pole_kategorii = array();
	foreach ($kategorie as $kategoria) {
		$kategoria = $kategoria->kategoria;
		$nase_kategorie = explode(" | ", $kategoria);
		$hlavna_kategoria = $nase_kategorie[0];
		if (!in_array($hlavna_kategoria, $pole_kategorii)){
			$pole_kategorii[] = $hlavna_kategoria;
		}
	}
?>


<div id="sidebar" class="span3">

		<!-- <div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->

		<ul id="sideManu" class="nav nav-tabs nav-stacked sidebar">
        <?php 
            foreach ($pole_kategorii as $hlavna_kategoria) {
                $sql = "SELECT DISTINCT kategoria FROM `projektdatart` WHERE kategoria LIKE '$hlavna_kategoria%'";
                $kategorie = $DB->prepare($sql);
                $kategorie->execute();
                $kategorie = $kategorie->fetchAll(PDO::FETCH_OBJ);
            ?>
            
            <li class="subMenu"><a href="products.php?k1=<?=$hlavna_kategoria?>"><?=  $hlavna_kategoria ?></a>
                <ul class="subitem" style="display:none">
                <?php 
                    $podkategorie = array();
                    foreach ($kategorie as $kategoria) {
                        $kategoria = $kategoria->kategoria;
                        $nase_kategorie = explode(" | ", $kategoria);
                        if (isset($nase_kategorie[1]) && !in_array($nase_kategorie[1], $podkategorie)) {
                            $podkategorie[] = $nase_kategorie[1];
                        }
                    }
                    foreach ($podkategorie as $podkategoria) {
                        ?>
                            <li><a href="products.php?k1=<?=$hlavna_kategoria?>&k2=<?=$podkategoria?>"><?=  $podkategoria ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        <?php }  ?>
   
        <!-- <li class="subMenu open"><a> ELEKTRONIKA [230]</a>

    <ul>

        <li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Fotoaparáty (100) </a></li>

        <li><a href="products.php"><i class="icon-chevron-right"></i>Počítače, tablety a notebooky (30)</a></li>

        <li><a href="products.php"><i class="icon-chevron-right"></i>Mobilné telefóny (80)</a></li>

        <li><a href="products.php"><i class="icon-chevron-right"></i>Zvuk a obraz (15)</a></li>

    </ul>

</li>

<li class="subMenu"><a> ODEVY [840] </a>

<ul style="display:none">

    <li><a href="products.php"><i class="icon-chevron-right"></i>Dámske oblečenie (45)</a></li>

    <li><a href="products.php"><i class="icon-chevron-right"></i>Dámske topánky (8)</a></li>												

    <li><a href="products.php"><i class="icon-chevron-right"></i>Dámske kabelky (5)</a></li>	

    <li><a href="products.php"><i class="icon-chevron-right"></i>Pánske oblečenie  (45)</a></li>

    <li><a href="products.php"><i="icon-chevron-right"></i>Pánske topánky (6)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>Detské oblečenie (5)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>Detské topánky (3)</a></li>												

</ul>

</li>

<li class="subMenu"><a>JEDLO A NÁPOJE [1000]</a>

    <ul style="display:none">

    <li><a href="products.php"><i="icon-chevron-right"></i>Angoves  (35)</a></li>

    <li><a href="products.php"><i="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>French Rabbit (5)</a></li>	

    <li><a href="products.php"><i="icon-chevron-right"></i>Louis Bernard  (45)</a></li>

    <li><a href="products.php"><i="icon-chevron-right"></i>Víno BIB (Bag in Box) (8)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>Iné alkoholické nápoje (5)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>Záhrada (3)</a></li>												

    <li><a href="products.php"><i="icon-chevron-right"></i>Khao Shong (11)</a></li>												

    </ul>

</li>

<li><a href="products.php">ZDRAVIE A KRÁSA [18]</a></li>

<li><a href="products.php">ŠPORT A VOĽNÝ ČAS [58]</a></li>

<li><a href="products.php">KNIHY A ZÁBAVA [14]</a> -->

			

			

	</div>