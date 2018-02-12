<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 12/02/2018
 * Time: 21:02
 */

include "../DB/config.php";
switch ($_REQUEST['action']) {

    case "sendMessage":
        session_start();
        //echo "sending repsone back";
        $query = $pdo->prepare("INSERT INTO messages SET user=?, message=?");

        $run = $query->execute([$_SESSION['username'], $_REQUEST{'message'}]);
        echo "ran";
        if ($run) {

            echo 1;
            exit;
        }
        break;

    case "getMessages":
        // echo "working";

        $query = $pdo->prepare("SELECT * FROM messages");

        $run = $query->execute();
        $rs = $query->fetchAll(PDO::FETCH_OBJ);
        $chat = "";
        foreach ($rs as $singleMessage) {
            $chat .= $singleMessage->message . "<br/>";

            $chat .= '<div class="single-message"<strong>' . $singleMessage->user . ': </strong>' . $singleMessage->message . '</div>';

        }
        //  var_dump($rs);
        echo $chat;
        break;


}