<?php
// Set $current ('home' or 'pets') before including. Set $hide_home = true to drop the Home link.
$nav = [
    'home'   => ['Home', 'index.php'],
    'pets'   => ['Find a pet', 'pets.php'],
    'how'    => ['How adoption works', '#'],
    'foster' => ['Become a foster', '#'],
    'story'  => ['Our story', '#'],
];
?>
<header class="nav">
    <a class="brand" href="index.php"><img class="icon" width="25" height="25" alt="" src="<?= e($icons['paw']) ?>">hearth</a>
    <ul>
        <?php foreach ($nav as $key => [$label, $href]): ?>
            <?php if ($key === 'home' && !empty($hide_home)) continue; ?>
            <li class="<?= $current === $key ? 'on' : '' ?>"><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a class="btn sm" href="login.php">My applications</a>
</header>
