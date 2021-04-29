<html>
  <head>
    <title>Create table</title>
  </head>

  <body>
    <?php
      $server = 'localhost';
      $user = 'phppqm';
      $pass = 'mypasswd';
      $mydb = 'mydatabase';
      $table_name = 'Products';
      $connect = mysqli_connect($server, $user, $pass);
      if (!$connect)
        die ("Cannot connect to $server using $user");
      else {
        $SQLcmd = "CREATE TABLE $table_name (
          ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
          Product_desc VARCHAR(50),
          Cost INT,
          Weight INt,
          Numb INT
        )";
        mysqli_select_db($connect, $mydb);
        if(mysqli_query($connect, $SQLcmd)) {
          print '<font size = "4", color = "blue">Create table';
          print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
          print"<br>SQLcmd=$SQLcmd";
        }
        else {
          die ("Table Create Creation Failed SQLcmd=$SQLcmd");
          echo mysqli_error($connect);
        }
        mysqli_close($connect);
      }
      ?>
  </body>
</html>