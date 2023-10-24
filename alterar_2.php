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
            include_once 'Autor.php';
            $p = new Autor();
            $p->setCod_Autor($txtid);
            $pro_bd=$p->alterar();
        
        ?> 
        <br><form name="cliente2" method = "POST" action = "">
        <?php
            foreach($pro_bd as $pro_mostrar)
            {
        ?>
        <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
        <b><?php echo "Código do Autor: " . $pro_mostrar[0];?> </b>
        <br><br><b><?php echo "Nome: " ;?></b>
        <input type="text" name="txtnome" size="25" value='<?php echo $pro_mostrar[1]?>'>
        <br><br> <b> <?php echo "Sobrenome: ";?></b>
        <input type="text" name="txtsobrenome" size="10" value='<?php echo $pro_mostrar[2]?>'>
        <br><br> <b> <?php echo "Email: ";?></b>
        <input type="text" name="txtEmail" size="10" value='<?php echo $pro_mostrar[3]?>'>
        <br><br> <b> <?php echo "Data Nascimento: ";?></b>
        <input type="text" name="txtnasc" size="10" value='<?php echo $pro_mostrar[4]?>'>
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
                include_once 'Autor.php';
                $pro = new Autor();
                $pro->setCod_Autor($txtid);
                $pro->setNomeAutor($txtnome);
                $pro->setSobrenome($txtsobrenome);
                $pro->setEmail($txtEmail);
                $pro->setNascimento($txtnasc);
                echo "<br><br><h3>" . $pro->alterar2() ."</h3>";
                header("location:alterar.php");
            }
        ?>
        <center><br><br><br><br>
        <button><a href="menu_autoria.html">Voltar</a></button>
    </body>
</html>