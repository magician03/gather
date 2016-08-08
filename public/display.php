




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
        $events = [];

    if(isset($_POST['submit'])){

        if(!empty($_POST['interests'])){
        $i = 0;
        foreach($_POST['interests'] as $interest){

            if($_POST["city"] != "None"){

            $events_type = CS50::query("SELECT * FROM events WHERE type = ? AND city = ?" , $interest, $_POST["city"]);

        }else{

            $events_type = CS50::query("SELECT * FROM events WHERE type = ?" , $interest);
        }

            foreach ($events_type as $event_type) {

                if($event_type["count"] == $event_type["max_mem"]){

                    $row = CS50::query("SELECT * FROM user WHERE username = ?" , $event_type["admin"]);
                    $number = $row[0]["mobile"];
                    $message = "Your event with name " + $event_type["event_name"] + " is now ready to be organised with the "+$event_type["count"] +" people opting to gather.";
                    //send sms
                    
                    
                    

                }
                else{
                $events[$i++] = [
                    "event_name" => $event_type["event_name"],
                    "time" => $event_type["timestamp_e"],
                    "amount_ph" => $event_type["amount_ph"],
                    "duration" => $event_type["duration"],
                    "admin" => $event_type["admin"],
                    "min_mem" => $event_type["min_mem"],
                    "max_mem" => $event_type["max_mem"],
                    "details" => $event_type["details"],
                    "type" => $event_type["type"],
                    "event_id" => $event_type["event_id"],
                    "count" => $event_type["count"]

                ];
            }}
        }
    }}
    render("events.php", [ "events" => $events, "title" => "Gatherings"]);
    }

    

?>