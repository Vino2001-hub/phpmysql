<!-- header includes Top navigation and Side navigation -->

<?php include 'header.php' ?>


<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Year Passout</th>
            </tr>
        </thead>
        <?php include 'config.php';

        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "SELECT `Name`, `Year`, `Apply` FROM `candidates`";
        $result = mysqli_query($conn, $sql);
        $i = 0;
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
              echo 
                "<tbody>
                <tr>
                <td>" . ++$i . "</td>
                <td>" . $rows['Name'] . "</td>
                <td>" . $rows['Apply'] . "</td>
                <td>" . $rows['Year'] . "</td>
                </tr>";
            }
        }
        else {
            echo "no record";
        } 
       echo "</tbody>" ?>
    </table>

   
</div>