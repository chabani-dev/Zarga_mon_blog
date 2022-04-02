 <?php

$titre=$recette['nom'];
$ingredients=$recette['ingredients'];
$description=$recette['description'];
$author=$recette['author'];
$temps_preparation=$recette['preparation'];
$temps_cuisson=$recette['cuisson'];
$image_url=$recette['image'];
$type_plat=$recette['type'];
?>
 
 
 <div class="card col-3" >
    <img src="<?=$image_url?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?=$titre?></h5>
        <p class="card-text"><?=$description?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?=$author?></a></li>
        <li class="list-group-item"><?=$temps_preparation?></li>
        <li class="list-group-item"><?$temps_cuisson?></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">en savoir plus</a>
</div>