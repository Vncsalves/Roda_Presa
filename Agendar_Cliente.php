<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['submit'])){
    include('Config.php');
    $Data_Servico = $_POST['Data'];
    $Horario_Servico = $_POST['Horario'];
    $Tipo_Servico = $_POST['Tipo_Servico'];
    $Relatorio_Servico="Não disponivel";
    $Nome_Adm = $_POST['Nome_Adm'];
    $Modelo_Carro = $_POST['Modelo_Carro'];
    $Id_Cliente = $_SESSION['Id_Cliente']; 
    $Nome_Cliente = $_SESSION['Nome_Cliente'];
    $Preco_Final="Não disponivel";

    $result = mysqli_query($conexao, "INSERT INTO Servicos (Data_Servico, Horario_Servico,Tipo_Servico, Relatorio_Servico,  Id_Cliente, Nome_Cliente, Nome_Adm, Modelo_Carro,Preco_Final)
    VALUES ('$Data_Servico', '$Horario_Servico', '$Tipo_Servico','$Relatorio_Servico', '$Id_Cliente','$Nome_Cliente', '$Nome_Adm',' $Modelo_Carro','$Preco_Final')");
}
?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agende seu Horario</title>
    <link rel="stylesheet" href="CSS/Agendar_Cliente.css">
    <link rel="shortcut icon" href="Assets/Icon.png" type="image/x-icon">
</head>
<body>
<header>
        <div id="Title">
      <h1><a href="Tela_Cliente.php">Roda </a>Presa</h1>
    </div>
    </header>
<div class="Box">
    <Form action="" method="POST">
    <fieldset>
<legend>Agente seu Horario</legend>
<br/>
<div class="Input_Box">
    <p>Data Visita</p>
    <input type="Date" name="Data">
</div>
<br></br>
<div class="Input_Box">
    <p>Horario</p>
    <input type="tiem" name="Horario">
</div>
<br></br>
<div class="Input_Box">
    <p>Serviço</p>
    <input type="text" name="Tipo_Servico">
</div>
<br></br>
<p>Nome do Funcionário:</p>
<input type="radio" name="Nome_Adm" value="Maria Eduarda" required>
<label for="Maria Eduarda">Maria Eduarda</label>
<input type="radio" name="Nome_Adm" value="João Pedro" required>
<label for="João Pedro">João Pedro</label>
<input type="radio" name="Nome_Adm" value="Thiago Gabriel" required>
<label for="Thiago Gabriel">Thiago Gabriel</label>
<br></br>
<div class="Input_Box">
    <p>Modelo Automovel</p>
    <input type="text" name="Modelo_Carro">
</div>
<br></br>

<a href="Tela_Cliente.php"><input type="submit" name="submit" id="submit"></a>
<br></br>
    </fieldser>
    </form>
</div>
</body>
</html>