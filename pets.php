<?php
require_once 'includes/data.php';
$current = 'pets';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearth – Find a pet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <?php include 'includes/header.php'; ?>

        <section class="browse-intro">
            <span class="eyebrow">Your kind of company</span>
            <h1>A little hello. A lifelong connection.</h1>
            <p class="muted">Meet the pets ready for their next chapter. Find the personality that fits your everyday.</p>

            <div class="search">
                <img class="icon" width="20" height="20" alt="" src="https://www.figma.com/api/mcp/asset/61eb3ce4-278a-4437-8ae6-f3a35050986c.svg">
                <span>Search by name, breed, or a little of both</span>
                <a class="btn primary sm" href="#">Search pets</a>
            </div>
        </section>

        <div class="workspace">
            <aside class="filters">
                <div class="fh">
                    <b>Filters</b>
                    <span>Reset all</span>
                </div>

                <div class="group">
                    <b>Looking to</b>
                    <label class="on"><i></i>Adopt or foster</label>
                    <label><i></i>Adopt</label>
                    <label><i></i>Foster</label>
                </div>

                <div class="group">
                    <b>Species</b>
                    <label class="on"><i></i>All animals</label>
                    <label><i></i>Dogs</label>
                    <label><i></i>Cats</label>
                    <label><i></i>Small animals</label>
                </div>

                <div class="group">
                    <b>Age</b>
                    <label class="on"><i></i>Any age</label>
                    <label><i></i>Under 1 year</label>
                    <label><i></i>1–5 years</label>
                    <label><i></i>6 years &amp; up</label>
                </div>

                <div class="group">
                    <b>Sex</b>
                    <label class="on"><i></i>Any</label>
                    <label><i></i>Female</label>
                    <label><i></i>Male</label>
                </div>

                <div class="avail">
                    <span class="pill">Available pets only</span>
                    Every pet here is open for applications. A good match takes more than a filter—we’re here to help.
                </div>
            </aside>

            <main class="results">
                <div class="ctl">
                    <?= count($pets) ?> companions ready to meet you
                    <span>
                        Sort: Recently added
                        <img class="icon" width="15" height="15" alt="" src="https://www.figma.com/api/mcp/asset/d8e163b6-cd0f-47ec-bf6a-2b09a2bb7f0a.svg">
                    </span>
                </div>

                <div class="grid3">
                    <?php foreach ($pets as $id => $pet): ?>
                        <?php include 'includes/pet-card.php'; ?>
                    <?php endforeach; ?>

                    <aside class="invite">
                        <img class="icon" width="38" height="38" alt="" src="https://www.figma.com/api/mcp/asset/82fdaca2-a11e-44fb-b3eb-d275d47e938d.svg">
                        <h3>A temporary home. A lasting difference.</h3>
                        <p>Have room for a little while? Fostering could be your perfect next step.</p>
                        <a class="btn block" href="#">Explore fostering</a>
                    </aside>
                </div>

                <div class="foot">
                    <span>You’ve met all <?= count($pets) ?> available pets.</span>
                    <b>Need a hand choosing? ↗</b>
                </div>
            </main>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>
</body>
</html>
