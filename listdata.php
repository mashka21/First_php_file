<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All students data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th colspan="2" class="mx-auto">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $query1 = "SELECT * FROM students";
                        $result = $conn->query($query1);

                        // variable row
                        $htmlTable = "";

                        if($result){
                            
                            //open row
                            $htmlTable .= "<tr>";

                            while($row = $result->fetch_assoc()){
                                
                                $htmlTable .= "<td>" . $row['ID'] . "</td>";
                                $htmlTable .= "<td>" . $row['Name'] . "</td>";
                                $htmlTable .= "<td>" . $row['Class'] . "</td>";

                                // update and delete
                                $Update_link = "form.php?" . "id=" . $row['ID'] ."&name=" .$row['Name'] ."&class=" .$row['Class'];

                                $Delete_link = "sql_form.php?" . "id=" . $row['ID'];


                                
                                $htmlTable .= "<td>". '<a href="'.$Update_link.'" class="btn btn-success m-1">Update</a>' . "</td>";

                                $htmlTable .= "<td>". '<a href="'.$Delete_link.'" class="btn btn-danger m-1">Delete</a>' . "</td>";


                                // close row
                                $htmlTable .= "</tr>";
                                
                            }

                            echo $htmlTable; 

                        }else{
                            echo $conn->error;
                        }
                    ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>