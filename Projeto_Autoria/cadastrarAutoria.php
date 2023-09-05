<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Autoria</title>
</head>
<body>
    <!--Formatação do formúlario-->
    <form name = "livro" method = "POST" action = "">
        <fieldset id="a">
            <legend><b> Dados Autoria: </b></legend>
                <p> Código Autoria: <input name="txtautoria" type="text" size="40" maxlength="40" placeholder="Código Livro">
                <p> Código Autor: <input name="txtcoda" type="text" size="40" maxlength="40" placeholder="Código Livro">
                <p> Código livro: <input name="txtcol" type="text" size="40" maxlength="40" placeholder="Título Livro">
                <p> Data Lançamento: <input name= "txtdtl" type="text" size="40" placeholder="Categoria">
                <p> Editora <input name="txtedit" type="text" size="40" maxlength="40" placeholder="ISBN">

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
                    include_once 'Autoria.php';
                    $pro = new Autoria; 
                    $pro->setcod_autoria($txtautoria);
                    $pro->setCod_Autor($txtcoda);
                    $pro->setCod_livro($txtcol);
                    $pro->setDataLancamento($txtdtl);
                    $pro->setEditora($txtedit);
                

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
