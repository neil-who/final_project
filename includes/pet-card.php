<?php /* Expects $id and $pet */ ?>
<a class="pet" href="pet-profile.php?id=<?= urlencode($id) ?>">
    <div class="photo">
        <img class="cover" alt="<?= e($pet['name']) ?>" src="<?= e($pet['img']) ?>">
        <span class="save"><img width="17" height="17" alt="Save" src="<?= e($icons['heart']) ?>"></span>
    </div>
    <div class="body">
        <div class="top"><h3><?= e($pet['name']) ?></h3><span class="pill">Available</span></div>
        <p class="facts"><?= e($pet['facts']) ?></p>
        <p class="trait"><?= e($pet['trait']) ?></p>
    </div>
</a>
