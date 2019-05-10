<?php
  $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'sample';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $id = $_GET['id'];

   
    $sql = "SELECT * FROM insertadmin where mobileid = '$id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );
   $row = mysqli_fetch_array($retval);
    


?>

<!DOCTYPE html>
<html>

<head>
    <title>MOB</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <!--   Navbar -->
    

    <!-- The main content goes here-->
    <div class="container mt-5">
        <center>
            <h1 class="text-white">Edit</h1>
        </center><br/>
        <div class="container edit-form-div">
            
             <form action='update1.php' method='post'>
                        <div class="form-group">
                            <label for="medId">Mobile id:</label>
                               <input type="text" name='mobileid' class="form-control" id="medId" value=<?php echo $_GET['id'];?> readonly>
                        </div>
                        <div class="form-group">
                            <label for="medName">Mobile company:</label>
                            <input type="text" name='mobcompany' class="form-control" id="medName" placeholder="Enter mobile company"  value=<?php echo $row['mobcompany'];?>  >
                        </div>
                        <div class="form-group">
                            <label for="medCost">Mobile OS:</label>
                            <input type="text" name='mobos' class="form-control" id="medCost" placeholder="Enter Medicine Cost"  value=<?php echo $row['mobos'];?> >
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile form factor:</label>
                            <input type="text" name='formfactor' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date"  value=<?php echo $row['formfactor'];?> >
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile name:</label>
                            <input type="text" name='name' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date"  value=<?php echo $row['name'];?> >
                        </div>
                        <div class="form-group">
                            <label for="medExp">Mobile Price:</label>
                            <input type="number" name='price' class="form-control" id="medExp" placeholder="Enter Medicine Expiry Date"  value=<?php echo $row['price'];?> >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id='add-btn'>Update data</button>
                        </div>
                    </form>
        </div>
       
    </div>






    <!--Script tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
