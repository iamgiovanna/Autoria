<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
</head>
<body>
    <script>    
    //bloqueio de letras no campo senha
        function blockletras(keypress)
        {
            if(keypress>=48 && keypress<=57)
            {
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_bookshelves_re_lxoy.svg" alt="">
        </div>
        <div class="form">
            <form action="#" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                   
                </div>
                <!--final da parte inicial das divs--->

                <div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Usuário</label>
                            <input id="firstname" type="text" name="firstname" placeholder="Usuário" required>
                        </div>
                    </div>
                </div>
                <!--Primeira label que pede o nome de usuário--->
                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" placeholder="Senha" maxlength = "3" required onkeypress="return blockletras(window.event.keyCode)" >
                </div>
                <!--Segunda label que pede a senha--->
                </div>
                <div class="login-button">
                   <button>  <input name="btnconsultar" type="submit" value="Entrar"></button>   
                    </div>
            </form>
        </div>
    </div>
    <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnconsultar))
        {
            include_once'usuario.php';
            $u = new Usuario();
            $u->setUsu($firstname);
            $u->setSenha($password);
            $pro_bd=$u->logar();

            $existe = false;
           
            foreach($pro_bd as $pro_mostrar)
            {
                $existe = true;
                ?> 
              <br><b><?php echo "Bem vindo! Usuário: " .$pro_mostrar[0];?></b><br><br>  
              
             <center class="login-button">
                <input type="button" name="btnentrar"> <a href="menu_autoria.html"></a>
             </center>
            <?php
            }
    
            if($existe==false)
                {
                    header("location:loginInvalido.html");
                }
        }
    ?>
</body>
</html>