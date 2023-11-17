<?php
if(isset($_POST['submit'])){
    include('Config.php');
    $Nome= $_POST['Nome'];
    $Email= $_POST['Email'];
    $Senha= $_POST['Senha'];
    $Modelo_Carro= $_POST['Modelo_Carro'];
    $Data_Nascimento= $_POST['Data_Nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO Clientes (Nome_Cliente,Email,Senha_Cliente,Modelo_Carro,Data_Nascimento)
    Values ('$Nome','$Email','$Senha','$Modelo_Carro','$Data_Nascimento')");
}
 ?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="Assets/Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Cadastro.css">
</head>
<body>
    <div id="Div_Central">
     <div id="Formulario_Cadastro">
        <div id="Div_Img">
            <img src="Assets/mao-de-mecanico-verificando-e-consertando-um-carro-quebrado-na-garagem-de-servico 1.png" alt="">
        </div>
        <div id="Form_Cad">
            <Form class="Form" action="Cadastro.php" method="POST">
                <H1 id="Titulo_Cad">Cadastro</H1>
                <p class="Escrita_Cad">Nome:</p>
                <input class="Inputs" type="text" name="Nome">
                <p class="Escrita_Cad">Email:</p>
                <input class="Inputs" type="email" name="Email">
                <p class="Escrita_Cad">Senha:</p>
                <input class="Inputs" type="search" name="Senha">
                <p class="Escrita_Cad">Modelo Carro:</p>
                <input class="Inputs" type="text" name="Modelo_Carro">
                <p class="Escrita_Cad">Data de Nascimento:</p>
                <input class="Inputs" type="date" name="Data_Nascimento">
                <div id="Itens_Fora_Form">
                <div id="Voltar"><a href="index.php"><p>Voltar</p></div></a>
                <div id="Bt_Cad"><input type="submit" name="submit"></div>
            </div>
            </Form>
           
        </div>
     </div>
     
    </div>
</body>
</html>