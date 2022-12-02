<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel='stylesheet' href='src/css/style.css'>
</head>
<body>
    <header class='header'>
        <h1 class='header__h1'>Каталог</h1>
    </header>

    <div class='main-content'>
        <?=$category?>
        <?=$content?>
    </div>
    <footer class='footer'>
        <p class='footer_copy'>&copy; Все права защищены</p>
    </footer>
</body>
</html>