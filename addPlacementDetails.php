<?php
include './adminnavbar.php';

 ?>

<form method="POST">

<div class="container">

  <div class="row">

    <div class="col col-sm-2">

    </div>

    <div class="col col-sm-8">


      <table class="table">

    <tr>
    <td>companyname</td>
    <td><input type="text" name="companyname" class="form-control" required></td>
    </tr>


    <tr>
    <td>qualification</td>
    <td><input type="text" name="qualification" class="form-control" required></td>
    </tr>


    <tr>
    <td>date</td>
    <td><input type="date" name="date" class="form-control" required></td>
    </tr>


    <tr>
    <td>venue</td>
    <td><input type="text" name="venue" class="form-control"   required></td>
    </tr>


    </table>
    <center><h5> <Button name="but" class="btn btn-success">SUBMIT</Button></h5></center>



    </div>


    <div class="col col-sm-2">

    </div>

  </div>

</div>



</form>


  </body>
</html>


<?php
include './dbcon.php';

if(isset($_POST['but'])){
   $companyname=$_POST['companyname'];
   $qualification=$_POST['qualification'];
   $date=$_POST['date'];
   $venue=$_POST['venue'];



   $sql = "INSERT INTO PlacementDetails(companyname,qualification,date,venue)
    VALUES('$companyname','$qualification','$date','$venue')";
$result = $conn->query($sql);

if ($result===TRUE) {

        echo "<script> alert('Added Succesfully') </script>";


} else {
    echo "<script> alert('error ') </script>";
}

}
?>
