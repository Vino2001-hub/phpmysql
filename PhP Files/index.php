<!-- config includes backend part to store the values in database -->

<?php include 'config.php'; ?>

<!-- header includes Top navigation and Side navigation -->

<?php include 'header.php' ?>


<!-- Page content includes form and table-->

<div class="content">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="CompanyName" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputCompanyName" name="cname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPosition" class="form-label">Position</label>
                    <input type="text" class="form-control" id="exampleInputPosition" name="position">
                </div>
                <div class="mb-3">
                    <label for="JobDesc" class="form-label">Job Description</label>
                    <textarea id="exampleInputJobDesc" cols="30" rows="10" class="form-control" name="jdesc"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSkills" class="form-label">Skills</label>
                    <input type="text" class="form-control" id="exampleInputSkills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="exampleInputCTC" name="ctc">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <?php 
        
        $conn = mysqli_connect($server, $username, $password, $database);
        
        $sql1 = "SELECT `CName`, `Position`, `CTC` FROM `jobs` ";
        $result = mysqli_query($conn, $sql1);
        $i = 0;
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "
                <tbody>
                <tr>
                <td>" . ++$i . "</td>
                <td>" . $rows['CName'] . "</td>
                <td>" . $rows['Position'] . "</td>
                <td>" . $rows['CTC'] . "</td>
                </tr>";
                
            }
        } else {
            echo "no record";
        } 
       echo "</tbody>" ?>
    </table>
</div>


<!-- jQuery for page content - collapse only -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>