<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Autor</title>
</head>
<body>
<form name="autor" method = "POST" action = "">
    <fieldset id="a">
        <legend><b> Informe os dados do Autor <b>
            <p> Código Autor: <input name ="txtid" type="text" size="20" maxlength="5" placeholder="Id do autor">
            
            <input name="btenviar" type="submit" value="Excluir"> &nbsp;&nbsp;
            <input name="limpar" type="reset" value="Limpar">

</fieldset>
<fieldset id="b">
<legend><b> Resultado: </b></legend>

<?php
    extract($_POST, EXTR_OVERWRITE);
    if(isset($btenviar))
    {
        include_once 'Autor.php';
        $p = new Autor();
        $p->setCod_Autor($txtid);
       
        echo "<h3>" . $p->exclusao() . "</h3>";

    }

?>
</fieldset>

<button><a href = "menu_autoria.html"> Voltar</a></button>

</form>
</body>
</html>