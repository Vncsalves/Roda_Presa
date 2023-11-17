<?php 
include('Config.php');
include('Protecao.php');
if(!isset($_SESSION)){
    session_start();
}
$Nome_Cliente = $_SESSION['Nome_Cliente'];
$Id_Cliente = $_SESSION['Id_Cliente'];
 $sql = "SELECT * FROM Servicos WHERE Id_Cliente = '$Id_Cliente' AND Nome_Cliente = '$Nome_Cliente' ORDER BY Data_Servico ASC";
 $Result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Tela_Cliente.css">
    <link rel="shortcut icon" href="Assets/Icon.png" type="image/x-icon">
    <title>Roda Presa</title>
</head>
<body>
    <header>
        <div id="Title">
      <h1><a href="Sair.php">Roda </a>Presa</h1>
      <h1>Olá, <?php echo $_SESSION['Nome_Cliente'];?></h1>
    </div>
    </header>
    <div id="Centralizar_Table">
        <div id="Tabela">
            <Table>
                <thead>
                    <tr>
                    <th class="Titulo_Table">#</td>
                    <th class="Titulo_Table">Data</td>
                    <th class="Titulo_Table">Horario</th>
                    <th class="Titulo_Table">Serviços</th>
                    <th class="Titulo_Table">Relatório Geral</th>
                    <th class="Titulo_Table">Funcionario </th>
                    <th class="Titulo_Table">Preço_Final</th>
                    <th class="Titulo_Table">Ação</th>
                    <tr>
                </thead>   
                <tbody>
                    <?php
                    while($User_Data = mysqli_fetch_assoc($Result)){
                        echo"<tr>";
                        echo"<td>".$User_Data['Id_Servico']."</td>";
                        echo"<td>".$User_Data['Data_Servico']."</td>";
                        echo"<td>".$User_Data['Horario_Servico']."</td>";
                        echo"<td>".$User_Data['Tipo_Servico']."</td>";
                        echo"<td>".$User_Data['Relatorio_Servico']."</td>";
                        echo"<td>".$User_Data['Nome_Adm']."</td>";
                        echo"<td>".$User_Data['Preco_Final']."</td>";
                        echo"<td>
                        <a href='Editar.php?id=$User_Data[Id_Servico]'>
                        <img class='Img_Editar' src='Assets/Editar.svg' alt=''>
                        </a>
                        </td>";
                    }
                    ?>
                </tbody>
            </Table>
    </div>
    </div>
    <div id="Buttons">
      <a href="Agendar_Cliente.php"><div id="Buttom_Agendar"><button>Agendar</button></div></a>
        <div id="Buttom_Remarcar"><button>Remarcar</button></div>
        <div id="Buttom_Desmarcar"><button>Desmarcar</button></div>
    </div>

   
</body>
</html>