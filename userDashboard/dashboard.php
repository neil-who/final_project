<?php
session_start();

if (!isset($_SESSION["user_email"])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit;
}

$email = $_SESSION["user_email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="wrap" style="max-width:960px; margin-top:24px; padding:48px;">
        <div style="display:flex; align-items:center; justify-content:space-between; gap:20px;">
            <div>
                <span class="eyebrow">Hearth member</span>
                <h1 style="margin-top:12px;">Welcome to your dashboard</h1>
            </div>
            <form method="POST" style="width:auto; justify-content:flex-end;">
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="btn sm">Log out</button>
            </form>
        </div>

        <div style="margin-top:32px; padding:24px; border:1px solid var(--line); border-radius:12px; background:var(--card);">
            <h2>Your account</h2>
            <p class="muted" style="margin-top:8px;">
                Signed in as <strong><?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?></strong>
            </p>
        </div>

        <div style="margin-top:24px; display:flex; gap:12px;">
            <a class="btn primary" href="../pets.php">Find a pet</a>
            <a class="btn" href="../index.php">Return to home</a>
        </div>
    </div>
</body>
</html>
