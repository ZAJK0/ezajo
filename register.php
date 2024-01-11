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
        <li class="active">Registrácia</li>
    </ul>
    <h3>Registrácia</h3>
    <div class="well">
        <form class="form-horizontal">
            <h4>Vaše osobné informácie</h4>
            <div class="control-group">
                <label class="control-label">Oslovenie <sup>*</sup></label>
                <div class="controls">
                    <select class="span1" name="days">
                        <option value="">-</option>
                        <option value="1">Pán</option>
                        <option value="2">Pani</option>
                        <option value="3">Slečna</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputFname1">Meno <sup>*</sup></label>
                <div class="controls">
                    <input type="text" id="inputFname1" placeholder="Meno">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputLnam">Priezvisko <sup>*</sup></label>
                <div class="controls">
                    <input type="text" id="inputLnam" placeholder="Priezvisko">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input_email">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="text" id="input_email" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword1">Heslo <sup>*</sup></label>
                <div class="controls">
                    <input type="password" id="inputPassword1" placeholder="Heslo">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Dátum narodenia <sup>*</sup></label>

		<div class="controls">

		  <select class="span1" name="days">

				<option value="">-</option>

					<option value="1">1&nbsp;&nbsp;</option>

					<option value="2">2&nbsp;&nbsp;</option>

					<option value="3">3&nbsp;&nbsp;</option>

					<option value="4">4&nbsp;&nbsp;</option>

					<option value="5">5&nbsp;&nbsp;</option>

					<option value="6">6&nbsp;&nbsp;</option>

					<option value="7">7&nbsp;&nbsp;</option>

			</select>

			<select class="span1" name="days">

				<option value="">-</option>

					<option value="1">1&nbsp;&nbsp;</option>

					<option value="2">2&nbsp;&nbsp;</option>

					<option value="3">3&nbsp;&nbsp;</option>

					<option value="4">4&nbsp;&nbsp;</option>

					<option value="5">5&nbsp;&nbsp;</option>

					<option value="6">6&nbsp;&nbsp;</option>

					<option value="7">7&nbsp;&nbsp;</option>

			</select>

			<select class="span1" name="days">

				<option value="">-</option>

					<option value="1">1&nbsp;&nbsp;</option>

					<option value="2">2&nbsp;&nbsp;</option>

					<option value="3">3&nbsp;&nbsp;</option>

					<option value="4">4&nbsp;&nbsp;</option>

					<option value="5">5&nbsp;&nbsp;</option>

					<option value="6">6&nbsp;&nbsp;</option>

					<option value="7">7&nbsp;&nbsp;</option>

			</select>

		</div>

	  </div>



	<div class="alert alert-block alert-error fade in">

		<button type="button" class="close" data-dismiss="alert">×</button>

		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s

	 </div>	



	 <h4>Vaša adresa</h4>
<div class="control-group">
    <label class="control-label" for="inputFname">Meno <sup>*</sup></label>
    <div class="controls">
        <input type="text" id="inputFname" placeholder="Meno">
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="inputLname">Priezvisko <sup>*</sup></label>
    <div class="controls">
        <input type="text" id="inputLname" placeholder="Priezvisko"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="company">Spoločnosť</label>
    <div class="controls">
        <input type="text" id="company" placeholder="Spoločnosť"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="address">Adresa<sup>*</sup></label>
    <div class="controls">
        <input type="text" id="address" placeholder="Adresa"/> <span>Ulica, P.O. box, názov spoločnosti, c/o</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="address2">Adresa (Riadok 2)<sup>*</sup></label>
    <div class="controls">
        <input type="text" id="address2" placeholder="Adresa (Riadok 2)"/> <span>Byt, poschodie, jednotka, budova atď.</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="city">Mesto<sup>*</sup></label>
    <div class="controls">
        <input type="text" id="city" placeholder="Mesto"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="state">Štát<sup>*</sup></label>
    <div class="controls">
        <select id="state" >
            <option value="">-</option>
            <option value="1">Alabama</option><option value="2">Aljaška</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">Kalifornia</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">Hlavné mesto Washington</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Havaj</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">Severná Karolína</option><option value="34">Severná Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Portoriko</option><option value="39">Rhode Island</option><option value="40">Južná Karolína</option><option value="41">Južná Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">Panenské ostrovy Spojených štátov</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virgínia</option><option value="47">Washington</option><option value="48">Západná Virgínia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="postcode">PSČ<sup>*</sup></label>
    <div class="controls">
        <input type="text" id="postcode" placeholder="PSČ"/>
    </div>
</div>
<div class "control-group">
    <label class="control-label" for="country">Krajina<sup>*</sup></label>
    <div class="controls">
        <select id="country" >
            <option value="">-</option>
            <option value="1">Krajina</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="aditionalInfo">Dodatočné informácie</label>
    <div class="controls">
        <textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Dodatočné informácie</textarea>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="phone">Domáci telefón <sup>*</sup></label>
    <div class="controls">
        <input type="text"  name="phone" id="phone" placeholder="Domáci telefón"/> <span>Je potrebné zaregistrovať aspoň jeden telefónny číslo</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="mobile">Mobilný telefón</label>
    <div class="controls">
        <input type="text"  name="mobile" id="mobile" placeholder="Mobilný telefón"/>
    </div>
</div>
<p><sup>*</sup>Povinné pole</p>
<div class="control-group">
    <div class="controls">
        <input type="hidden" name="email_create" value="1">
        <input type="hidden" name="is_new_customer" value="1">
        <input class="btn btn-large btn-success" type="submit" value="Registrovať" />
    </div>
</div>
</div>
</div>
</div>
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