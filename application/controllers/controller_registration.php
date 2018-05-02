<?php


class Controller_Registration extends Controller
{
    public function action_save()
    {

        if (!isset ($_POST['family'])) {

        }




















//    if(isset($_POST['family']) && $_POST['name']) {
//        $family = $_POST['family'];
//        $name = $_POST['name'];
//        $user = $family ." ". $name;
//        $sex = $_POST['sex'];
//        switch ($sex) {
//            case 'Men':
//                break;
//            case 'Women':
//                break;
//        }
//        {
//            $query = "INSERT INTO users (`family`,`name`,`sex`) VALUES ('$family', '$name', '$sex')";
//            $info = mysqli_query($con, $query);
//            $newid = mysqli_insert_id($con);
//            print_r ($newid);
//            //session_start();
//            //$_SESSION ['$newid'];
//        }
//        {
//            exit("<meta http-equiv='refresh' content='0; url= /questions.php'>");
//        }
//    }
//
//    else
//    {
//        echo '<br> <h2>Заполните все поля</h2>';
//        die();
//    }



        $this->view->generate('questions_view.php', 'template_view.php');
    }
}