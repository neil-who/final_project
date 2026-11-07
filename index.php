<?php
require_once 'includes/data.php';
$current = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hearth – Their next chapter starts with you</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrap">

<?php include 'includes/header.php'; ?>

<section class="hero">
  <div class="msg">
    <span class="eyebrow">Good company. A fresh start.</span>
    <h1>Their next chapter starts with you.</h1>
    <p class="lead">A familiar face at the door. A little more love at home. Meet the pets ready to become part of your everyday.</p>
    <div class="actions">
      <a class="btn primary" href="pets.php">Find your companion <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/378f25f2-fb4f-443b-bacf-eb6e715805e3.svg"></a>
      <a class="btn" href="#foster">Explore fostering</a>
    </div>
    <div class="reassure"><img class="icon" width="18" height="18" alt="" src="https://www.figma.com/api/mcp/asset/07f864d2-dec8-4e02-9566-594efffd940f.svg">Thoughtful matches. Real people. Support along the way.</div>
  </div>
  <div class="portrait">
    <a href="pet-profile.php?id=maple"><img alt="Maple, a beagle mix, sitting in a sunny garden" src="https://www.figma.com/api/mcp/asset/40ccd6ab-6a3a-4741-ba45-2e250d6763ae.png"></a>
    <div class="meet">
      <div>Meet Maple <img class="icon" width="20" height="20" alt="" src="https://www.figma.com/api/mcp/asset/4fe00b77-7de4-450a-a489-6297fc290dbc.svg"></div>
      <p>3 years · Beagle mix · Professional cuddler</p>
    </div>
    <div class="note"><img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/258261e3-edf6-4713-a418-eeaa9f559e23.svg">A brighter everyday</div>
  </div>
</section>

<section class="approach">
  <div><img class="icon" width="22" height="22" alt="" src="https://www.figma.com/api/mcp/asset/38c29281-a933-46c2-9cad-bf481d689b80.svg">Every personality belongs</div>
  <div><img class="icon" width="22" height="22" alt="" src="https://www.figma.com/api/mcp/asset/3d3c235f-e718-42d8-8037-f8ba9bfe8e80.svg">Adopt for a lifetime. Foster for a while.</div>
  <div><img class="icon" width="22" height="22" alt="" src="https://www.figma.com/api/mcp/asset/1ef75639-806e-4440-9f47-d602354ffd0b.svg">A caring team, at every step</div>
</section>

<section class="featured">
  <div class="sec-head">
    <div class="t">
      <span class="eyebrow">A few familiar faces</span>
      <h2>Big personalities. Open hearts.</h2>
      <p class="muted" style="font-size:15px">Some love a long walk. Some prefer your lap. There’s a little someone for you.</p>
    </div>
    <a class="btn" href="pets.php">Meet all available pets <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/4d6b4882-53dc-4ec6-961c-c8e75d89aa5f.svg"></a>
  </div>
  <div class="grid4">
    <?php foreach (array_slice($pets, 0, 4, true) as $id => $pet) { include 'includes/pet-card.php'; } ?>
  </div>
</section>

<section class="journey">
  <div class="sec-head">
    <div class="t"><span class="eyebrow">From hello to home</span><h2>A thoughtful path to a good match.</h2></div>
    <p>No rush, no guesswork. We’ll get to know you and help you get to know them.</p>
  </div>
  <div class="steps">
    <div class="step"><div class="mark">01<img class="icon" width="26" height="26" alt="" src="https://www.figma.com/api/mcp/asset/ec69a1b1-3e04-4a7f-baeb-df0fc6b42d85.svg"></div><h3>Find your connection</h3><p>Browse the pets in our care. Get to know their little quirks and what makes them feel at home.</p></div>
    <div class="step"><div class="mark">02<img class="icon" width="26" height="26" alt="" src="https://www.figma.com/api/mcp/asset/e0f93c07-6b0b-4935-9c5d-d49f1a96ab14.svg"></div><h3>Tell us about you</h3><p>Send an adoption or foster application. Our team reviews each one with care.</p></div>
    <div class="step"><div class="mark">03<img class="icon" width="26" height="26" alt="" src="https://www.figma.com/api/mcp/asset/6330fdab-b8cb-4e9e-b15f-9d535bb14446.svg"></div><h3>Meet. Connect. Begin.</h3><p>Book a shelter visit, spend time together, and plan your next chapter with our team.</p></div>
  </div>
