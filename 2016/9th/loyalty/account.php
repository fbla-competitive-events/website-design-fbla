<?php
require "../common.php";
$location = "Location: https://bready.xyz/loyalty/index.php?text=";
session_start();

if(isset($_POST['login-id']) && isset($_POST['login-pass'])){
    $db = get_db();
    
    $user = $db->real_escape_string($_POST['login-id']);
    $pass = $db->real_escape_string(sha1($_POST['login-pass']));
    
    $table = $tbls['loyalty'];
    $sql = "SELECT * FROM $table WHERE (aid='$user' OR email='$user' OR username='$user' OR phone='$user') AND passwd='$pass'";
        
    $result = $db->query($sql);
    
    if($result->num_rows == 1){
        $data = $result->fetch_assoc();
        unset($data['passwd']);
        $_SESSION['user'] = $data;

        header($location . "Success!");
    }else{
        header($location . "Your login information did not match our records. Please try again");
    }
    
}elseif(isset($_SESSION['user'])){
    header($location . "Already logged inSuccess!");
}else{
    header($location . "Please login before continuing");
}
?>