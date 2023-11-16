<?php
if(!isset($_SESSION)){
    session_start();
}

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
      <h1><a href="index.php">Roda</a> Presa</h1>
      <h1>Olá, <?php echo $_SESSION['Nome_Cliente'];?></h1>
    </div>
    </header>
    <div id="Centralizar_Table">
        <div id="Tabela">
            <Table>
                <tr>
                    <td class="Titulo_Table">Data</td>
                    <td class="Titulo_Table">Horario</td>
                    <td class="Titulo_Table">Serviços</td>
                    <td class="Titulo_Table">Relatório Geral</td>
                    <td class="Titulo_Table">Funcionario </td>
                    <td class="Titulo_Table">Preço Final</td>
                </tr>
                <tr>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                </tr>
                <tr>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                </tr>
                <tr>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                </tr>
                <tr>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                    <td>d</td>
                </tr>
            </Table>
    </div>
    </div>
    <div id="Buttons">
        <div id="Buttom_Agendar"><button>Agendar</button></div>
        <div id="Buttom_Remarcar"><button>Remarcar</button></div>
        <div id="Buttom_Desmarcar"><button>Desmarcar</button></div>
    </div>

   
</body>
</html>