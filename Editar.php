<?php
include('Config.php');
include('Protecao.php');
if(!isset($_SESSION)){
    session_start();
}
$Nome_Cliente = $_SESSION['Nome_Cliente'];
$Id_Cliente = $_SESSION['Id_Cliente'];

if(!empty($_GET['id'])){
    

    $Id_Servico = $_GET['id'];

    $sqlSelect = "SELECT * FROM Servicos WHERE Id_Servico=$Id_Servico";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        while($User_Data = mysqli_fetch_assoc($result)){
            $_Id=$User_Data['Id_Servico'];
            $Data_Servico = $User_Data['Data_Servico'];
            $Horario_Servico = $User_Data['Horario_Servico'];
            $Tipo_Servico = $User_Data['Tipo_Servico'];
            $Relatorio_Servico = $User_Data['Relatorio_Servico'];
            $Nome_Adm = $User_Data['Nome_Adm'];
            $Modelo_Carro = $User_Data['Modelo_Carro'];
            $Id_Cliente = $_SESSION['Id_Cliente']; 
            $Nome_Cliente = $_SESSION['Nome_Cliente'];
            $Preco_Final = $User_Data['Preco_Final'];

        }
    }else{
        header('location: Tela_Cliente.php');
    }
}
?>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agende seu Horario</title>
    <link rel="stylesheet" href="CSS/Editar.css">
    <link rel="shortcut icon" href="Assets/Icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div id="Title">
            <h1><a href="Tela_Cliente.php">Roda </a>Presa</h1>
        </div>
    </header>
    <div class="Box">
        <form action="Salvar_Alteracoes.php" method="POST">
            <fieldset>
                <legend>Agende seu Horário</legend>
                <br/>
                <div class="Input_Box">
           <p>Data Visita</p>
         <input type="Date" name="Data_Servico" value="<?php echo $Data_Servico?>">
           </div>
          <br></br>
          <div class="Input_Box">
            <p>Horário</p>
             <input type="time" name="Horario_Servico" value="<?php echo $Horario_Servico?>">
           </div>
            <br></br>
           <div class="Input_Box">
                <p>Serviço</p>
              <input type="text" name="Tipo_Servico" value="<?php echo $Tipo_Servico?>">
              </div>
                <br></br>
                <br></br>
                <p>Nome do Funcionário:</p>
                <input type="radio" name="Nome_Adm" value="Maria Eduarda" <?php echo ($Nome_Adm == 'Maria Eduarda') ? 'checked' : ''; ?> required>
                <label for="Maria Eduarda">Maria Eduarda</label>
                <input type="radio" name="Nome_Adm" value="João Pedro" <?php echo ($Nome_Adm == 'João Pedro') ? 'checked' : ''; ?> required>
                <label for="João Pedro">João Pedro</label>
                <input type="radio" name="Nome_Adm" value="Thiago Gabriel" <?php echo ($Nome_Adm == 'Thiago Gabriel') ? 'checked' : ''; ?> required>
                <label for="Thiago Gabriel">Thiago Gabriel</label>
                <br></br>
                <div class="Input_Box">
                    <p>Modelo Automóvel</p>
                    <input type="text" name="Modelo_Carro" value="<?php echo $Modelo_Carro;?>">
                </div>
                <br></br>
                <input type="hidden" name="Id_Servico" value="<?php echo $Id_Servico ?>">
                <a href="Tela_Cliente.php"><input type="submit" name="Update" id="Update"></a>
            </fieldset>
        </form>
    </div>
</body>
</html>