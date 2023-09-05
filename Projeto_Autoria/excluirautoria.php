<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Autoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form name="autor" method = "POST" action = "">
    <fieldset id="a">
        <legend><b> Informe os dados do Autoria<b>
            <p> Código Autoria: <input name ="txtid" type="text" size="20" maxlength="5">
            
            
            <input name="btenviar" type="submit" value="Excluir"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">

</fieldset>
<fieldset id="b">
<legend><b> Resultado: </b></legend>

<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btenviar))
    {
        include_once 'Autoria.php';
        $p = new Autoria();
        $p->setcod_autoria($txtid);
       
        echo "<h3>" . $p->exclusao() . "</h3>";

    }

?>
</fieldset>
<button><a href = "menu_autoria.html"> Voltar</a></button>
</form>
</body>
</html>