<?php
include_once('Config.php');
include('Protecao.php');
if(!isset($_SESSION)){
    session_start();
}
$Nome_Cliente = $_SESSION['Nome_Cliente'];
$Id_Cliente = $_SESSION['Id_Cliente'];

if(isset($_POST['Update'])){
    $_Id=$User_Data['Id_Servico'];
    $Data_Servico = $_POST['Data_Servico'];
    $Horario_Servico = $_POST['Horario_Servico'];
    $Tipo_Servico = $_POST['Tipo_Servico'];
    $Relatorio_Servico = $_POST['Relatorio_Servico'];
    $Nome_Adm = $_POST['Nome_Adm'];
    $Modelo_Carro = $_POST['Modelo_Carro'];
    $Id_Cliente = $_SESSION['Id_Cliente']; 
    $Nome_Cliente = $_SESSION['Nome_Cliente'];
    $Preco_Final = $_POST['Preco_Final'];

  $sqlUpade= "UPDATE Servicos Set Data_Servico='$Data_Servico', Horario_Servico='$Horario_Servico',Tipo_Servico='$Tipo_Servico',
  Relatorio_Servico='$Relatorio_Servico',Nome_Adm='$Nome_Adm',Modelo_Carro='$Modelo_Carro',Id_Cliente='$Id_Cliente',
  Nome_Cliente='$Nome_Cliente',Preco_Final='$Preco_Final' WHERE Id_Servico='$Id_Servico'";

  $result = $conexao->query($sqlUpade);
}
header('location:Tela_Cliente.php');
?>