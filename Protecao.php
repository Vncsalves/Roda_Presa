<?php 
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['Nome_Cliente'])){
   
}elseif(isset($_SESSION['Nome_Adm'])){

}else{
    die("Você não tem acesso a está página, faça login");
}
?>