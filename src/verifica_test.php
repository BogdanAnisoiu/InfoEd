<?php
include "config.php";
$id=decriptare($_GET['id']);
$id_test=decriptare($_GET['id_test']);

$scor = 0;

$sql0="select intrebare1, v11, v12, v13, v14, v15, intrebare2, v21, v22, v23, v24, v25, intrebare3, v31, v32, v33, v34, v35, 
	intrebare4, v41, v42, v43, v44, v45, intrebare5, v51, v52, v53, v54, v55 from teste where id_test=".$id_test;
$rezultat0=mysqli_query($con, $sql0);
$linie0= mysqli_fetch_assoc($rezultat0);
$i1=$linie0['intrebare1'];
$v11=$linie0['v11'];
$v12=$linie0['v12'];	
$v13=$linie0['v13'];
$v14=$linie0['v14'];
$v15=$linie0['v15'];
$i2=$linie0['intrebare2'];
$v21=$linie0['v21'];
$v22=$linie0['v22'];
$v23=$linie0['v23'];
$v24=$linie0['v24'];
$v25=$linie0['v25'];
$i3=$linie0['intrebare3'];
$v31=$linie0['v31'];
$v32=$linie0['v32'];
$v33=$linie0['v33'];
$v34=$linie0['v34'];
$v35=$linie0['v35'];
$i4=$linie0['intrebare4'];
$v41=$linie0['v41'];
$v42=$linie0['v42'];
$v43=$linie0['v43'];
$v44=$linie0['v44'];
$v45=$linie0['v45'];
$i5=$linie0['intrebare5'];
$v51=$linie0['v51'];
$v52=$linie0['v52'];
$v53=$linie0['v53'];
$v54=$linie0['v54'];
$v55=$linie0['v55'];



$sql1="select raspuns_corect1 as rok1, raspuns_corect2 as rok2, raspuns_corect3 as rok3, raspuns_corect4 as rok4, raspuns_corect5 as rok5 
    from teste where id_test=".$id_test;
$rezultat=mysqli_query($con,$sql1);
$linie=mysqli_fetch_assoc($rezultat);
$rok1=$linie['rok1'];
$rok2=$linie['rok2'];
$rok3=$linie['rok3'];
$rok4=$linie['rok4'];
$rok5=$linie['rok5'];


$sql2="select raspuns_utilizator1 as ru1,raspuns_utilizator2 as ru2,raspuns_utilizator3 as ru3,raspuns_utilizator4 as ru4,
    raspuns_utilizator5 as ru5 from utilizatori_teste where id_test=".$id_test." and id_utilizator=".$id;
$rezultat2=mysqli_query($con,$sql2);
$linie2=mysqli_fetch_assoc($rezultat2);
$ru1=$linie2['ru1'];
$ru2=$linie2['ru2'];
$ru3=$linie2['ru3'];
$ru4=$linie2['ru4'];
$ru5=$linie2['ru5'];

