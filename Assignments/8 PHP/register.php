<?php
    if(isset($_GET['submit'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        if($name === '' && $email === ''){
            echo "Data not entered Completely";
        }
        echo $name;
        echo "<br>";
        echo $email;
    }
    else{
        echo "Not Authorized";
    }
?>