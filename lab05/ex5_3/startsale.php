<html>
    <head><title>Inventory Management</title></head>
    <body>
        <div style="color:blue; font-size:24px">Select Product We Just Sold</div>
        <form action="sale.php" method="GET">
            <div>
                Hammer <input type="radio" name="product_desc" value="Hammer">
                Screw Driver<input type="radio" name="product_desc" value="Screw Driver">
                Wrench<input type="radio" name="product_desc" value="Wrench">
            </div>
            <input type="submit" value="Click To Submit">
            <input type="reset" value="Reset">
        </form>

        <?php
            $server = 'localhost';
            $user = 'phppqm';
            $pass = 'mypasswd';
            $mydb = 'mydatabase';
            $table_name = 'Products';
            
            $connect = mysqli_connect($server, $user, $pass, $mydb);
            
            if (!$connect)
              die ("Cannot connect to $server using $user");
            else {
                $SQLcmd = "SELECT * FROM $table_name";
                print "<div>The Query is $SQLcmd</div>";
                $query = mysqli_query($connect, $SQLcmd);
                print "<table border='1'>";
                print "<tr>
                        <th>Num</th>
                        <th>Product</th>
                        <th>Cost</th>
                        <th>Weight</th>
                        <th>Count</th>
                        </tr>";
                if(mysqli_num_rows($query) > 0) {
                    while($row = mysqli_fetch_assoc($query)) {
                        print "<tr>
                                <td>".$row['ProductID']."</td>
                                <td>".$row['Product_desc']."</td>
                                <td>".$row['Cost']."</td>
                                <td>".$row['Weight']."</td>
                                <td>".$row['Numb']."</td>
                            </tr>";
                    }
                }
                print "</table>";
                mysqli_close($connect);
            }
        ?>
    </body>
</html>