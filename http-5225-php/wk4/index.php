<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP and For Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <div class="row">
                <?php
                    function getUsers(){
                        $url = "https://jsonplaceholder.typicode.com/users";
                        $data = file_get_contents($url);
                        return json_decode($data, true);

                    }
                    $users = getUsers();
                    

                for($i = 0; $i < count($users); $i++){

                    
                       echo '<div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">';
                                       echo '<h4 class="card-title">'. $users[$i]['name'] . '</h4>';
                                        echo '<p class="card-text"><strong>Username:</strong> ' . $users[$i]['username'] . '</p>';
                                        echo '<p class="card-text"><strong>Street:</strong> ' . $users[$i]['address']['street'] . '</p>';
                                        echo '<p class="card-text"><strong>Suite:</strong> ' . $users[$i]['address']['suite'] . '</p>';
                                        echo '<p class="card-text"><strong>City:</strong> ' . $users[$i]['address']['city'] . '</p>';
                                        echo '<p class="card-text"><strong>Zipcode:</strong> ' . $users[$i]['address']['zipcode'] . '</p>';
                                        echo '<p class="card-text"><strong>Phone:</strong> ' . $users[$i]['phone'] . '</p>';
                                        echo '<p class="card-text"><strong>Website: ' . '</strong><a href="#">' . $users[$i]['website'] . '</a>
                                    </div>
                                </div>
                            </div>';
                    
                }

                ?>
    </div>
</div>
</body>
</html>