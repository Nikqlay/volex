<?php

class Model_Question extends Model
{
	
	public function get_data($type, $limit)
	{	
		
	    $str = 'SELECT * FROM `questions` WHERE `type` = "' .$type. '" ORDER BY rand() limit '. $limit;
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

}