if(isset($_POST['cmd_save']))
{
	header("location:teste.php?id=".criptare($id));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>InfoEd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap441/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stil.css">  
  <script src="ajax_jquery_341/jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="modal-dialog modal-lg">
			<div style="border-style: solid;
 	border-width: 3px;
	border-color: #bfbfbf; /*#0084ff;*/
	border-radius: 7px;
	box-shadow: 10px 10px 10px 0px #66b5ff;" class="modal-content bordura">
				<div style="background-color:#4da9ff;" class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;Rezultate test</h4>
				</div>
				
			

				<form method="post">
				
				<div style="background-color:#cce6ff;" class="modal-body fond-body">
					<div class="form-group">

						<!-- intrebarea 1-->				
						
						<p><?php echo $i1;?></p>

						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" name="radio1" value="1" disabled>
							<label class="varianta-raspuns" for="radio1" ><?php echo $v11; ?></label>
						</div>
											
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" name="radio1" value="2" disabled>
							<label class="varianta-raspuns" for="radio1"><?php echo $v12; ?></label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" name="radio1" value="3" disabled>
							<label class="varianta-raspuns" for="radio1"><?php echo $v13; ?></label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" name="radio1" value="4" disabled>
							<label class="varianta-raspuns" for="radio1"><?php echo $v14;  ?></label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" name="radio1" value="5" disabled>
							<label class="varianta-raspuns" for="radio1"><?php echo $v15; ?></label>
						</div>
                    
                        <?php
						if($rok1==$ru1)
						{
                            echo '<i style="color:green;" class="fa fa-check fa-lg verde"></i>';
                            $scor=$scor + 20;
                           

						}
							
                        else
                        {
                            echo '<i style="color:red;" class="fa fa-times fa-lg rosu"></i>';    
                            echo "&nbsp;  Varianta corecta: ".$rok1."&nbsp;&nbsp; Varianta ta: ".$ru1;
                        }
                                      
                        ?>
                    
                        <hr class="linie">
                        
						<!-- intrebarea 2-->	
								
						<p><?php echo $i2;?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio21" name="radio2" value="1" disabled> 
  							<label class="varianta-raspuns" for="radio2"><?php echo $v21; ?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio22" name="radio2" value="2" disabled>
  							<label class="varianta-raspuns" for="radio2"><?php echo $v22; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio23" name="radio2" value="3" disabled>
  							<label class="varianta-raspuns" for="radio2"><?php echo $v23; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio24" name="radio2" value="4" disabled>
  							<label class="varianta-raspuns" for="radio2"><?php echo $v24; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio25" name="radio2" value="5" disabled>
  							<label class="varianta-raspuns" for="radio2"><?php echo $v25; ?></label>
                        </div>
                        <?php
						if($rok2==$ru2)
						{
                            echo '<i style="color:green;" class="fa fa-check fa-lg verde"></i>';
                            $scor=$scor + 20;
                           
						}
                        else
                        {
                            echo '<i style="color:red;" class="fa fa-times fa-lg rosu"></i>';    
                            echo "&nbsp;  Varianta corecta: ".$rok2."&nbsp;&nbsp; Varianta ta: ".$ru2;
                        }
                                      
                        ?>
                    <hr class="linie">

						<!-- intrebarea 3-->
							
						<p><?php echo $i3; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio31" name="radio3" value="1" disabled>
  							<label class="varianta-raspuns" for="radio3"><?php echo $v31; ?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio32" name="radio3" value="2" disabled>
  							<label class="varianta-raspuns" for="radio3"><?php echo $v32; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio33" name="radio3" value="3" disabled>
  							<label class="varianta-raspuns" for="radio3"><?php echo $v33; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio34" name="radio3" value="4" disabled>
  							<label class="varianta-raspuns" for="radio3"><?php echo $v34; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio35" name="radio3" value="5" disabled>
  							<label class="varianta-raspuns" for="radio3"><?php echo $v35; ?></label>
                        </div>
                        <?php
						if($rok3==$ru3)
						{
                            echo '<i style="color:green;" class="fa fa-check fa-lg verde"></i>';
                            $scor=$scor + 20;
                           
						}
                        else
                        {
                            echo '<i style="color:red;" class="fa fa-times fa-lg rosu"></i>';    
                            echo "&nbsp;  Varianta corecta: ".$rok3."&nbsp;&nbsp; Varianta ta: ".$ru3;
                        }
                                      
                        ?>
                    <hr class="linie">

						<!-- intrebarea 4-->	
								
						<p><?php echo $i4; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio41" name="radio4" value="1" disabled>
  							<label class="varianta-raspuns" for="radio4"><?php echo $v41; ?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio42" name="radio4" value="2" disabled>
  							<label class="varianta-raspuns" for="radio4"><?php echo $v42; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio43" name="radio4" value="3" disabled>
  							<label class="varianta-raspuns" for="radio4"><?php echo $v43; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio44" name="radio4" value="4" disabled>
  							<label class="varianta-raspuns" for="radio4"><?php echo $v44; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio45" name="radio4" value="5" disabled> 
  							<label class="varianta-raspuns" for="radio4"><?php echo $v45; ?></label>
                        </div>
                        <?php
						if($rok4==$ru4)
						{
                            echo '<i style="color:green;" class="fa fa-check fa-lg verde"></i>';
                            $scor=$scor + 20;
                            
						}
                        else
                        {
                            echo '<i style="color:red;" class="fa fa-times fa-lg rosu"></i>';    
                            echo "&nbsp;  Varianta corecta: ".$rok4."&nbsp;&nbsp; Varianta ta: ".$ru4;
                        }
                                      
                        ?>
                    <hr class="linie">

						<!-- intrebarea 5-->
								
						<p><?php echo $i5; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio51" name="radio5" value="1" disabled> 
  							<label class="varianta-raspuns" for="radio5"><?php echo $v51; ?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio52" name="radio5" value="2" disabled>
  							<label class="varianta-raspuns" for="radio5"><?php echo $v52; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio53" name="radio5" value="3" disabled>
  							<label class="varianta-raspuns" for="radio5"><?php echo $v53; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio54" name="radio5" value="4" disabled>
  							<label class="varianta-raspuns" for="radio5"><?php echo $v54; ?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio55" name="radio5" value="5" disabled>
  							<label class="varianta-raspuns" for="radio5"><?php echo $v55; ?></label>
                        </div>
                        <?php
						if($rok5==$ru5)
						{
                            echo '<i style="color:green;" class="fa fa-check fa-lg verde"></i>';
                            $scor=$scor + 20;
                            
						}
                        else
                        {
                            echo '<i style="color:red;" class="fa fa-times fa-lg rosu"></i>';    
							echo "&nbsp;  Varianta corecta: ".$rok5."&nbsp;&nbsp; Varianta ta: ".$ru5;
							
                        }
						$sql3="update utilizatori_teste set scor = ".$scor." where id_utilizator=".$id." and id_test = ".$id_test;
						mysqli_query($con,$sql3);           
                        ?>
                    


				</div>					 
				<div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-danger">Inchide</button>
				</div>

			
			

				</form>
			</div>
		</div>



</body>
</html>
