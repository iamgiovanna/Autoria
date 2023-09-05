<?php
        include_once 'Autoria.php';
        $p = new Autoria();
        $pro_db=$p->listar();
?>
        <b>  Código Autoria &nbsp;&nbsp;&nbsp;&nbsp; Código Autor &nbsp;&nbsp;&nbsp;&nbsp; Código Livro &nbsp;&nbsp;&nbsp;&nbsp;  Data Lançamento &nbsp;&nbsp;&nbsp;&nbsp; Editora &nbsp;&nbsp;&nbsp;&nbsp;
        <?php
            foreach($pro_db as $pro_mostrar)
            {
                ?>
                <br><br>
                <b><?php echo $pro_mostrar[0];?></b>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[1];?> &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[2];?>  &nbsp;&nbsp;&nbsp;&nbsp; 
                    <?php echo $pro_mostrar[3];?>   
                    <?php echo $pro_mostrar[4];?>
                <?php
        }
         echo "<br><br><button><a href= 'menu_autoria.html'> Voltar </a></button>";
        ?>

     