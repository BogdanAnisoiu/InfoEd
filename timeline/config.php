
<!--
	// Conexiunea la baza de date
   	$con = mysqli_connect('localhost','u_infoed','infoed_00','infoed');
   
   	// Verificare conexiune la baza de date
	if (mysqli_connect_errno())
	{
  		echo "Aplicatia nu s-a putut conecta la baza de date: " . mysqli_connect_error();
  		exit;
	}

	// Schimbare set de caractere la UTF8 pentru prevenirea injectarii SQL
	mysqli_set_charset($con,"utf8");

// functia de criptare a parametrilor transmisi intre ecrane
function criptare($string)
{
  $key = "a"; //cheia de criptare 
  $result = '';
  $test = "";
  for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)+ord($keychar));

     $test[$char]= ord($char)+ord($keychar);
     $result.=$char;
   }

   return urlencode(base64_encode($result));
}

// functia de decriptare a parametrilor transmisi intre ecrane
function decriptare($string)
{
    $key = "a"; //cheia de decriptare
    $result = '';
    $string = base64_decode(urldecode($string));
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)-ord($keychar));
     $result.=$char;
   }
   return $result;
}

// functia de trimitere mailuri catre utilizatorii site-ului(parola uitata, etc.)
function trimite_mail($email,$message,$subject)
{						
	require_once('mailer/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 0;                     
	$mail->SMTPAuth   = true;                  
	$mail->SMTPSecure = "ssl";                 
	$mail->Host       = "mail.rememberall.ro";      
	$mail->Port       = 465;             
	$mail->AddAddress($email);
	$mail->Username="atentionare@rememberall.ro";  
	$mail->Password="atentionare00";            
	$mail->SetFrom('atentionare@rememberall.ro','Atentionare RememberAll');
	$mail->AddReplyTo("bogdan.anisoiu@gmail.com","Bogdan Anisoiu");
	$mail->Subject = $subject;
	$mail->MsgHTML($message);
	$mail->Send();
}

function genereaza_parola()
{
	$caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$parola = substr(str_shuffle($caractere), 0, 6);
	
	return $parola;
}
-->
<?php
	// Conexiunea la baza de date
   	$con = mysqli_connect('localhost','u_infoed','infoed_00','infoed');
   
   	// Verificare conexiune la baza de date
	if (mysqli_connect_errno())
	{
  		echo "Aplicatia nu s-a putut conecta la baza de date: " . mysqli_connect_error();
  		exit;
	}

	// Schimbare set de caractere la UTF8 pentru prevenirea injectarii SQL
	mysqli_set_charset($con,"utf8");

// functia de criptare a parametrilor transmisi intre ecrane
function criptare($string)
{
  
	$ciphering = "AES-128-CTR"; // Metoda de cifrare
	// Metoda de criptare OpenSSl
	$iv_length = openssl_cipher_iv_length($ciphering); 
	$options = 0; 
  
	// cheia de criptare vectoriala
	$encryption_iv = '1234567891011121'; 
  
	// cheia de criptare 
	$encryption_key = "bogdan"; 

	// Criptare parametru
	$rezultat = openssl_encrypt($string, $ciphering, 
				$encryption_key, $options, $encryption_iv); 
	
	return $rezultat; 
}

// functia de decriptare a parametrilor transmisi intre ecrane
function decriptare($string)
{
	// Metoda de cifrare
	$ciphering = "AES-128-CTR"; 
	// Metoda de criptare OpenSSl
	$iv_length = openssl_cipher_iv_length($ciphering); 
	$options = 0; 
	$decryption_iv = '1234567891011121'; 
	$decryption_key = "bogdan"; 
  
	// Decriptare parametru
	$rezultat=openssl_decrypt ($string, $ciphering,  
		$decryption_key, $options, $decryption_iv); 
	return $rezultat;
}

// functia de trimitere mailuri catre utilizatorii site-ului(parola uitata, etc.)
function trimite_mail($email,$message,$subject)
{						
	require_once('mailer/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 0;                     
	$mail->SMTPAuth   = true;                  
	$mail->SMTPSecure = "ssl";                 
	$mail->Host       = "mail.rememberall.ro";      
	$mail->Port       = 465;             
	$mail->AddAddress($email);
	$mail->Username="atentionare@rememberall.ro";  
	$mail->Password="atentionare00";            
	$mail->SetFrom('atentionare@rememberall.ro','Atentionare RememberAll');
	$mail->AddReplyTo("bogdan.anisoiu@gmail.com","Bogdan Anisoiu");
	$mail->Subject = $subject;
	$mail->MsgHTML($message);
	$mail->Send();
}

function genereaza_parola()
{
	$caractere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$parola = substr(str_shuffle($caractere), 0, 6);
	
	return $parola;
}
?>