<html>
 <body>
 <h2>Change Price</h2>
  <form action="changeprice.php" method="post">
  Enter prod no. : <input type=text size=5 name=prodno> 
  Price : <input type=text name="price" size=5>
  <br/>
  <input type=submit value="Change Price">
  </form>
  
  
  <?php
   if (! isset( $_POST["prodno"]))
       exit();
       
   // read parameters
   $prodno = $_POST["prodno"];
   $price = $_POST["price"];
   
   $con = new mysqli("localhost","root","srikanth","mysql");
   if (! $con)
       echo "Error -->". mysqli_connect_error();
       
   // updating with normal command
   $cmd = "update products set price = $price where prodno = $prodno";
   $st = $con->stmt_init();
   $st->prepare($cmd);
   $st->execute();
   echo "Changed Price Successfully Using UPDATE command";
   
   // updating with stored procedure
   $cmd = "call changeprice($prodno,$price)";
   $st = $con->stmt_init();
   $st->prepare($cmd);
   $st->execute();

   
   echo "Changed Price Successfully Using Stored Procedure";
   
   $st->close();
   $con->close();

  ?>
  
 </body>
</html>