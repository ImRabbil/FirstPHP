<?php
$fname = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : '';
$lname = isset($_REQUEST['lname']) ? $_REQUEST['lname'] : '';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
$pass = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

// if (isset($_REQUEST['btn'])) {
//     $fname = $_REQUEST['fname'];
//     $lname = $_REQUEST['lname'];
//     $email = $_REQUEST['email'];
//     $pass = $_REQUEST['password'];
// }



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="" name="fname">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">LastName</label>
                <input type="text" class="form-control" id="" name="lname">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" id="" name="email">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="btn">Submit</button>
        </form>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> <?php echo $fname ?></th>
                    <td><?php echo $lname ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $pass ?></td>
                </tr>

            </tbody>
        </table>



        </table>

    </div>



</body>

</html>