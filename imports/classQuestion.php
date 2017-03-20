<?php
/**
 * Created by PhpStorm.
 * User: shubh
 * Date: 20-03-2017
 * Time: 21:21
 */

include "db_connection.php";

    class questions
    {
        var $tableName;
        var $quesId;
        var $isLoaded;
        var $quesStatement;
        var $optionA;
        var $optionB;
        var $optionC;
        var $optionD;
        var $correctAnswer;
        var $userResponse;
        var $quesMarks;
        var $quesNegative;
        var $isCorrect;

        public function __construct($question_table, $question_id, $ques_statement, $opt_A, $opt_B, $opt_B, $opt_C, $opt_C, $opt_D, $answer, $q_marks, $q_neg)
        {
            $this->tableName = $question_table;
            $this->quesId = $question_id;
            $question_id = 0;


            if ($sqlConn->prepare("SELECT * FROM eventques_id1 WHERE quesID = ?")) {
                $sqlConn->bind_params("i",$this->quesId);
                $sqlConn->execute();
                $sqlConn->store_result();
                $sqlConn->bind_result($question_id, $ques_statement, $opt_A, $opt_B, $opt_C, $opt_D, $answer, $q_marks, $q_neg);
                $sqlConn->fetch();
                $sqlConn->close();

                if ($question_id == $this->quesId) {
                    $this->isLoaded = true;
                    $this->quesStatement = $ques_statement;
                    $this->optionA = $opt_A;
                    $this->optionB = $opt_B;
                    $this->optionC = $opt_C;
                    $this->optionD = $opt_D;
                    $this->correctAnswer = $answer;
                    $this->quesMarks = $q_marks;
                    $this->quesNegative = $q_neg;
                }

            }
        }

        function inputRespose($user_response){

            $this->userResponse = $this->userResponse;
            if($this->userResponse == $this->correctAnswer){
                $this->isCorrect = true;
            }
        }

    }

?>