<?php
require_once 'includes/data.php';
$current = 'pets';
$hide_home = true;
$id = $_GET['id'] ?? 'maple';
if (!isset($pets[$id])) { $id = 'maple'; }
$pet = $pets[$id];
$p = $profiles[$id] ?? [];
$name = $pet['name'];
$gallery = $p['gallery'] ?? $pet['img'];
$caption = $p['caption'] ?? $name . ', waiting to meet you.';
$intro = $p['intro'] ?? $name . ' is ready for a new chapter. Get in touch and our team will help you plan a first hello.';
$tags = $p['tags'] ?? ['Gentle'];
$about = $p['about'] ?? 'Ask our team how ' . $name . ' is settling in and what kind of home would suit them best.';
$afternoon = $p['afternoon'] ?? 'A favorite walk, a cozy nap, and time with my person.';
$home = $p['home'] ?? 'A caring home with patience, routine, and space to settle in.';
$quote = $p['quote'] ?? $name . ' has a lovely way of making an ordinary day feel a little softer.';
$related_ids = array_slice(array_values(array_diff(['olive', 'finn', 'archie', 'milo'], [$id])), 0, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hearth – Meet <?= e($name) ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">

<?php include 'includes/header.php'; ?>

<section class="profile">
  <a class="crumb" href="pets.php"><img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/040d37ff-cda3-4569-aa61-36cbd0d181db.svg">Find a pet / <?= e($pet['species']) ?> / <?= e($name) ?></a>

  <div class="intro">
    <div class="gallery">
      <img alt="<?= e($name) ?>" src="<?= e($gallery) ?>">
      <div class="cap"><span><?= e($caption) ?></span><img class="icon" width="22" height="22" alt="Save" src="https://www.figma.com/api/mcp/asset/3069fdb5-62b4-4e44-8893-77bb61b1bf55.svg"></div>
    </div>
    <div class="adopt">
      <div class="row"><span class="pill">Available for adoption</span><span class="pill cream">Foster welcome</span></div>
      <div class="id">
        <span class="eyebrow"><?= e($pet['trait']) ?></span>
        <h1>Hello, I’m <?= e($name) ?>.</h1>
        <p class="muted" style="font-size:16px"><?= e($pet['facts']) ?></p>
      </div>
      <p class="muted" style="font-size:17px"><?= e($intro) ?></p>
      <div class="row" style="gap:8px"><?php foreach ($tags as $tag): ?><span class="pill"><?= e($tag) ?></span><?php endforeach; ?></div>
      <div class="acts">
        <a class="btn primary block" href="#">Apply to adopt <?= e($name) ?> <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/5c7920cd-8f5d-4b4a-b5b2-267896c94447.svg"></a>
        <a class="btn block" href="#">Offer <?= e($name) ?> a foster home</a>
        <p>Applying starts a conversation, not a commitment. Our team reviews every application before planning a meet-and-greet.</p>
      </div>
      <div class="loc"><img class="icon" width="17" height="17" alt="" src="https://www.figma.com/api/mcp/asset/57d6a90f-9c3a-4e48-803d-095a8928afa0.svg">Hearth Portland · Visits by appointment</div>
    </div>
  </div>

  <div class="story2">
    <div class="l">
      <div>
        <h2>A little more about me</h2>
        <p><?= e($about) ?></p>
      </div>
      <div class="prefs">
        <div><img class="icon" width="25" height="25" alt="" src="https://www.figma.com/api/mcp/asset/e1401ed9-fc01-4d32-b185-c29399cfb103.svg"><b>My perfect afternoon</b><p><?= e($afternoon) ?></p></div>
        <div><img class="icon" width="25" height="25" alt="" src="https://www.figma.com/api/mcp/asset/4d974488-be28-48c1-9bcc-2ee541028adf.svg"><b>A home that suits me</b><p><?= e($home) ?></p></div>
      </div>
      <div class="quote">
        <span class="eyebrow">A note from Jamie</span>
        <q>“<?= e($quote) ?>”</q>
        <span>Jamie Chen · Hearth shelter coordinator</span>
      </div>
    </div>
    <aside class="next">
      <h2>Your first hello, made simple.</h2>
      <div class="ns"><b>1</b><div><strong>Tell us about yourself</strong><p>Choose adoption or fostering and send your application.</p></div></div>
      <div class="ns"><b>2</b><div><strong>We’ll review it with care</strong><p>Our team checks the fit and helps with your questions.</p></div></div>
      <div class="ns"><b>3</b><div><strong>Make time to meet</strong><p>Book a visit to get to know <?= e($name) ?> in person.</p></div></div>
      <a class="btn block" href="#">Questions? Contact our team</a>
    </aside>
  </div>
</section>

<section class="related">
  <div class="sec-head"><h2>More hearts to get to know</h2><a class="btn sm" href="pets.php">Browse all pets</a></div>
  <div class="grid3">
    <?php foreach ($related_ids as $rid): $id = $rid; $pet = $pets[$rid]; include 'includes/pet-card.php'; endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

</div>
</body>
</html>
