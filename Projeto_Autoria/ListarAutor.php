<?php
        include_once 'Autor.php';
        $p = new Autor();
        $pro_db=$p->listar();
?>
        <b>  Código &nbsp;&nbsp;&nbsp;&nbsp; Autor &nbsp;&nbsp;&nbsp;&nbsp;  Sobrenome Autor &nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp; Nascimento 
        <?php
            foreach($pro_db as $pro_mostrar)
            {
                ?>
                <br><br>
                <b><?php echo $pro_mostrar[0];?></b>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[1];?> &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[2];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[3];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[4];?>  
                 
                <?php

        
        }
         echo "<br><br><button><a href= 'menu_autoria.html'> Voltar </a></button>";
        ?>

     
    