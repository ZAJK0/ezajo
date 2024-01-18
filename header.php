<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="">
	<title><?php if(isset($zvoleny_produkt)){
		echo implode('', array_column($zvoleny_produkt, 'nazov'));}
		elseif(isset($_GET['k1'])){
				echo $_GET['k1'];}
		else{
			echo "EZAJO";}
     ?></title>

<!--Less styles -->

   <!-- Other Less css file //different less files has different color scheam

	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">

	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	
-->

<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">

<script src="themes/js/less.js" type="text/javascript"></script> -->



<!-- Bootstrap style --> 

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>

    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>

<!-- Bootstrap style responsive -->	

	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>

	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">

<!-- Google-code-prettify -->	

	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	
	<!-- fav and touch icons -->
	
    <link rel="shortcut icon" href="css/logo.png">
	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
	<style type="text/css" id="enject"></style>
	<link href="./css/style.css" rel="stylesheet"/>

  </head>

<body>
	<?php
	include"config.php";
	include"function.php";
	?>

<div id="header">

<div class="container">

<div id="welcomeLine" class="row">

	

</div>

<!-- Navbar ================================================== -->

<div id="logoArea" class="navbar">

<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	<span class="icon-bar"></span>

</a>

  <div class="navbar-vnut">
	
		<a class="brand" href="index.php"><img src="css/logo.png" alt="Bootsshop"/></a>
		<?php
		// Initialize the variable
		$inputValue = '';

		// Check if the form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get the value from the input field
			$inputValue = $_POST["inputField"];
		}
		?>
			
			<form method="post" action="search.php" class="searchForm" > 
                <input class="search" id="srchFld" name="srch" type="text" />
                <button class="searchBut" type="submit" id="submitButton" >Hľadať</button>
            </form>
			

    <!-- <ul id="topMenu" class="nav pull-right"> -->

	 <!-- <li class=""><a href="special_offer.php">Špeciálne offerky</a></li> -->

	 <!-- <li class=""><a href="normal.php">Delivery</a></li>

	 <li class=""><a href="contact.php">Kontakt</a></li>

	 <li class="">

	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>

	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" > -->

		  <!-- <div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>

			<h3>Prihlásenie Blok</h3>

		  </div>

		  <div class="modal-body">

			<form class="form-horizontal loginFrm">

			  <div class="control-group">								

				<input type="text" id="inputEmail" placeholder="Email">

			  </div>

			  <div class="control-group">

				<input type="password" id="inputPassword" placeholder="Password">

			  </div>

			  <div class="control-group">

				<label class="checkbox">

				<input type="checkbox"> Zpametaj si ma

				</label>

			  </div>

			</form>		

			<button type="submit" class="btn btn-success">Prihlásiť sa</button>

			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

		  </div> -->

	</div>

	</li>

    </ul>

  </div>

</div>

</div>

</div>

<!-- Header End====================================================================== -->