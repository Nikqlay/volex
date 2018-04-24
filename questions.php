<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Тестирование</title>
    <style type="text/css">

    </style>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">

    <?php
    $con = mysqli_connect ("localhost", "root", "", "volex");
    mysqli_set_charset($con, "utf8");
    if (mysqli_connect_errno()) {
        echo "Failed to connection to MySQL: " .mysqli_connect_errno();
    }
    $newid = mysqli_insert_id($con);
    print_r ($newid);
    ?>
    <!--<h1>USER</h1>-->

    <h4>Ответьте на несколько вопросов:</h4>
    <form method="get" action="questions.php">
        <input type="text" name="family" placeholder="Ваша фамилия">
        <input type="text" name="name" placeholder="Ваше имя"><br>
        <h4>Ваш пол</h4>
        <input type="radio" name="sex" value="m"> Мужской
        <input type="radio" name="sex" value="w"> Женский <br>
        <input type="submit" value="Далее">
        <?php
        if(isset($_GET['number1']) && $_GET['number1'])
        {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $operation = $_GET['operation'];

            echo $number1 . $operation . $number2 . '=';

            switch ($operation) {
                case '+':
                    echo $number1 + $number2;
                    break;
                case '-':
                    echo $number1 - $number2;
                    break;
                case '*':
                    echo $number1 * $number2;
                    break;
                case '/':
                    echo $number1 / $number2;
                    break;

            }
        }
        else
        {
            echo '<br> <h2>Заполните все поля</h2>';

        }
        ?>
    </form>
</div> <!-- end #header -->
</body>
</html>






