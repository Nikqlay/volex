<?php

class Model_Answer extends Model
{
	
	public function get_data($questionId)
	{

        $questionId = implode(',', $questionId);


	    $str = 'SELECT * FROM `answers` WHERE `question_id` IN (' .$questionId. ') ORDER BY rand()';
	    $result = $this->connection->query($str);
	    if ($result == false) {

        }


//        echo $this->connection->error;

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function get_right_answers($questionId)
    {

        $questionId = implode(',', $questionId);


        $str = 'SELECT * FROM `answers` WHERE `question_id` IN (' .$questionId. ') AND `state` = 1';
        $result = $this->connection->query($str);
        if ($result == false) {

        }


        echo $this->connection->error;

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }


}
