<?php

class Controller_Tests extends Controller
{

	function action_index()
	{

	    if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $this->view->generate('tests_view.php', 'template_view.php');
            return;
        }


        $errors = [];

        if (empty ($_POST['family'])) {
            $errors['family'] = 'Введите фамилию';
        }



        if (!empty($errors)){
            $this->view->generate('tests_view.php', 'template_view.php', $errors);

            return;
        }


        $family = $_POST ['family'];
        $name = $_POST ['name'];
        $sex = $_POST ['sex'];


        $userModel = new Model_User($family, $name, $sex);
        $userId = $userModel->save();





//        http_redirect('/questions');
        header('Location: /questions');

        session_start();
        $_SESSION['userId'] = $userId;












    }
}
