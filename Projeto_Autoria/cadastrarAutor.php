<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Auotor</title>
</head>
<body>
    <!--Formatação do formúlario-->
    <form name = "livro" method = "POST" action = "">
        <fieldset id="a">
            <legend><b> Dados do Livro: </b></legend>
                <p> Código Autor: <input name="txtcoda" type="text" size="40" maxlength="40" placeholder="Código Autor">
                <p> Autor: <input name="txtAutor" type="text" size="40" maxlength="40" placeholder="Autor">
                <p> Sobrenome: <input name= "txtsobrenome" type="text" size="40" placeholder="Sobrenome">
                <p> Email: <input name="txtemail" type="text" size="40" maxlength="40" placeholder="email">
                <p> Nascimento: <input name="txtnasc" type="text" size="40" maxlength="40" placeholder="nascimento">
             
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b> Opções: </b></legend>
                <br>
                <input  name="btnenviar" type="submit" value="Cadastrar"> &nbsp;&nbsp;
                <input name="limpar" type="reset" value="Limpar">
        <!--códgio php-->
            <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once 'Autor.php';
                    $pro = new Autor; 
                    $pro->setCod_Autor($txtcoda);
                    $pro->setNomeAutor($txtAutor);
                    $pro->setSobrenome($txtsobrenome);
                    $pro->setEmail($txtemail);
                    $pro->setNascimento($txtnasc);

                    echo "<h3><br><br>" . $pro->salvar() . "</h3>";
                }
            
            ?>
            <br>
            <center>
                <button><a href = "menu_autoria.html">Voltar </a></button>
            </center>
            </form>
        </body>
</html>
