<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("organise_form.php", ["title" => "Organise"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$row = CS50::query("SELECT * FROM user WHERE id = ?", $_SESSION["id"]);

    	$name = $row[0]["username"];

        if($_POST["min_mem"] >= $_POST["max_mem"]){
            apologize("You must provide valid minimum members and maximum members..!!");
        }

    	CS50::query("INSERT INTO events (event_name, timestamp_e, amount_ph, duration, admin, min_mem, max_mem, details, type, city) 
    		VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", 
    		$_POST["eventname"], 
    		$_POST["time"], 
    		$_POST["amount"],
    		$_POST["duration"],
    		$name,
    		$_POST["min_mem"],
    		$_POST["max_mem"],
    		stripcslashes($_POST["details"]),
    		$_POST["type"],
    		$_POST["city"]);

        

    	redirect("/");
}


?>