</section>

<section class="split sage" id="foster">
  <img alt="A man playing with a dog in a bright living room" src="https://www.figma.com/api/mcp/asset/d641761b-0e54-439c-b982-5f815acf61e6.png">
  <div class="txt">
    <span class="eyebrow">A little space can mean everything</span>
    <h2>Not forever.<br>Still life-changing.</h2>
    <p class="muted" style="font-size:16px">Fostering gives a pet a soft place to land while they wait for their permanent home. Tell us when you can help, and we’ll find a fit for your life.</p>
    <div class="facts"><span>Your dates, your availability</span><span>A team to guide you</span></div>
    <a class="btn primary" href="#">Learn about fostering <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/271c61c1-fe6d-4a43-a02d-01646a4e7c24.svg"></a>
  </div>
</section>

<section class="philosophy">
  <div class="l"><span class="eyebrow">People, not paperwork</span><h2>Good matches begin with listening.</h2></div>
  <div class="r">
    <div class="principle"><img class="icon" width="24" height="24" alt="" src="https://www.figma.com/api/mcp/asset/3e207f78-fdb3-4df9-8062-15eabd1d8669.svg"><h3>Personality first</h3><p>We see the individual behind the breed, age, and photo.</p></div>
    <div class="principle"><img class="icon" width="24" height="24" alt="" src="https://www.figma.com/api/mcp/asset/3e207f78-fdb3-4df9-8062-15eabd1d8669.svg"><h3>Room for real life</h3><p>A forever home or a temporary one. Both make a difference.</p></div>
    <div class="principle"><img class="icon" width="24" height="24" alt="" src="https://www.figma.com/api/mcp/asset/3e207f78-fdb3-4df9-8062-15eabd1d8669.svg"><h3>A human next step</h3><p>Our shelter team helps turn your questions into a clear plan.</p></div>
  </div>
</section>

<section class="split story">
  <img alt="A woman cuddling a dog on a sofa" src="https://www.figma.com/api/mcp/asset/b9611a48-d65c-4886-a82f-885fdbc82da5.png">
  <div class="txt">
    <span class="eyebrow">The heart of Hearth</span>
    <h2>Every pet deserves<br>to feel at home.</h2>
    <p class="muted" style="font-size:15px">We’re a Portland shelter built around a simple belief: belonging changes lives. We bring thoughtful care and honest conversations to every adoption and foster journey.</p>
    <a class="btn" href="#">Get to know our shelter <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/789be2f4-31e9-48c2-a147-fd742d794fc9.svg"></a>
  </div>
</section>

<section class="faq">
  <div class="l"><span class="eyebrow">A little clarity</span><h2>Wondering where to start?</h2><p class="muted" style="font-size:14px">You don’t need all the answers before your first hello.</p></div>
  <div class="qa">
    <div class="item"><div>How do I apply to adopt?<img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/a33059ac-621a-43a6-8cd7-984e93af125a.svg"></div><p>Choose a pet and send an application. We’ll review it, get in touch, and help you arrange a visit.</p></div>
    <div class="item"><div>Can I foster if I can’t adopt?<img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/a33059ac-621a-43a6-8cd7-984e93af125a.svg"></div><p>Absolutely. Share your planned start and end dates in a foster application so we can plan together.</p></div>
    <div class="item"><div>Can I meet a pet before deciding?<img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/a33059ac-621a-43a6-8cd7-984e93af125a.svg"></div><p>Yes. Visits are by appointment, giving you and the pet time to get to know each other.</p></div>
  </div>
</section>

<section class="final">
  <div><h2>Make room for a little more love.</h2><p style="font-size:16px">Your next chapter might have four paws. Let’s find out.</p></div>
  <a class="btn primary" href="pets.php">Find your companion <img class="icon" width="16" height="16" alt="" src="https://www.figma.com/api/mcp/asset/271c61c1-fe6d-4a43-a02d-01646a4e7c24.svg"></a>
</section>

<?php include 'includes/footer.php'; ?>

</div>
</body>
</html>
