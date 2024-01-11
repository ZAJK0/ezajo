<?php
include 'header.php';
?>

<!-- Header End====================================================================== -->

<div id="mainBody">

	<div class="container">

	<div class="row">

<!-- Sidebar ================================================== -->

<?php
include 'sidebar.php'	
?>

<!-- Sidebar end=============================================== -->

<div class="span9">

    <ul class="breadcrumb">

        <li><a href="index.php">Domov</a> <span class="divider">/</span></li>

        <li class="active">KOŠÍK</li>

    </ul>

    <h3> KOŠÍK [ <small>3 položky </small>]<a href="products.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Pokračovať v nákupe </a></h3>

    <hr class="soft"/>

    <table class="table table-bordered">

        <tr><th> UŽ SOM REGISTROVANÝ </th></tr>

        <tr>

            <td>

                <form class="form-horizontal">

                    <div class="control-group">

                        <label class="control-label" for="inputUsername">Meno používateľa</label>

                        <div class="controls">

                            <input type="text" id="inputUsername" placeholder="Meno používateľa">

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="inputPassword1">Heslo</label>

                        <div class="controls">

                            <input type="password" id="inputPassword1" placeholder="Heslo">

                        </div>

                    </div>

                    <div class="control-group">

                        <div class="controls">

                            <button type="submit" class="btn">Prihlásiť sa</button> ALEBO <a href="register.php" class="btn">Registrovať sa teraz!</a>

                        </div>

                    </div>

                    <div class="control-group">

                        <div class="controls">

                            <a href="forgetpass.php" style="text-decoration:underline">Zabudli ste heslo?</a>

                        </div>

                    </div>

                </form>

            </td>

        </tr>

    </table>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th>Produkt</th>

            <th>Popis</th>

            <th>Množstvo/Aktualizácia</th>

            <th>Cena</th>

            <th>Zľava</th>

            <th>Daň</th>

            <th>Celkom</th>

        </tr>

        </thead>

        <tbody>

        <tr>

            <td> <img width="60" src="themes/images/products/4.jpg" alt=""/></td>

            <td>MASSA AST<br/>Farba: čierna, Materiál: kov</td>

            <td>

                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button> </div>

            </td>

            <td>$120.00</td>

            <td>$25.00</td>

            <td>$15.00</td>

            <td>$110.00</td>

        </tr>

        <tr>

            <td> <img width="60" src="themes/images/products/8.jpg" alt=""/></td>

            <td>MASSA AST<br/>Farba: čierna, Materiál: kov</td>

            <td>

                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button> </div>

            </td>

            <td>$7.00</td>

            <td>--</td>

            <td>$1.00</td>

            <td>$8.00</td>

        </tr>

        <tr>

            <td> <img width="60" src="themes/images/products/3.jpg" alt=""/></td>

            <td>MASSA AST<br/>Farba: čierna, Materiál: kov</td>

            <td>

                <div class="input-append"><input class="span1" style="max-width:34px" placeholder="1" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i></button><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button> </div>

            </td>

            <td>$120.00</td>

            <td>$25.00</td>

            <td>$15.00</td>

            <td>$110.00</td>

        </tr>

        <tr>

            <td colspan="6" style="text-align:right">Celková cena: </td>

            <td> $228.00</td>

        </tr>

        <tr>

            <td colspan="6" style="text-align:right">Celková zľava: </td>

            <td> $50.00</td>

        </tr>

        <tr>

            <td colspan="6" style="text-align:right">Celková daň: </td>

            <td> $31.00</td>

        </tr>

        <tr>

            <td colspan="6" style="text-align:right"><strong>CELKOVÁ SUMA ($228 - $50 + $31) =</strong></td>

            <td class="label label-important" style="display:block"> <strong> $155.00 </strong></td>

        </tr>

        </tbody>

    </table>

    <table class="table table-bordered">

        <tbody>

        <tr>

            <td>

                <form class="form-horizontal">

                    <div class="control-group">

                        <label class="control-label"><strong> KÓD KUPÓNU: </strong> </label>

                        <div class="controls">

                            <input type="text" class="input-medium" placeholder="KÓD">

                            <button type="submit" class="btn"> PRIDAŤ </button>

                        </div>

                    </div>

                </form>

            </td>

        </tr>

        </tbody>

    </table>

    <table class="table table-bordered">

        <tr><th>ODHADNITE SVOJU DOPRAVU </th></tr>

        <tr>

            <td>

                <form class="form-horizontal">

                    <div class="control-group">

                        <label class="control-label" for="inputCountry">Krajina</label>

                        <div class="controls">

                            <input type="text" id="inputCountry" placeholder="Krajina">

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="inputPost">PSČ/PSČ</label>

                        <div class="controls">

                            <input type="text" id="inputPost" placeholder="PSČ">

                        </div>

                    </div>

                    <div class="control-group">

                        <div class="controls">

                            <button type="submit" class="btn">ODHADNÚŤ</button>

                        </div>

                    </div>

                </form>

            </td>

        </tr>

    </table>

    <a href="products.php" class="btn btn-large"><i class="icon-arrow-left"></i> Pokračovať v nákupe </a>

    <a href="login.php" class="btn btn-large pull-right">Ďalšie <i class="icon-arrow-right"></i></a>

