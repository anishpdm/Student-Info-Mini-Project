<?php
session_start();
 ?>
<?php
include './studentNavbar.php';

 ?>


    <?php
  $id=$_SESSION["studid"];
  include './dbcon.php';



     $sql = "SELECT `Id`, `name`, `dept`, `sem`, `Address`, `phone` FROM `Student` WHERE `Id`=$id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    echo "<table class='table'>";
      // output data of each row
      while($row = $result->fetch_assoc()) {

        $name=$row["name"];
        $dept=$row["dept"];
        $sem=$row["sem"];
        $address=$row["Address"];
        $phone=$row["phone"];

        echo "<tr>  <td> Name </td>  <td> $name </td> </tr>";

          echo "<tr>  <td> dept</td>  <td> $dept </td> </tr>";
            echo "<tr>  <td> sem</td>  <td> $sem </td> </tr>";
              echo "<tr>  <td>address</td>  <td> $address </td> </tr>";
              echo "<tr>  <td>phone</td>  <td> $phone </td> </tr>";


      }
  echo "<table>";

    }




     ?>

  </body>
</html>
