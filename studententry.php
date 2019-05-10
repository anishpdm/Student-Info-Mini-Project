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
    <td>Address</td>
    <td><input type="text" name="addr" class="form-control" required></td>
    </tr>


    <tr>
    <td>Phone</td>
    <td><input type="text" name="Phone" class="form-control" required></td>
    </tr>


    <tr>
    <td>Department</td>
    <td><input type="text" name="dept" class="form-control"   required></td>
    </tr>

    <tr>
    <td>Sem</td>
    <td>
    <select name="sem" class="form-control">

    <option value="S1"> S1</option>
    <option value="S2"> S2</option>
    <option value="S3"> S3</option>
    <option value="S4"> S4</option>
    <option value="S5"> S5</option>
    <option value="S6"> S6</option>
    </select>

    </td>
    </tr>


    <tr>
    <td>Username</td>
    <td><input type="text" name="uname" class="form-control" required></td>
    </tr>

    <tr>
    <td>Password</td>
    <td><input type="password" name="pass" class="form-control"
     required></td>
    </tr>

    <tr>
    <td>Confirm Password</td>
    <td><input type="password" name="cpass" class="form-control"
     required></td>
    </tr>

    <tr>
    <td></td>
    <td>

     </td>
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
   $uname=$_POST['uname'];
   $pass=$_POST['pass'];

   $name=$_POST['name'];
   $Phone=$_POST['Phone'];
   $addr=$_POST['addr'];
   $dept=$_POST['dept'];

    $sem=$_POST['sem'];


   $sql = "INSERT INTO `Student`(`name`, `dept`, `sem`, `Address`, `phone`, `Uname`, `Password`)
    VALUES('$name','$dept','$sem','$addr',$Phone ,'$uname','$pass')";
$result = $conn->query($sql);

if ($result===TRUE) {

        echo "<script> alert('Registered Succesfully') </script>";
        echo "<script> window.location.href='studententry.php' </script>";

} else {
    echo "<script> alert('error ') </script>";
}

}
?>
