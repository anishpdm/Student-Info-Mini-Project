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



     $sql = "SELECT `Name`, `dept`, `sub` FROM `Faculty` WHERE `Name` LIKE '%$name%' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo " <table class='table'>    <thead class='thead-light'>
    <tr> <th>  NAME </th> <th> DEPT </th><th> SUB </th>   </tr>
    </thead>
    ";

    while($row = $result->fetch_assoc()) {

$name= $row["Name"];
$dept= $row["dept"];
$sub=$row["sub"];

echo "   <tr> <td>  $name </td> <td> $dept </td><td> $sub </td>  ";


}

  echo " </table>";



}
else{

  echo "<script> alert('No faculty Found ') </script>";
}

}
?>
