<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortsut icon" href="images/favicon.png" type="image/png">
        <title>Калькулятор</title>
    </head>

    <body>
    <p>Калькулятор. Сложите два числа</p>

    <form action="" method="post">
        <input type="text" name="first_field" placeholder="Введите первое число" autofocus>
        <p>+</p>
        <input type="text" name="second_field" placeholder="Введите второе число">
        <br>
        <br>
        <input type="submit" name="submit_btn" value="Сложить" />
    </form>

    <?php
        $a = $_POST['first_field'];
        $b = $_POST['second_field'];
        $result = $a + $b;
    echo 'Результат: ' . $result;
    ?>
    </body>

</html>
