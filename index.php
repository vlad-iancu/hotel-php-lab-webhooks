<?php
    $data = json_decode(file_get_contents("php://input"), true);
    error_log("action is".$data["action"]);
    if($data["pull_request"]["base"]["ref"] == "master" && $data["pull_request"]["merged_at"] != null) {
        error_log("We are pulling the master branch");
        //chdir("/home/iancu/apps/hotel-php-lab-backend");
        error_log(exec("whoami"));
        error_log("Result:".exec("git -C /home/iancu/apps/hotel-php-lab-backend pull origin master"));
        
    }
?>