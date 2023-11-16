<?php
include('Protecao.php');
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm</title>
    <link rel="stylesheet" href="CSS/Tela_Adm.css">
</head>
<body>
    <header>
    <div id="Title">
      <h1><a href="Sair.php">Roda </a>Presa</h1>
      <h1>Olá, <?php echo $_SESSION['Nome_Adm'];?></h1>
    </div>
    </header>
    <h2>Serviços do Dia</h2>
    <div class="Centralizar_tables">
     <div class="tabela">
        <table>
            <tr>
                <td>Horario</td>
                <td>Cliente</td>
                <td>Tipo Serviço</td>
                <td>Modelo Veiculo</td>
            </tr>
            <tr>
                <td>d</td>
                <td>d</td>
                <td>d</td>
                <td>d</td>
            </tr>
        </table>
     </div>
    </div>
    <div class="Buttons">
        <div class="Button_Relatorio"><Button>Relatório</Button></div>
        <div class="Button_Remarcar"><Button>Remarcar</Button></div>
     </div>
     <h2>Serviços do Dia</h2>
     <div class="Centralizar_tables">
      <div class="tabela">
         <table>
             <tr>
                 <td>Horario</td>
                 <td>Cliente</td>
                 <td>Tipo Serviço</td>
                 <td>Modelo Veiculo</td>
             </tr>
             <tr>
                 <td>d</td>
                 <td>d</td>
                 <td>d</td>
                 <td>d</td>
             </tr>
         </table>
      </div>
     </div>
     <div class="Buttons">
         <div class="Button_Relatorio"><Button>Relatório</Button></div>
         <div class="Button_Remarcar"><Button>Remarcar</Button></div>
      </div>
</body>
</html>