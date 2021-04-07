<?php 
function login($nama,$pass)
{
    if($nama=="user" OR $nama=="user@gmail.com" && $pass="123"){
	return true;
}else{
	return false;
}
}

?>