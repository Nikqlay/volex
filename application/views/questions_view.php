<h3>Пользователь № <?php echo $data ['userId']?> </h3>
<h1>Вопросы</h1>
<p>
<table>
Выберете один правильный вариант ответа
<tr><td>№</td><td>Вопрос:</td><td>Варианты ответов:</td></tr>




<?php
	foreach($data['radio'] as $question)
	{
		?>
	    <tr>
            <td><?php echo $question['id'] ?></td>
            <td><?php echo $question['text'] ?></td>
            <td>
                <p>
                    <?php foreach ($data ['qwesAnsMap'] [$question['id']] as $answer ) : ?>
                        <input type="radio" name="question_<?php echo $question['id'] ?>" value="answer_<?php echo $answer ['id'] ?>">  <?php echo $answer ['text'] ?> <br><br>
                    <?php endforeach; ?>
                </p>
           </td>
       </tr>
        <?php
	}
	
?>
</table>
</p>


<p>
<table>
    Отметьте все правильные ответы
    <tr><td>№</td><td>Вопрос:</td><td>Варианты ответов:</td></tr>
    <?php

    foreach($data['checkbox'] as $question)
    {
     ?>
        <tr>
            <td><?php echo $question['id']?></td>
            <td><?php echo $question['text']?></td>
                <td>
                    <p>
                        <input type="checkbox" name="question_<?php echo $question ['id'] ?>" value="answer_"> <br>
                        <input type="checkbox" name="question_<?php echo $question ['id'] ?>" value="answer_"> <br>
                        <input type="checkbox" name="question_<?php echo $question ['id'] ?>" value="answer_"> <br>
                        <input type="checkbox" name="question_<?php echo $question ['id'] ?>" value="answer_"> <br>
                    </p>
                </td>
        </tr>
    <?php
    }
    ?>
</table>
</p>

<p>
<table>
    Впишите правильный ответ
    <tr><td>№</td><td>Вопрос:</td><td>Ответ:</td></tr>
    <?php

    foreach($data['exact'] as $question)
    {
        echo '<tr><td>'.$question['id'].'</td><td>'.$question['text'].'</td><td> <p>
                                                                                    <input type="label" name="variantL" placeholder="Ваш ответ"> 
                                                                                 </p>
                                                                       </td></tr>';
    }

    ?>
</table>
</p>