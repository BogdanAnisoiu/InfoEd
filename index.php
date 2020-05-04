<?php
include("config.php");

if(isset($_POST['cmd_login'])) 
{
    

	  $email = mysqli_real_escape_string($con,$_POST['txtemail']);
      $parola = mysqli_real_escape_string($con,$_POST['txtparola']); 
      $parola=md5($parola);
      $sql = "SELECT id_utilizator FROM utilizatori WHERE email = '$email' and parola = '$parola'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
//      $active = $row['active'];
      
      $cate = mysqli_num_rows($result);
      if($cate == 1)
	  {
	  	$id = $row['id_utilizator'];
	  	session_start();
//         session_register("myusername");
//         $_SESSION['login_user'] = $myusername;
         
         header("location: teste.php?id=".criptare($id));
	  }
	else
	{
		$eroare = "<div class='LoginForm' style='font-size:11px; color:#cc0000; margin-top:10px;'>E-mail sau parola eronate!</div>";
        $script = "<script> $(document).ready(function(){ $('#LoginForm').modal('show'); }); </script>";
	}
}
else
{
	//$eroare="";
}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info Ed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap441/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stil.css">
  <script src="ajax_jquery_341/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body style="background-color:#e8e8e8;">

<!-- Inceput NAVBAR> -->
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #4da6ff;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="" class="nav-link" href="#">Acasa</a>
            </li>
            <!--
            <li class="nav-item active">
                <a class="nav-link" href="#">Despre noi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Teste</a>
            </li>
            -->
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">InfoEd</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
		
			<!--<li class="nav-item active dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Top Elevi</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Romana</a>
					<a class="dropdown-item" href="#">Matematica</a>
					<a class="dropdown-item" href="#">Informatica</a>
				</div>
			</li>
        -->

			<li class="nav-item active">
                <a class="nav-link" href="" data-toggle="modal" data-target="#LoginForm">Log In</a>
            </li>
			
        </ul>
    </div>
</nav>
<!-- SFARSIT NAVBAR -->
<br>

<div class="container">


  <!-- Each carousel needs a unique ID -->
  <div id="carousel-id" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="poze/termopile.jpg" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="poze/alesia.jpg" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="poze/vaslui.jpg" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="poze/calugareni.jpg" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="poze/leipzig.jpg" class="img-fluid">
      </div>
      <div class="carousel-item">
        <img src="poze/stalingrad.jpg" class="img-fluid">
      </div>	  
    </div>

    <ol class="carousel-indicators">
      <li data-target="#carousel-" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    </ol>
<!--    
	<p class="text-xs-center">
      <a class="" href="#carousel-id" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span> Previous
      </a>&emsp;
      <a class="l" href="#carousel-id" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span> Next
      </a>
    </p>
-->
    <!-- /.text-center -->
  </div>
<!-- /.carousel -->
  
</div>
<!-- /.container -->

<br>

<div class="container-fluid" style="width:95%;border:1px solid #00334e;border-radius:15px;">
<br>
<p style="font-name:Calibri, Verdana, sans-serif;font-size:12pt;color:#00334e;"><b>InfoEd</b> este o librarie virtuala care va pune la dispozitie, spre lectura, sase carti care descriu unele dintre cele mai celebre batalii din istoria omenirii si va da posibilitatea de a va testa cunostiintele in urma lecturarii cartilor. Cele sase batalii prezentate sunt: Batalia de la Termopile, Batalia de la Alesia, Batalia de la Vaslui, Batalia de la Calugareni, Batalia de la Leipzig si Batalia de la Stalingrad.</p>
<p style="font-name:Calibri, Verdana, sans-serif;font-size:12pt;color:#00334e;">Dupa autentificarea pe site-ul nostru aveti posibilitatea de a descoperi o lectura placuta si facila prin intermediul unei interfete extrem de prietenoase si veti descoperi curiozitati legate de bataliile mentionate mai sus, imbunatatindu-va astfel cultura generala.</p>
<p style="font-name:Calibri, Verdana, sans-serif;font-size:12pt;color:#00334e;">Pentru cei pasionati de istorie sau pentru cei care doresc sa-si exerseze capacitatea de memorare avem pregatit cate un test pentru fiecare din cele sase batalii, test in care, in timp de 10 minute va trebui sa raspundeti la cinci intrebari, fiecare intrebare avand cinci variante de raspuns din care numai o varianta este cea corecta.</p>
<p style="font-name:Calibri, Verdana, sans-serif;font-size:14pt;color:#00334e;text-align:center;font-weight:bold;">Lectura placuta si succes la teste!</p>


</div>



<!-- Fereastra de Login -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Continut-->
    <div style="border-style: solid;
 	border-width: 3px;
	border-color: #bfbfbf; /*#0084ff;*/
	border-radius: 7px;
	box-shadow: 10px 10px 10px 0px #66b5ff;" class="modal-content bordura">
				<div style="background-color:#4da9ff;" class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-lock"></i>&nbsp;&nbsp;Autentificare</h4>			
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div style="background-color:#cce6ff;" class="modal-body fond-body">
        <!--Body-->
		<?php if(isset($eroare))
		{
		echo $eroare; 
		$eroare="";
		}
		 ?>
		<form method="post">
    <div class="form-group ">
					  <label class="eticheta_st" for="txtemail">Adresa de e-mail</label>
					  <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
  webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
  display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" type="email" class="text_litere gradient" name="txtemail" placeholder="you@yourdomain.com" required />
					 </div>


           <div class="form-group ">
          <label class="eticheta_st" for="txtparola">Parola</label>
          <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
  webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
  display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" id="parola" type="password" name="txtparola" class="text_litere gradient" required>
          <span toggle="#parola" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          <p class="font-small blue-text d-flex justify-content-end">
		  <a href="parola_uitata.php" class="blue-text ml-1">Parola uitata?</a></p>
        </div>



		<?php if(isset($script)){ echo $script; } ?>
		
      </div>
      <!--Footer-->
      <div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
<!--      <div class="text-center mb-3">-->
          <button type="submit" name="cmd_login" class="btn btn-primary">Autentificare</button>
 <!--       </div>-->
        <p class="font-small grey-text d-flex justify-content-end">Nu ai cont inca? <a href="profil_adauga.php" class="creare_cont">
            Creeaza-ti un cont!</a></p>
      </div>
      </form>
    </div>

  </div>
</div>

<!-- Sfarsit fereastra de Login -->


<br>
<!-- <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
 <div class="container-fluid">
	<br /><br /><br />
	<div class="text-center"> 
		<img class="img-fluid" src="111.jpg"> 
	</div>
</div>
</div>
-->

  <script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
  </script>

</body>
</html>


