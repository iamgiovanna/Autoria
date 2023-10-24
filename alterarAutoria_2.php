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
            include_once 'Autoria.php';
            $p = new Autoria();
            $p->setcod_autoria($txtid);
            $pro_bd=$p->alterar();
        
        ?> 
        <br><form name="cliente2" method = "POST" action = "">
        <?php
            foreach($pro_bd as $pro_mostrar)
            {
        ?>
        <input type="hidden" name="txtautoria" size="5" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Código do Autoria: " . $pro_mostrar[0];?> </b>
        <br><br><b><?php echo "Código Autor: " ;?></b>
        <input type="text" name="txtautor" size="25" value='<?php echo $pro_mostrar[1]?>'>
        <br><br> <b> <?php echo "Código Livro: ";?></b>
        <input type="text" name="txtlivro" size="10" value='<?php echo $pro_mostrar[2]?>'>
        <br><br> <b> <?php echo "Data Lançamento: ";?></b>
        <input type="text" name="txtlancamento" size="10" value='<?php echo $pro_mostrar[3]?>'>
        <br><br> <b> <?php echo "Editora: ";?></b>
        <input type="text" name="txteditora" size="10" value='<?php echo $pro_mostrar[4]?>'>
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
                include_once 'Autoria.php';
                $pro = new Autoria();
                $pro->setcod_autoria($txtautoria);
                $pro->setCod_Autor($txtautor);
                $pro->setCod_livro($txtlivro);
                $pro->setDataLancamento($txtlancamento);
                $pro->setEditora($txteditora);
                echo "<br><br><h3>" . $p->alterar2() ."</h3>";
                header("location:alterarAutoria.php");
            }
        ?>
        <center><br><br><br><br>
        <button><a href="menu_autoria.html">Voltar</a></button>
    </body>
</html>