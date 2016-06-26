<?php
/*
Subject Code and Section: INT322SAA
Student Name : ANCHETA, Jesus Jr.
Date Submitted : 21 June 2016

Student Declaration

I/we declare that the attached assignment is my/our own work in accordance with Seneca Academic Policy.
No part of this assignment has been copied manually or electronically from any other source
(including web sites) or distributed to other students.

Name: ANCHETA, Jesus Jr
Student ID: 017 433 152
*/
ob_start();
?>
<!--displays data on tabular form on the screen-->
<!doctype html>
<html>
  <head>
    <title>Assignment1-View</title>
	<link rel="stylesheet" href="assign1.css" type="text/css" media="screen"/>
  </head>
<body>
  <?php include "a1.lib";?>
    <div class="box">
	<?php title("View Records");?>  
     <table class="result">
		<tr>
		  <th>ID</th>
		  <th>Item Name</th>
		  <th>Description</th>
		  <th>Supplier<br/>Code</th>
		  <th>Cost</th>
		  <th>Price</th>
		  <th>Stock<br/>On Hand</th>
		  <th>Reorder<br/>Level</th>
		  <th>Back<br/>Order</th>
          <th>Delete/<br/>Restore</th>
		</tr>
    <?php
      $connect = connectionDB();
      if($connect){
          $result = mysqli_query($connect, "SELECT * from inventory order by id");
          while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['itemName']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['supplierCode']; ?></td>
              <td class="textRight"><?php echo $row['cost']; ?></td>
              <td class="textRight"><?php echo $row['price']; ?></td>
              <td class="textRight"><?php echo $row['onHand']; ?></td>
              <td class="textRight"><?php echo $row['reorderPoint']; ?></td>
              <td class="textCenter"><?php echo $row['backOrder']; ?></td>
			  <?php if($row['deleted'] == 'n'){
                echo "<td class=\"textCenter\"><a href=\"delete.php?id={$row['id']}&del=n\">Delete</a></td>";
              }
              else{
                echo "<td class=\"textCenter\"><a href=\"delete.php?id={$row['id']}&del=y\">Restore</a></td>";
              } ?>
            </tr>
          <?php
		  }
          mysqli_free_result($result);
          mysqli_close($connect);
      } 
	?>
   </table>
  </div> 
</body>
</html>