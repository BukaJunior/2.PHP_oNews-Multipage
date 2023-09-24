<?php
    $linkNav = [
        'Plan du site' => './plan_de_site.php',
        'Mentions légales' => './mentions_legales.php',
        'Contact' => './contact.php'
    ]
?>

<nav>
    <ul class="left__nav">
    <?php foreach ($linkNav as $linkNavName => $linkNavValue): ?>
        <li class="left__nav-item"><a href="<?= $linkNavValue ?>" class="left__nav-link"><?= $linkNavName ?></a></li>
    <?php endforeach; ?>
    </ul>
</nav>