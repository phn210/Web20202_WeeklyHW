<html>
    <head><title>Expresssion Example</title></head>
    <body>
        <?php
        echo '<p>While this is going to be parsed.</p>';
        print('<p>Hello and welcome to <i>my</i> page!</p>');
        echo "<hr/>";
        //This is a comment
        /*This is
        a commentblock*/

        $foo = true;
        if ($foo) echo "It is TRUE! <br /> \n";
        $txt='1234'; echo "$txt <br /> \n";
        $a = 1234; echo "$a <br /> \n";
        $a = -123; echo "$a <br /> \n";
        $a = 1.234; echo "$a <br /> \n";
        $a = 1.2e3; echo "$a <br /> \n";
        $a = 7E-10; echo "$a <br /> \n";
        echo 'Arnold once said: "I\'ll be back"', "<br /> \n";
        $beer = 'Heineken'; echo "$beer's taste is great <br /> \n";
        $str = <<<EOD
        Example of stringspanning multiple lines
        using “heredoc” syntax.
        EOD;
        echo $str;
        echo "<hr/>";

        $arr = array("foo" => "bar", 12 => true);
        echo $arr["foo"]; // barecho 
        $arr[12];    // 1

        array(5 => 43, 32, 56, "b" => 12);
        array(5 => 43, 6 => 32, 7 => 56, "b" => 12);

        $arr = array(5 => 1, 12 => 2);
        foreach($arr as $key => $value) { 
            echo $key, '=>', $value;
        }$arr[] = 56;    // the same as $arr[13] = 56;
        $arr["x"] = 42; // adds a new element
        unset($arr[5]); // removes the element
        unset($arr);    // deletes the whole array
        $a = array(1 => 'one', 2 => 'two', 3 => 'three');
        unset($a[2]);
        $b = array_values($a);
        echo "<hr/>";

        // Valid constant names
        define("FOO",    "something");
        define("FOO2",    "something else");
        define("FOO_BAR", "something more");
        // Invalidconstant names  (they shouldn’t start
        //      with a number!)
        define("2FOO",    "something");
        // This is valid, but should be avoided:
        // PHP may one day provide a "magical" constant
        // that will break your script
        define("__FOO__", "something");
        echo "<hr/>";

        $d=date("D");
        echo $d, "<br/>";
        if($d=="Fri")
            echo "Have a nice weekend! <br/>"; 
        else
            echo "Have a nice day! <br/>"; 
        $x=10;
        if ($x==10){
            echo "Hello<br />"; 
            echo "Good morning<br />";
        }
        echo "<hr/>";

        $x = rand(1,5);  // random integer
        echo "x = $x <br/><br/>";
        switch ($x){
            case 1:
                echo "Number 1";break;
            case 2:
                echo "Number 2";break;
            case 3:
                echo "Number 3";break;
            default:
                echo "No number between 1 and 3";break;
        }
        echo "<hr/>";
        
        $a = 1;
        $b = 2;
        function Sum(){
            global$a, $b;$b = $a + $b;
        } 
        Sum();
        echo $b;

        function Test(){
            static $a = 0;
            echo $a;$a++;
        }
        Test(); 
        Test();
        Test();
        echo "<hr/>";

        $color = 'green';
        $fruit = 'apple';
        echo "A $color $fruit"; // A
        echo "A $color $fruit"; // A greenapple
        echo "<hr/>";

        // Show all PHP information
        phpinfo();
        // Show only the general information
        phpinfo(INFO_GENERAL);
        echo "<hr/>";

        //echo "Referer: " . $_SERVER["HTTP_REFERER"]. "<br />";
        echo "Browser: " . $_SERVER["HTTP_USER_AGENT"]. "<br />";
        echo "User's IP address: " . $_SERVER["REMOTE_ADDR"];
        echo "<br/><br/><br/>";echo "<h2>All information</h2>";
        foreach ($_SERVER as $key => $value){
            echo $key . " = " . $value . "<br/>";
        }
        echo "<hr/>";

        //Prints something like: Monday
        echo date("l");
        //Like: Monday 15th of January 2003 05:51:38 AM
        echo date("l jS \of F Y h:i:s A");
        //Like: Monday the 15th
        echo date("l \\t\h\e jS");
        echo "<hr/>";

        $nextWeek = time()+ (7 * 24 * 60 * 60);
        // 7 days; 24 hours; 60 mins; 60secs
        echo 'Now:      '. date('Y-m-d')."\n";
        echo 'Next Week: '. date('Y-m-d', $nextWeek)."\n";
        echo "<hr/>";


        echo "<hr/>";


        echo "<hr/>";
        ?>

        
    </body>
</html>