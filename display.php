<!DOCTYPE html>
<html>

<head>
    <title>Mobile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <!--   Navbar -->
    



    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1>Mobilesss</h1>
                </center>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <?php
                
    $con=mysqli_connect("localhost","root","","sample");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM insertadmin");
                $msg = "'Are you sure?'";
       
                
     echo "<div class='container table-class'> <div class='row mb-5'>
   </div><table id='med-div' class='table table-dark' style='width:100%;'><thead class='thead-light'><tr><th>ID</th><th>Name</th><th>Company</th><th>OS</th><th>formfactor</th><th>price</th></tr></thead><tbody>";
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>".$row['mobileid'] . "</td><td> " . $row['name']. "</td><td> " . $row['mobcompany']. "</td><td> " .$row['mobos']."</td><td>". $row['formfactor']."</td><td>". $row['price']."</td></tr>"; //these are the fields that you have stored in your database table employee
     
      }
                echo "</tbody></table></div>";

    mysqli_close($con);
    ?>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add new item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='additem.php' method='get'>
                        <div class="form-group">
                            <label for="medId">>Mobile id:</label>
                            <input type="number" name='mobileid' class="form-control" id="medId" placeholder="Enter Medicine ID">
                        </div>
                        <div class="form-group">
                            <label for="medName">Mobile company:</label>
                            <input type="text" name='mobcompany' class="form-control" id="medName" placeholder="Enter Medicine Name">
                        </div>
                        <div class="form-group">
                            <label for="medCost">Mobile OS:</label>
                            <input type="number" name='mobos' class="form-control" id="medCost" placeholder="Enter Medicine Cost">
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile form factor:</label>
                            <input type="text" name='formfactor' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date">
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile name:</label>
                            <input type="text" name='name' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date">
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile Price:</label>
                            <input type="text" name='price' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date">
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id='add-btn'>Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer display-msg">

                </div>
            </div>
        </div>
    </div>


    <!--Script tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
