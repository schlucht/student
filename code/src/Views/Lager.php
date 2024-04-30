
<?php
    include 'Layouts/Header.php'; 
?>
<h1><?= $data['title'] ?></h1>
<ul>
    <?php foreach ($data['lager'] as $lager):?> 
        <li><strong><?=$lager['LGR_id']?>: </strong><?=$lager['LGR_bezeichnung']?></li>
    <?php endforeach ?>
</ul>
<?php
    include 'Layouts/Footer.php'; 
?>