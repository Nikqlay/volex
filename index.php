<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Представьтесь</title>
    <style type="text/css">

    </style>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="header">
    <h1>Представьтесь пожалуйста</h1>
    <h4>Введите</h4>
    <form method="get" action="index.php">
        <input type="text" name="family" placeholder="Ваша фамилия">
        <input type="text" name="name" placeholder="Ваше имя"><br>
    <h4>Ваш пол</h4>
        <input type="radio" name="sex" value="Man" checked> Мужской
        <input type="radio" name="sex" value="Women"> Женский <br>
        <input type="submit" value="Далее" onclick= "location.href='questions.php'">
    <?php session_start();
    $con = mysqli_connect ("localhost", "root", "", "volex");
    mysqli_set_charset($con, "utf8");
    if (mysqli_connect_errno()) {
    echo "Failed to connection to MySQL: " .mysqli_connect_errno();
    }
        if(isset($_GET['family']) && $_GET['name']) {
            $family = $_GET['family'];
            $name = $_GET['name'];
            $user = $family ." ". $name;
            $sex = $_GET['sex'];
        switch ($sex) {
            case 'Men':
               break;
            case 'Women':
               break;
        }
            {
            $query = "INSERT INTO users (`family`,`name`,`sex`) VALUES ('$family', '$name', '$sex')";
            $info = mysqli_query($con, $query);
            $newid = mysqli_insert_id($con);
            print_r ($newid);
            //session_start();
            //$_SESSION ['$newid'];
            }
            {
           exit("<meta http-equiv='refresh' content='0; url= /questions.php'>");
            }
        }

         else
        {
            echo '<br> <h2>Заполните все поля</h2>';
            die();
        }
?>
    </form>
</div> <!-- end #header -->
</body>
</html>