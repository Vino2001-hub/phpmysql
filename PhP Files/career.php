<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <!--getbootstrap -- get started -- paste link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <!-- Top Navigation -->

    <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->


        <!-- IMAGE -->

        <div class="banner">
            <img src="../Images/job1.jpg" alt="job image">
            <p class="center">Job Portal <br></p>
            <p class="center1">Best Jobs available matching your skills</p>

        </div>
    </div>

    <div class="row">
        <?php

        $conn = mysqli_connect($server, $username, $password, $database);
        $sql2 = "SELECT  CName, Position, JDesc, Skills, CTC FROM jobs";
        $result = mysqli_query($conn, $sql2);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4">
                <div class="jobs" style="border:2px solid black; padding:10px;box-shadow: 5px 5px 5px 5px #888888;margin:20px;">
                <h3 style="text-align:center;">' . $rows['Position'] . '</h3>
                <h4 style="text-align:center;">' . $rows['CName'] . '</h4>
                <p style="color:black;text-align:justify;">' . $rows['JDesc'] . '</p>
                <p style="color:black;"><b>Skills Required:</b>' . $rows['Skills'] . '</p>
                <p style="color:black;"><b>CTC:</b>' . $rows['CTC'] . '</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply Now</button>
                </div>
                </div>';
            }
        } ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply For A Job</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="recipient-name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Applying For</label>
                                <input type="text" class="form-control" id="recipient-name" name="apply">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Qualification</label>
                                <input type="text" class="form-control" id="recipient-name" name="qualify">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Year Passout</label>
                                <input type="text" class="form-control" id="recipient-name" name="year">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="apple">Apply</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery for page content - collapse only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>