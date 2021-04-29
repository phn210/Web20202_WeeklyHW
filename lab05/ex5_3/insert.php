<html>
    <head><title>Insert</title></head>
    <body>
        <?php
            $server = 'localhost';
            $user = 'phppqm';
            $pass = 'mypasswd';
            $mydb = 'mydatabase';
            $table_name = 'Products';

            $Item = $_GET["Item"];
            $weight = $_GET["weight"];
            $cost = $_GET['cost'];
            $Number = $_GET["Number"];
            
            $connect = mysqli_connect($server, $user, $pass);
            
            if (!$connect)
              die ("Cannot connect to $server using $user");
            else {
              $SQLcmd = "INSERT INTO products VALUES (0, '".$Item."', $cost, $weight, $Number)";
              mysqli_select_db($connect, $mydb);
              if(mysqli_query($connect, $SQLcmd)) {        
                print"<br>SQLcmd=$SQLcmd";
              }
              else {
                die ("Table Insert Failed SQLcmd=$SQLcmd");
                echo mysqli_error($connect);
              }
              mysqli_close($connect);
            }
        ?>
    </body>
</html>