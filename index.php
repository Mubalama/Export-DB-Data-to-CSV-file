<?php  
 $connect = mysqli_connect("localhost", "root", "", "csv");  
 $query ="SELECT * FROM tbl_employee ORDER BY id asc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Richard Mubalama | the Dev</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Exporting DB Data to CSV file with PHP</h2>  
                <h3 align="center">Here is an Example of Employee Data with the Export Button</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Address</th>  
                               <th width="10%">Gender</th>  
                               <th width="20%">Designation</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["designation"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  