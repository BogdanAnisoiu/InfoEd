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
  <link rel="stylesheet" href="stil2.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>
</head>


<body>
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #4da6ff;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php echo "<a class='nav-link' href=index.php?id=".criptare($id).">Acasa</a>" ?>
                
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
          <?php   
            echo "<a class='dropdown-item' href=profil_modifica.php?id=".criptare($id).">Profilul meu</a>";
            echo "<a class='dropdown-item' href=schimbare_parola.php?id=".criptare($id).">Schimbare parola</a>";
			echo "<div class='dropdown-divider'></div>";
			echo "<a class='dropdown-item' href=top.php?id=".criptare($id).">Topul bibliotecii</a>";
			echo "<div class='dropdown-divider'></div>";
          ?>

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
    <div class="content" style="max-width:90%;">
    <?php 
    $id_test=1;
    
    $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
    $result = mysqli_query($con, $sql);
    $linie = mysqli_fetch_assoc($result);
    $cate1 = $linie['cate'];
    if( $cate1 > 0)
    {
    
        $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
        $rezultat=mysqli_query($con,$sql);
        $linie=mysqli_fetch_assoc($rezultat);
        $scor1=$linie['scor'];
    
        echo '<p style="text-align:center;background-color:#4da9ff;;">Scor : '.$scor1.' puncte </p>';
        echo '<img class="img-fluid img" src="1.jpg">';
    }
    else
    {
      echo "<a href=termopile/index.php?id=".criptare($id)."><img class='img-fluid img' src='1.jpg'></a>";
    }
    ?>
                             
    </div>
  </div>
  <div class="containerr right">
    <div  class="content" style="max-width:90%;">
    <?php
      $id_test=2;
      $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
      $result = mysqli_query($con, $sql);
      $linie = mysqli_fetch_assoc($result);
      $cate2 = $linie['cate']; 
      if( $cate2 > 0)
      {
      
          $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
          $rezultat=mysqli_query($con,$sql);
          $linie=mysqli_fetch_assoc($rezultat);
          $scor2=$linie['scor'];
      
          echo '<p style="text-align:center;background-color:#4da9ff;">Scor : '.$scor2.' puncte</p>';
          echo '<img class="img-fluid img"src="Alesia.png"></a>';
      }
      else
      {
        echo "<a href=alesia/index.php?id=".criptare($id)."><img class='img-fluid img'src='Alesia.png'></a>";
      }
    ?>
    </div>
  </div>
  <div class="containerr left">
    <div class="content" style="max-width:90%;">
    <?php
    $id_test=3;
    $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
    $result = mysqli_query($con, $sql);
    $linie = mysqli_fetch_assoc($result);
    $cate3 = $linie['cate'];
    if( $cate3 > 0)
    {
    
        $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
        $rezultat=mysqli_query($con,$sql);
        $linie=mysqli_fetch_assoc($rezultat);
        $scor3=$linie['scor'];
    
      echo '<p style="text-align:center;background-color:#4da9ff;">Scor : '.$scor3.' puncte</p>';
      echo '<img class="img-fluid img"  src="vaslui.jpg"></a>';
    }
    else
    {
      echo "<a href=vaslui/index.php?id=".criptare($id)."><img class='img-fluid img' src='vaslui.jpg'></a>";
    }
    ?>
    </div>
  </div>
  <div class="containerr right">
    <div class="content" style="max-width:90%;">
    <?php
    $id_test=4;
    $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
    $result = mysqli_query($con, $sql);
    $linie = mysqli_fetch_assoc($result);
    $cate4 = $linie['cate'];
    if( $cate4 > 0)
    {
    
        $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
        $rezultat=mysqli_query($con,$sql);
        $linie=mysqli_fetch_assoc($rezultat);
        $scor4=$linie['scor'];
    
        echo '<p style="text-align:center;background-color:#4da9ff;">Scor : '.$scor4.' puncte</p>';
        echo '<img class="img-fluid img"  src="calugareni.jpg"></a>';
      }
      else
      {
        echo '<a href=calugareni/index.php?id='.criptare($id).'><img class="img-fluid img" src="calugareni.jpg"></a>';
      } 
    ?>
    </div>
  </div>
  <div class="containerr left">
    <div class="content" style="max-width:90%;">
    <?php
    $id_test=5;
    $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
    $result = mysqli_query($con, $sql);
    $linie = mysqli_fetch_assoc($result);
    $cate5 = $linie['cate'];
     
   
    if( $cate5 > 0)
    {
    
        $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
        $rezultat=mysqli_query($con,$sql);
        $linie=mysqli_fetch_assoc($rezultat);
        $scor5=$linie['scor'];
    
      echo '<p style="text-align:center;background-color:#4da9ff;">Scor : '.$scor5.' puncte</p>';
      echo '<img class="img-fluid img" src="leipzig.jpg"></a>';
    }
    else
    {
      echo '<a href=leipzig/index.php?id='.criptare($id).'><img class="img-fluid img" src="leipzig.jpg"></a>'; 
    }
  ?>
    </div>
  </div>
  <div class="containerr right">
    <div class="content" style="max-width:90%;">
    <?php
    $id_test=6;
    $sql ="SELECT COUNT(*) as cate FROM utilizatori_teste WHERE id_utilizator=".$id." and id_test=".$id_test;
    $result = mysqli_query($con, $sql);
    $linie = mysqli_fetch_assoc($result);
    $cate6 = $linie['cate'];
    if( $cate6 > 0)
    {
    
        $sql="select scor from utilizatori_teste where id_utilizator=".$id." and id_test=".$id_test;
        $rezultat=mysqli_query($con,$sql);
        $linie=mysqli_fetch_assoc($rezultat);
        $scor6=$linie['scor'];
    
      echo ' <p style="text-align:center;background-color:#4da9ff;">Scor : '.$scor6.' puncte</p>';
      echo '<img class="img-fluid img"  src="stalingrad.jpg"></a>';
    }
    else
    {
      echo "<a href=stalingrad/index.php?id=".criptare($id).">   <img class='img-fluid img'  src='stalingrad.jpg ' ></a>";
    }
  ?>

    </div>
  </div>
</div>

</body>
</html>

