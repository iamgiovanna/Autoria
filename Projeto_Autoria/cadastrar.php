<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livro</title>
</head>
<body>
    <!--Formatação do formúlario-->
    <form name = "livro" method = "POST" action = "">
        <fieldset id="a">
            <legend><b> Dados do Livro: </b></legend>
                <p> Código Livro: <input name="txtcod" type="text" size="40" maxlength="40" placeholder="Código Livro">
                <p> Título: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Título Livro">
                <p> Categoria: <input name= "txtcat" type="text" size="40" placeholder="Categoria">
                <p> ISBN: <input name="txtisbn" type="text" size="40" maxlength="40" placeholder="ISBN">
                <p> Idioma: <input name="txtido" type="text" size="40" maxlength="40" placeholder="Idioma">
                <p> Quantidade Páginas: <input name="txtqtde" type="text" size="40" maxlength="40" placeholder="Quantidade Páginas">
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
                    include_once 'Livro.php';
                    $pro = new Livro; 
                    $pro->setCod_livro($txtcod);
                    $pro->setTitulo($txtnome);
                    $pro->setCategoria($txtcat);
                    $pro->setISBN($txtisbn);
                    $pro->setIdioma($txtido);
                    $pro->setQtdePag($txtqtde);

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
