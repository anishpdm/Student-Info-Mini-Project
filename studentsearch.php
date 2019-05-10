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




    </table>
    <center><h5> <Button name="but" class="btn btn-success">SEARCH</Button></h5></center>



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



   $sql = "SELECT  `name`, `dept`, `sem`, `Address`, `phone`, `Uname`, `Password` FROM `Student` WHERE `name` LIKE '%$name%'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th>  NAME </th> <th> DEPT </th><th> SEM </th>  <th> ADDRESS  </th>  <th> PHONE  </th> </tr>
    </thead>
    ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

$name= $row["name"];
$dept= $row["dept"];
$sem= $row["sem"];
$Address= $row["Address"];
$phone= $row["phone"];
echo "   <tr> <td>  $name </td> <td> $dept </td><td> $sem </td>  <td> $Address  </td>  <td> $phone  </td> </tr>  ";


}

  echo " </table>";



}
else{

  echo "<script> alert('No Student Found ') </script>";
}

}
?>
