<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $class = $_GET['class'];

    }else{
        $id = "";
        $name = "";
        $class = "";
    }

?>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form action="sql_form.php" method="POST">
                            <div class="form-group mb-2">
                                <label for="id">Student Id</label>
                                <input type="text" id="" name="St_id" class="form-control" placeholder="Please Enter Your ID." value="<?php echo $id ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Student Name</label>
                                <input type="text" name="St_name" id="" placeholder="Enter Student Name" class="form-control"  value="<?php echo $name ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="class">Class Code</label>
                                <input type="text" name="St_class" id="" placeholder="Class code" class="form-control"  value="<?php echo $class ?>">
                            </div>
                            <button type="submit" name="insert" class="btn btn-success m-2 ">Save Info</button>
                            <button type="submit" name="update" class="btn btn-info m-2">Update</button>
                        </form>

                    </div>
                </div>
                

            </div>
        </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>