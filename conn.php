<?php 

// object oriented
// procedural



/*i am using OOP so we need:
    1-host
    2-user
    3-password
  4-database --not necessary

*/

// starting point

$conn = new mysqli("localhost","root","","tijaabo");

if($conn->connect_error){
    echo $conn->error;
}else{
    
}



?>