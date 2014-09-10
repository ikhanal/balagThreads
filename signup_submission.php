<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['submit'])){
    include 'dbconnection.php';
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    // to check data from database 
    $query="SELECT * FROM signup";
    $result=  mysql_query($query);
    $count=  mysql_num_rows($result);
    if($result){
        
        
        $row=  mysql_fetch_assoc($result);
       if( $email==$row['EMAIL'] or $username== $row['USERNAME']){
           echo'Sorry this user is already registered';
       }else{
           $array=array($email,$username);
            print_r($array);
                        // TO INSERT DATA
    $insert_data="INSERT INTO signup VALUES('', '$username', '$email', '$password')";
    $insert_result=mysql_query($insert_data);
//    $array=array($username,$email,$password);
    
    if($insert_data){
//        print_r($insert_data);
        echo '<div class="alert alert-success"
            test page
            </div';
       header('Location:logIn.php');
    }  else {
        echo'Something went wrong!';
    }
       }
        
        
    } else {

    }
        
    
    

}
?>
