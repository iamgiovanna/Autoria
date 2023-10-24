<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Segundo</title>
</head>
<body>
    <fieldset>
        <legend><b> Alterar</b></legend>

        <?php
            $txtid=$_POST["txtid"];
            include_once 'Livro.php';
            $p = new Livro();
            $p->setCod_livro($txtid);
            $pro_bd=$p->alterar();
        
        ?> 
        <br><form name="cliente2" method = "POST" action = "">
        <?php
            foreach($pro_bd as $pro_mostrar)
            {
        ?>
        <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Código Livro: " . $pro_mostrar[0];?> </b>
        <br><br><b><?php echo "Titulo: " ;?></b>
        <input type="text" name="txtnome" size="25" value='<?php echo $pro_mostrar[1]?>'>
        <br><br> <b> <?php echo "Categoria: ";?></b>
        <input type="text" name="txtsobrenome" size="10" value='<?php echo $pro_mostrar[2]?>'>
        <br><br> <b> <?php echo "ISBN: ";?></b>
        <input type="text" name="txtEmail" size="10" value='<?php echo $pro_mostrar[3]?>'>
        <br><br> <b> <?php echo "Idioma: ";?></b>
        <input type="text" name="txtnasc" size="10" value='<?php echo $pro_mostrar[4]?>'>
        <br><br> <b> <?php echo "Quantidade Páginas ";?></b>
        <input type="text" name="txtquant" size="10" value='<?php echo $pro_mostrar[4]?>'>
        <br><br><br><center>
        <input name="btnalterar" type="submit" value="Alterar">
        <?php
            }
        ?>
        </form>
        </fieldset>
        <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnalterar)){
                include_once 'Livro.php';
                $pro = new Livro();
                $pro->setCod_livro($txtid);
                $pro->setTitulo($txtnome);
                $pro->setCategoria($txtsobrenome);
                $pro->setISBN($txtEmail);
                $pro->setIdioma($txtnasc);
                $pro->setQtdePag($txtquant);

                echo "<br><br><h3>" . $pro->alterar2() ."</h3>";
                header("location:alterarLivro.php");
            }
        ?>
        <center><br><br><br><br>
        <button><a href="menu_autoria.html">Voltar</a></button>
    </body>
</html>