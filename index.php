<?php
require 'tpl/header.php';
?>
    <div class="d-flex flex-wrap">

    <?php
    foreach ($recettes_array as $recette){
              require 'tpl/content.php';
    }
       
    
   
    ?>
       
  </div>
   <?php
   require 'tpl/footer.php';