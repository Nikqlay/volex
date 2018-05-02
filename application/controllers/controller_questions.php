<?php

class Controller_Questions extends Controller
{

	function __construct()
	{
		$this->model = new Model_Question();
		$this->view = new View();
	}
	
	function action_index()
	{


	    session_start();

	    $data = [];
		$data['userId'] = $_SESSION['userId'];

        $questionModel = new Model_Question();
        $radio = $questionModel->get_data('radio', 2);
        $checkbox = $questionModel->get_data('checkbox', 2);
        $exact = $questionModel->get_data('exact', 2);


        $data['radio'] = $radio;
        $data['checkbox'] = $checkbox;
        $data['exact'] = $exact;


        $radioIds = array_column($radio, 'id');
        $checkboxIds = array_column($checkbox, 'id');
        $exactIds = array_column($exact, 'id');
        $questionIds = array_merge($radioIds, $checkboxIds, $exactIds);

        $answerModel = new Model_Answer();

        $answers = $answerModel->get_data($questionIds);

        $qwesAnsMap = [];
        foreach ($answers as $answer) {

            $qId=$answer['question_id'];
            if (!isset ($qwesAnsMap[$qId])) {
                $qwesAnsMap[$qId] = [];
            }

            $qwesAnsMap[$qId][] = $answer;
        }

        $data['qwesAnsMap'] = $qwesAnsMap;


		$this->view->generate('questions_view.php', 'template_view.php', $data);
	}

    public function action_submit () {

//        Array
//        (
//            [question_4] => answer_10
//            [question_1] => answer_3
//            [variantL] =>
//       )


        $_POST = array_filter($_POST);


        $inputQweAnsMap = [];
        foreach ($_POST as $key => $value) {
            $key = explode('_', $key);
            $qId=$key[1];
            $value = explode('_', $value);
            $vId=$value[1];
            if (!isset($inputQweAnsMap [$qId])) {
                $inputQweAnsMap [$qId] = [];
            }

            $inputQweAnsMap [$qId][]=$vId;

        }


//         Array
//        (
//            [4] => [10]
//            [1] => [1]
//            [] =>
//        )




        $inputQuestionsIds = array_keys($inputQweAnsMap);


        $answerModel = new Model_Answer();
        $rightAns = $answerModel->get_right_answers($inputQuestionsIds);

        $rightQwesAnsMap = [];
        foreach ($rightAns as $answer) {

            $qId=$answer['question_id'];
            if (!isset ($rightQwesAnsMap [$qId])) {
                $rightQwesAnsMap [$qId] = [];
            }

            $rightQwesAnsMap [$qId][] = $answer['id'];

        }

        $userRightQwe =[];

        foreach ($inputQweAnsMap as $qUid=>$userResult) {
            $rightAnswer = $rightQwesAnsMap [$qUid];
            if ($userResult == $rightAnswer) {

                $userRightQwe[]= $qUid;


            }


        }





        echo '<pre>';
        print_r($inputQweAnsMap);
        echo '</pre>';

        echo '<pre>';
        print_r($rightQwesAnsMap);
        echo '</pre>';

        echo '<pre>';
        print_r($userRightQwe);
        echo '</pre>';



    }

}
