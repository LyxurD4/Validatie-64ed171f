<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP a neef</title>
</head>
<body>
    <form action="form.php/$email" method="post" target="_blank">
    Email adres: <input type="text" name="email"><br>
    <input type="submit"><br>
    </form>
    <?php
        $email = htmlspecialchars($_POST["email"]);
        if((filter_var($email, FILTER_VALIDATE_EMAIL))) {
            echo "Ait";
        } else {
            echo "Voer een geldig email adres in";
        }
    ?>
</body>
</html>