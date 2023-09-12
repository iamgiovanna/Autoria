<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Autoria</title>
</head>
<body>
    <form name="cliente" method = "POST" action = "">
    <fieldset id="a"> 
        <legend><b> Informe a autoria desejada: </b></legend>
        <p> Código Autoria: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto">
        <br><br>
            <input name="btenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar" >
    <fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Resultado: </b></legend>
    <?php
    
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btenviar))
        {
            include_once 'Autoria.php';
            $p = new Autoria();
            $p->setcod_autoria($txtnome. '%'); 
            $pro_bd=$p->consultar();
            foreach($pro_bd as $pro_mostrar)
            {
                ?> <br>
                <b> <?php echo "Código Autoria: " .$pro_mostrar[0];?> </b>
                <b> <?php echo "Código Autor: " . $pro_mostrar[1];?> </b>
                <b> <?php echo "Código Livro: " .$pro_mostrar[2]?> </b>   
                <b> <?php echo "Data Lançamento: " . $pro_mostrar[3];?> </b>
                <b> <?php echo "Editora: " . $pro_mostrar[4];?> 
            <?php
            }
        }

        ?>
   <button><a href = "menu_autoria.html"> Voltar</a></button>
</body>
</html>