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
}
