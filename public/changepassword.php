<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("change_form.php", ["title" => "Change Password"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    if(empty($_POST["old"]))
    {
        apologize("You should Provide your current Password.");
    }
    
    if(empty($_POST["new"]))
    {
        apologize("Provide a New Password.");
    }
    
    $oldpw = CS50::query("SELECT hash FROM user WHERE id = ? " , $_SESSION["id"]);
    
    if (password_verify($_POST["old"], $oldpw[0]["hash"]) != 1)
    {
        apologize("Your Old Password is wrong.");
    }
    
    CS50::query("UPDATE user SET hash = ? WHERE id = ?" , password_hash(($_POST["new"])  , PASSWORD_DEFAULT), $_SESSION["id"]);
    
    session_destroy();
    
    redirect("/login.php");
    
    /*echo password_verify($_POST["old"], $oldpw[0]["hash"]);
    echo "  ";
    echo $_POST["old"];
    echo $oldpw[0]["hash"];*/
    
    


}

?>