<?php
include("config.php");
$id = decriptare($_GET['id']);

$sql = "SELECT prenume, email FROM utilizatori WHERE id_utilizator=".$id;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$email = $row['email'];
$prenume = $row['prenume'];
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info Ed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap441/css/bootstrap.min.css">
  <link rel="stylesheet" href="stil.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>
</head>


<body>
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #4da6ff;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php echo "<a class='nav-link' href=acasa.php?id=".criptare($id).">Acasa</a>" ?>
                
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="">Salut, <?php echo $prenume; ?>!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
		
			<li class="nav-item active dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $email;?></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Profilul meu</a>
                    
                    <?php
                     echo "<a class='dropdown-item' href=schimbare_parola.php?id=".criptare($id).">Schimbare parola</a>" 
                    ?>
                
					<a class="dropdown-item" href="#">Rezultatele mele</a>
					<a class="dropdown-item" href="logout.php">Logout</a>
				</div>
			</li>
			
			<li class="nav-item">
                <a class="nav-link" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
        </ul>

		
		
    </div>
</nav>  
<div class="timeline">
  <div class="containerr left">
    <div class="content">
    
       <img class="img-fluid" src="1.jpg" style="padding-left: 10px;">
    </div>
  </div>
  <div class="containerr right">
    <div  class="content">
      
      <img class="img-fluid" src="1.png" style="padding-left: 10px;">
    </div>
  </div>
  <div class="containerr left">
    <div class="content">
    <img class="img-fluid" src="vaslui.jpg" style="padding-left: 10px;">
    </div>
  </div>
  <div class="containerr right">
    <div class="content">
    <img class="img-fluid" src="calugareni.jpg" style="padding-left: 10px;">
    </div>
  </div>
  <div class="containerr left">
    <div class="content">
    <img class="img-fluid" src="leipzig.jpg" style="padding-left: 10px;">
    </div>
  </div>
  <div class="containerr right">
    <div class="content">
    <img class="img-fluid" src="stalingrad.jpg" style="padding-left: 10px;">
    </div>
  </div>
</div>

</body>
</html>

