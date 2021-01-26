<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(($_POST["username"]==="admin")&&($_POST["password"]==="admin")){
        echo "Welcome".' '.$_POST["username"];
    }
}
?>