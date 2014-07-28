<?php
$host = 'localhost';
$user='root';
$password = '';
$database='balagthreads';

$connection = mysql_connect("$host", "$user", "$password")
or 
die("Could not establish connection!");


$db_connection = mysql_select_db($database, $connection)
or
die("could not connect to database");




if($connection){
	 
	}

else{
	echo "Opps! Problem while connecting to database! Please, verify that your database exist and configured properly!!";
	}


function message($msg="", $msgtype="") {
    if(!empty($msg)) {
        // then this is "set message"
        // make sure you understand why $this->message=$msg wouldn't work
        $_SESSION['message'] = $msg;
        $_SESSION['msgtype'] = $msgtype;
    } else {
        // then this is "get message"
        return $message;
    }
}

?>
