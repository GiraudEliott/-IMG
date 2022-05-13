<?php
    $dir ="gallery/"; // image folder name
      if (is_dir($dir)){
         if ($dh = opendir($dir)){
                 while (($file = readdir($dh)) !== false){
                    if($file=="." OR $file==".."){} else { 
              ?>   <!---- its a loop [change the folder name on img path]----->                
                         <img  style="width: 260px;" src="./img/<?php echo $file; ?>"> 
             <?php
              }
             }
         closedir($dh);
         }
      } ?>

<?php    $nombre_images = 9;
            for( $i = 1; $i <= $nombre_images; $i++ )
            {
            echo '<img src="images/cars/car1/'.$i.'.jpg" />';
            }
?>