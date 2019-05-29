<?php

?>


<!--
session_start();

echo $_SESSION['msg'] '<br>';
echo 'Witaj: '.$_SESSION['witaj'].'<br>;

echo password_hash($psswd, PASSWORD_DEFAULT);

if (!isset($_POST['logowanie'])) 
{
echo 'zaloguj się<br>';$msg='';
}
else
{
$msg ='';
$login = trim($_POST['login']);
$haslo=trim($_POST['haslo']);
}

if (empty($login) || empty($haslo))
{
$msg = 'Brak loginu lub hasła'
}
else
{
$serwer='localhost' //127.0.0.1
$user='root';
		$pass='';
		$baza='baza_aplikacje';
		$db = new mysqli($serwer, $user, $pass, $baza);
		if(!$db){die('Błąd połączenia: '.mysql_error());}
		else{echo 'Połączenie nawiązano<br>';}
					
		$wyniki=$db->query("SELECT * FROM admins WHERE login = '$login'");	
		$ile_znaleziono = $wyniki->num_rows;
		
		if ($ile_znaleziono>0) {
			$kolumna=$wyniki->fetch_array();
			if(password_verify($haslo,$kolumna['pass'])){
				$_SESSION['msg']='Jesteś zalogowany'; 
				$_SESSION['witaj']=$login;
				header("location: cms/index.php");
			}	
			else { $msg='Podałeś błedne hasło!';}			
		}
		else { $msg='Nie ma w bazie użytkownika o takim loginie!';}			
	}		
}	
?>

}


?>
-->
