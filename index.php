<?php
    $data = json_decode(file_get_contents("php://input"), true);
    if($data["pull_request"]["base"]["ref"] == "master") {
        chdir("/home/iancu/apps/hotel-php-lab-backend");
        exec("git pull origin master");
    }
?>