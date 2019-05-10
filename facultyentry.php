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
    <td>Name</td>
    <td><input type="text" name="name" class="form-control" required></td>
    </tr>


    <tr>
    <td>dept</td>
    <td><input type="text" name="dept" class="form-control" required></td>
    </tr>


    <tr>
    <td>subject</td>
    <td><input type="text" name="sub" class="form-control" required></td>
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



   $name=$_POST['name'];


   $dept=$_POST['dept'];

    $sub=$_POST['sub'];


   $sql = "INSERT INTO `faculty`(`name`, `dept`, `sub`)
    VALUES('$name','$dept','$sub')";
$result = $conn->query($sql);

if ($result===TRUE) {

        echo "<script> alert('Registered Succesfully') </script>";
        echo "<script> window.location.href='facultyentry.php' </script>";

} else {
    echo "<script> alert('error ') </script>";
}

}
?>
