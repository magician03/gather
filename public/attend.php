<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("login.php", ["title" => "Log In"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {


	$result = CS50::query("INSERT IGNORE INTO att (event_id, user_id) VALUES(?, ?)", $_POST["event_uni"], $_POST["user_uni"]);
    if($result == FALSE){
        apologize("You have already joined this event..!");
    }

    CS50::query("UPDATE events SET count = (count + 1) WHERE event_id = ?" , $_POST["event_uni"]);

	redirect("/");

}


?>