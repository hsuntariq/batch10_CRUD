<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
        <div class="col-lg-5 mx-auto p-4 rounded-3 shadow">
            <form action="./add-student.php" method="POST">
                <label for="">Student Name</label>
                <input type="text" name="name" class="form-control" id="">
                <label for="">Student Age</label>
                <input type="number" name="age" class="form-control" id="">
                <label for="">Student Email</label>
                <input type="email" name="email" class="form-control" id="">
                <label for="">Student Class</label>
                <input type="text" name="class" class="form-control" id="">
                <label for="">Student Address</label>
                <input type="text" name="address" class="form-control" id="">
                <label for="">DOB</label>
                <input type="date" name="dob" class="form-control">
                <label for="">Gender</label>
                <div class="d-flex justify-content-between">

                <div class="d-flex justify-content-between w-25">

                    <label for="">Male</label>
                    <input type="radio" name="gender" value="male" class="form-check">
                </div>
                <div class="d-flex justify-content-between w-25">

                    <label for="">Female</label>
                    <input type="radio" name="gender" class="form-check" value="female" id="">
                </div>
                </div>

                <button class="btn btn-primary w-100 my-2">
                    Add Data
                </button>
            </form>
        </div>

    <div class="container col-lg-7 mx-auto my-2">
        <table class="table table-striped  text-capitalize text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>email</th>
                    <th>class</th>
                    <th>address</th>
                    <th>dob</th>
                    <th>gender</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "college") or die('connection failed');
                $select = "SELECT * FROM student_data";
                $data = mysqli_query($connection, $select);
                if (mysqli_num_rows($data)) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        ?>

                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['class'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['dob'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td>
                                <a href="./delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>

                 <?php
                    }
                }
                 ?>
            </tbody>


        </table>
    </div>


</body> 
</html>