</div>

</div></div>

</div>


<!-- MainBody End ============================= -->

<!-- Footer ================================================================== -->

	<div  id="footerSection">

	<div class="container">

		<div class="row">

			<div class="span3">

				<h5>ACCOUNT</h5>

				<a href="login.php">YOUR ACCOUNT</a>

				<a href="login.php">PERSONAL INFORMATION</a> 

				<a href="login.php">ADDRESSES</a> 

				<a href="login.php">DISCOUNT</a>  

				<a href="login.php">ORDER HISTORY</a>

			 </div>

			<div class="span3">

				<h5>INFORMATION</h5>

				<a href="contact.php">CONTACT</a>  

				<a href="register.php">REGISTRATION</a>  

				<a href="legal_notice.php">LEGAL NOTICE</a>  

				<a href="tac.php">TERMS AND CONDITIONS</a> 

				<a href="faq.php">FAQ</a>

			 </div>

			<div class="span3">

				<h5>OUR OFFERS</h5>

				<a href="#">NEW PRODUCTS</a> 

				<a href="#">TOP SELLERS</a>  

				<a href="special_offer.php">SPECIAL OFFERS</a>  

				<a href="#">MANUFACTURERS</a> 

				<a href="#">SUPPLIERS</a> 

			 </div>

			<div id="socialMedia" class="span3 pull-right">

				<h5>SOCIAL MEDIA </h5>

				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>

				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>

				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>

			 </div> 

		 </div>

		<p class="pull-right">&copy; Bootshop</p>

	</div><!-- Container End -->

	</div>

<!-- Placed at the end of the document so the pages load faster ============================================= -->

	<script src="themes/js/jquery.js" type="text/javascript"></script>

	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="themes/js/google-code-prettify/prettify.js"></script>

	

	<script src="themes/js/bootshop.js"></script>

    <script src="themes/js/jquery.lightbox-0.5.js"></script>

	

	<!-- Themes switcher section ============================================================================================= -->

<div id="secectionBox">

<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />

<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>

	<div id="themeContainer">

	<div id="hideme" class="themeTitle">Style Selector</div>

	<div class="themeName">Oregional Skin</div>

	<div class="images style">

	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>

	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>

	</div>

	<div class="themeName">Bootswatch Skins (11)</div>

	<div class="images style">

		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>

		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	

		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>

		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>

	</div>

	<div class="themeName">Background Patterns </div>

	<div class="images patterns">

		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>

		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

		

		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

		

		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

		 

	</div>

	</div>

</div>

<span id="themesBtn"></span>

</body>

</html>