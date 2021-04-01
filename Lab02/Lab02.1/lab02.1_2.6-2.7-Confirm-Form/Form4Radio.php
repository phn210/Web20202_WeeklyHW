<html>
    <head><title>Receiving Input</title></head>
    <body>
        <font size=5>Thank You: Got Your Input</font>
        <?php
            // 2.6 Post method
            /*$email = $_POST["email"];
            $contact = $_POST["contact"];*/
            // 2.7 Get method
            $email = $_GET["email"];
            $contact = $_GET["contact"];
            print ("<br>Your email address is $email");
            print ("<br> Contact preference is $contact");
        ?>
    </body>
</html>