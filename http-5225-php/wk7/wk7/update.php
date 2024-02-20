<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include('reusables/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Update Student Profile
                </h1>
            </div>
        </div>
    </div>

    <?php
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
    $query = "SELECT * FROM students WHERE `id` = '$id'";

    $students = mysqli_query($connect, $query);
    $result = $students->fetch_assoc();

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="includes/updateStudent.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First name" value="<?php echo $result['fname'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last name" value="<?php echo $result['lname'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Enter marks" value="<?php echo $result['marks'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="imageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL" value="<?php echo $result['imageURL'] ?>">
                    </div>


                    <button type="submit" name="updateStudent" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>