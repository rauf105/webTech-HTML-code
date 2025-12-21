<?php
// Handle Set Cookie
if (isset($_POST['set'])) {
    $color = $_POST['color'];
    $expireDate = strtotime($_POST['expire']); // convert to timestamp

    setcookie("bgcolor", $color, $expireDate);
    header("Location: CookiePractice.php");
    exit();
}

// Handle Destroy Cookie
if (isset($_POST['destroy'])) {
    setcookie("bgcolor", "", time() - 3600); // expire cookie
    header("Location: CookiePractice.php");
    exit();
}

// Read cookie value
$bgColor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "#ffffff";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>

<body style="background-color: <?php echo $bgColor; ?>">

<h2>Set Cookie</h2>
<hr>

<form method="post">
    Select a color:
    <input type="color" name="color" required>
    <br><br>

    Expire on:
    <input type="datetime-local" name="expire" required>
    <br><br>

    <input type="submit" name="set" value="Set Cookie">
</form>

<br><br>

<h2>Destroy Cookie</h2>
<hr>

<form method="post">
    <input type="submit" name="destroy" value="Destroy Cookie">
</form>

</body>
</html>
