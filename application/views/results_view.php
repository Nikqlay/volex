<h1>Результаты</h1>
<div>

<?php
    $con = mysqli_connect ("localhost", "root", "", "volex");
    mysqli_set_charset($con, "utf8");
    if (mysqli_connect_errno()) {
    echo "Failed to connection to MySQL: " .mysqli_connect_errno();
    }
{
    $query = "SELECT * FROM `users`";
    $result = $con->query($query);
//выводим данные

    //while($row = $result->fetch_array())
    foreach($result as $row)
    {
        echo '<table border="1">';
        echo '<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td></tr>' ;
    }


    /*$query = "SELECT * FROM `users`";
    $result = mysqli_query($con, $query);
    $count = mysqli_fetch_array($result);
    foreach($count as $value)
    {
        echo '<tr><td>'.$count['id'].'</td><td>'.$count['family'].'</td><td>'.$count['name'].'</td></tr>'.$count['data'].'</td></tr>'.$count['result'].'</td></tr>';
    }
*/
    }




?>
    <br/>
<br/>
<br/>
<br/>
</div>
