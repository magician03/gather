<?php

    require("../includes/config.php"); 
    
    $his = [];
    $rows = CS50::query("SELECT * FROM att WHERE user_id = ?" , $_SESSION["id"]);
    
    $i = 0;
    foreach ($rows as $row)
    {
            
          $event_h = CS50::query("SELECT * FROM events where event_id = ?" , $row["event_id"]);
          $event_h = $event_h[0];
          $time = strtotime($event_h["timestamp_e"]);

          $curtime = time();
          if ($time > $curtime){
            $status = "Completed";
          }else{
            $status = "Yet to be Gathered";
          }
        if($event_h["city"] == NULL){
            $event_h["city"] = "Not Mentioned";
        }

          $his[$i++] = [
                "eventname" => $event_h["event_name"],
                "admin" => $event_h["admin"],
                "date" => $event_h["timestamp_e"],
                "details" => $event_h["details"],
                "type" => $event_h["type"],
                "city" => $event_h["city"],
                "status" => $status,
                "event_id" => $event_h["event_id"]

            ];
        
    }
    
   
    
    render("history_r.php", [ "his" => $his, "title" => "History"]);
    



?>