<?php
require_once "../common.php";

$location = "Location: https://test.bready.xyz/loyalty/index.php?text=";

if(isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pn']) && isset($_POST['dob']) && isset($_POST['addr']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
    
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pn = $_POST['pn'];
    $dob = $_POST['dob'];
    $addr = $_POST['addr'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    
    $pass = sha1($pass1);
    
    if($pass1 == $pass2){
        $table = $tbls['loyalty'];
        
        $db = get_db();
        
        $sql = "SELECT * FROM $table WHERE username='$user'";
        $result = $db->query($sql);
        
        if($result->num_rows > 0){
            header($location . "That username is already taken!");
        }else{
            $sql = "SELECT * FROM $table WHERE email='$email' OR phone='$pn'";
            error_log($sql);
            $result = $db->query($sql);
            if($result->num_rows > 0){
                header($location . "An account is already registered under that email or phone number.");
            }else{
                $sql = "INSERT INTO $table (email,passwd,first,last,points,bday,address,username,phone) VALUES ('$email','$pass','$fn','$ln','200','$dob','$addr','$user','$pn')";
                
                $db->query($sql);
                
                if($db->insert_id != 0) header($location . "You account has been successfully created. Please check your inbox to validate your email.");
                else header($location . "An error occured. Please try again leter or contact us.");
            }
        }
        
    }else{
        header($location . "The passwords you have entered do not match.");
    }

}else{
    header($location . "Insuffitient data to create a profile. Please try again.");
}
?>