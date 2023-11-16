 <?php
 include('Config.php');

 if(isset($_POST['Email_Cliente']) || isset($_POST['Senha_Cliente'])){
    if(strlen($_POST['Email_Cliente'])==0){
        echo "Preenchar seu E-mail";
    }else if (strlen($_POST['Senha_Cliente'])== 0){
        echo "Preencha sua senha";
    }else{
        $Email_Cliente = $conexao->real_escape_string($_POST['Email_Cliente']);
        $Senha_Cliente = $conexao->real_escape_string($_POST['Senha_Cliente']);

        $sql_code = "SELECT * FROM Clientes WHERE Email = '$Email_Cliente' AND Senha_Cliente ='$Senha_Cliente'";
        $sql_query = $conexao->query($sql_code) or die("Falha ao executar:". $mysqli->error);

        $Quantidade = $sql_query->num_rows;

        if($Quantidade ==1){
                $Usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['Id_Cliente'] = $Id_Cliente['Id_Cliente'];
                $_SESSION['Nome_Cliente'] = $Usuario['Nome_Cliente'];

                header("Location: Tela_Cliente.php");
        }else{
            echo "Erro ao Entrar, Email ou Senha incorretos";
        }
    }
 }
 if(isset($_POST['CPF_Adm']) || isset($_POST['Senha_Adm'])){
    if(strlen($_POST['CPF_Adm'])==0){
        echo "Preenchar seu CPF";
    }else if (strlen($_POST['Senha_Adm'])== 0){
        echo "Preencha sua senha";
    }else{
        $CPF_Adm = $conexao->real_escape_string($_POST['CPF_Adm']);
        $Senha_Adm = $conexao->real_escape_string($_POST['Senha_Adm']);

        $sql_code = "SELECT * FROM Adm WHERE CPF = '$CPF_Adm' AND Senha_Adm ='$Senha_Adm'";
        $sql_query = $conexao->query($sql_code) or die("Falha ao executar:". $mysqli->error);

        $Quantidade = $sql_query->num_rows;

        if($Quantidade ==1){
                $Usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['Id_Adm'] = $Id_Adm['Id_Adm'];
                $_SESSION['Nome_Adm'] = $Usuario['Nome_Adm'];

                header("Location: Tela_Adm.php");
        }else{
            echo "Erro ao Entrar, CPF ou Senha incorretos";
        }
    }
 }
  ?>
<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roda Presa</title>
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="shortcut icon" href="Assets/Icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <Div class="Nav_Bar">
            <div class="Texto_Roda">
            <h1><a>Roda</a> Presa</h1>
        </div>
        <div class="Texto_Home">
            <h1>Home</h1>
        </div>
        <div class="Buttom_Nav">
         <button>Entrar</button>
        </div>
        </Div>
    </header>
    <div id="Posição_Banner">
        <div id="Banner">
            <div class="IMG">
            <img src="Assets/Logo.png" alt="">
            </div>
            <div class="Sobre">
            <h2>Roda Presa é uma oficina especializada em alinhamento automotivo, e este é nosso mais novo empreendimento: um sistema de agendamento. Gasta-se apenas cadastrar-se e agendar seu horário.</h2>
            </div>
        </div>
    </div>
    <Div id="Formularios">
        <div class="Form_Cliente">
            <form class="Forms" action="" method="POST">
                <h1 class="Titulo_Form"> Login cliente</h1>
                <p class="Escrita_Form" >Email:</p>
                <input class="Input_Email" type="email" name='Email_Cliente'>
                <p class="Escrita_Form">Senha:</p>
                <input class="Input_Senha" type="search" name='Senha_Cliente'>
                <div class="Bt_Form">
                <input id="Bt_Cliente" type="submit" name="submit">
            </div>
            <div id="Esqueci_Senha_Cliente">
                <p>Esqueci minha senha</p>
            </div>
            <div id="Cadastrar_Cliente">
              <a href="Cadastro.php"><p>Cadastrar-se</p></a>
            </div>
            </form>
           
        </div>
        <div class="Form_Adm">
            <form class="Forms" action="" method="POST">
                <h1 class="Titulo_Form"> Login Administrativo</h1>
                <p class="Escrita_Form">CPF:</p>
                <input class="Input_CPF" type="text" name='CPF_Adm'>
                <p class="Escrita_Form">Senha:</p>
                <input class="Input_Senha" type="search" name='Senha_Adm'>
            <div class="Bt_Form">
            <input id="Bt_Adm" type="submit" name="submit">
            </div>
            <div id="Esqueci_Senha">
                <p>Esqueci minha senha</p>
            </div>
            </form>
        </div>
    </Div>


    
</body>
</html>