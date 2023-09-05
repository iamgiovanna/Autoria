<?php
        include_once 'Livro.php';
        $p = new Livro();
        $pro_db=$p->listar();
?>
        <b>  Código Livro &nbsp;&nbsp;&nbsp;&nbsp; Titulo &nbsp;&nbsp;&nbsp;&nbsp;  Categoria &nbsp;&nbsp;&nbsp;&nbsp; ISBN &nbsp;&nbsp;&nbsp;&nbsp; Idioma &nbsp;&nbsp;&nbsp;&nbsp;  QtdePag;
        <?php
            foreach($pro_db as $pro_mostrar)
            {
                ?>
                <br><br>
                <b><?php echo $pro_mostrar[0];?></b>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[1];?> &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[2];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[3];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[4];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[5];?>
                <?php

        
        }
         echo "<br><br><button><a href= 'menu_autoria.html'> Voltar </a></button>";
        ?>

     
    