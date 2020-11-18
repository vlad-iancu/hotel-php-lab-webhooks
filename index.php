<?php
    $data = json_decode(file_get_contents("php://input"), true);
    error_log("action is".$data["action"]);
    if($data["pull_request"]["base"]["ref"] == "master" && $data["action"] == "merged") {
        error_log("We are pulling the master branch");
        chdir("/home/iancu/apps/hotel-php-lab-backend");
        exec("git pull origin master");
    }
?>