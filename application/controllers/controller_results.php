<?php

class Controller_Results extends Controller
{
	
	function action_index()
	{
		$this->view->generate('results_view.php', 'template_view.php');
	}
}
