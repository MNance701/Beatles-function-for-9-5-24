<?php
function displayElement ($element, $i) {?>
        <div>
            <h3><?= $element['firstname'].' '.
            $element['lastname'].' ('.$element['age'].')'?></h3>
            <img width=300 src="<?= $element['picture']?>" alt="<?= $element['firstname'].'\'s picture'?>">
            <p><?= $element['short_bio']?></p>
            <ul>
                <?php
                    foreach($element['instruments'] as $instrument) 
                    echo '<li>'.$instrument.'</li>';
                ?>
            </ul>
            <a href="detail.php?index=<?=$i?>">Click here to see more details</a>
        </div>
<?php }
?>
<?php 
//Use the function
for($i=0;$i<count($beatles); $i++) {
    displayElement($beatles[$i], $i);
}
?>