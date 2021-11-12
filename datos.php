<?php 
    foreach($data as $item){
        echo $item->nombre."<br>";
    }
    ?>

    <ul>
            <li >
                <?php if($_GET['pagina']<="1") {?>
                    <button disabled>
                        antes    
                    </button>
                <?php }else{?>                        
                    
                        <a href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">antes</a>    
                    
                <?php
                }
                ?>
                
            </li>
            <?php for($i=1;$i<=$paginas;$i++) {?>
                <li class=<?php if($_GET['pagina']==$i) echo "active"; ?> >
                    <a href="index.php?pagina=<?php echo $i;?>" ><?php echo $i; ?></a>
                </li>   
            <?php }?>

            
            <?php if($_GET['pagina']>=$paginas) {?>
                    <button disabled>
                        despues
                    </button>
                <?php }else{?>                        
                    <li class="<?php echo $_GET['pagina']>=$paginas?'disabled':'' ?>">
                        <a href="index.php?pagina=<?php echo $_GET['pagina']+1 ?> ">despues</a>
                    </li>
                    
                    
                <?php
                }
            ?>
            
    </ul>