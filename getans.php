<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){ 

$connection= mysql_connect("localhost", "root", "") or die ("couldn't connect to the server");
mysql_select_db("videos") or die ("couldn't connect to the database");
    /* tutorial_search is the name of database we've created */ 

    $myval = $_POST['myval'];
    $myval1 = htmlspecialchars($myval);

     $raw_results = mysql_query("SELECT * FROM answers_main
            WHERE (`url` LIKE '%".$myval1."%') " ) or die(mysql_error());



              while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

    $questionNo = $results['question'];
    $answerNo = $results['answer'];
    $url = $myval;
    $separator = '|';
    echo $url.$separator.$questionNo.$separator.$answerNo;

     }

}

?>