<?php
/**
 * Created by PhpStorm.
 * User: shubh
 * Date: 19-03-2017
 * Time: 07:17
 */
session_start();

include "imports/db_connection.php";
if(isset($_SESSION['inTest']) == false) {
    if ($sqlConn->prepare("SELECT id,name,numques,UNIX_TIMESTAMP(testTime),maxTime FROM event ORDER BY id DESC LIMIT 1")) {
        $sqlConn->execute();
        $sqlConn->store_result();
        /** @noinspection PhpUndefinedVariableInspection */
        $sqlConn->bind_result($testId, $testName, $numQues, $startTime, $maxTime);
        $sqlConn->fetch();
        $sqlConn->close();



        $_SESSION['inTest'] = true;
        $_SESSION['testName'] = $testName;
        $_SESSION['testId'] = $testId;
        $_SESSION['numQues'] = $numQues;
        $_SESSION['startTime'] = $startTime;
        $_SESSION['endTime'] = $startTime + 60 * $maxTime;

    }
}


if (time() >= $_SESSION["startTime"] && time() <=  $_SESSION["endTime"])
{
    //retrive questions
    if(isset($_GET) == false){

    }
}




include "views/view_question.php";

?>