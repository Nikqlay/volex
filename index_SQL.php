<?php
$con = mysqli_connect ("localhost", "root", "", "testsite");
mysqli_set_charset($con, "utf8");

if (mysqli_connect_errno()) {
    echo "Failed to connection to MySQL: " .mysqli_connect_errno();
}
//$query = "INSERT INTO news (`short_content`,`content`) VALUES ('PHP3','Это 5 значение вставленое через PHP'), ('PHP25','значение7')";
//$info = mysqli_query($con, $query);
//var_dump($info);

//$query = "UPDATE news SET h1='Измененный заголовок' WHERE id=2";
//$info = mysqli_query($con, $query);
//var_dump($info);
//echo mysqli_affected_rows($con);
$query = "SELECT * FROM news;";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);

//$row1 = mysqli_fetch_array($result);
//$row2 = mysqli_fetch_array($result);
//echo '<pre>';
//print_r($row1);
//print_r($row2);
if ($count) {
    while ($row = mysqli_fetch_array($result)) {
        echo '<h1>';
        echo $row ['h1'];
        echo '</h1>';
    }

}
$query = "SELECT COUNT * FROM news;";
?>
