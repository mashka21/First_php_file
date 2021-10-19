<?php

// connect to sql conn.php

include 'conn.php';

// when we need to insert/register information

// POST or GET

if(isset($_POST['insert'])){

    $student_id = $_POST['St_id'];
    $student_name = $_POST['St_name'];
    $student_class = $_POST['St_class'];


    // preparing the query inserting
    $qr = "INSERT INTO students(ID,Name,Class) VALUES('$student_id','$student_name', '$student_class')";


    // excute query
    $result = $conn->query($qr);

    if($result){
        echo "Successfully Registered";
    }else{
        echo $conn->error;
    }

}else if(isset($_POST['update'])) {
    $student_id = $_POST['St_id'];
    $student_name = $_POST['St_name'];
    $student_class = $_POST['St_class'];


    // preparing the query inserting
    $qr = "UPDATE students set Name = '$student_name', Class = '$student_class' where ID = '$student_id'";


    // excute query
    $result = $conn->query($qr);

    if($result){
        echo "Successfully Updated";
        header("location: listdata.php");
    }else{
        echo $conn->error;
    }
}

if(isset($_GET['id'])){
    $student_id = $_GET['id'];
    
    // preparing the query inserting
    $qr = "DELETE FROM students where id = '$student_id'";


    // excute query
    $result = $conn->query($qr);

    if($result){
        echo "Successfully Deleted";
        header("location: listdata.php");
    }else{
        echo $conn->error;
    }
}





?>