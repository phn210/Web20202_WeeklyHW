<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello, " . $_POST["userName"] . "<br/>";
        echo "You are " . $_POST["age"] . " years old<br/>"; 
        echo "Your e-mail is" . $_POST["email"] . "<br/>"; 
        echo "You are studying at " . $_POST["classes"] . ", " . $_POST["university"] . "<br/>";
        echo "Your Hobbies is:<br/>";
        $hobby1 = (isset($_POST["Hobby1"])==true) ? $_POST["Hobby1"]: null;
        $hobby2 = (isset($_POST["Hobby2"])==true) ? $_POST["Hobby2"]: null;
        $hobby3 = (isset($_POST["Hobby3"])==true) ? $_POST["Hobby3"]: null;
        $hobby4 = (isset($_POST["Hobby4"])==true) ? $_POST["Hobby4"]: null;
        $hobby5 = (isset($_POST["Hobby5"])==true) ? $_POST["Hobby5"]: null;
        $hobby6 = (isset($_POST["Hobby6"])==true) ? $_POST["Hobby6"]: null;
        
        $hobby = array($hobby1,$hobby2,$hobby3,$hobby4,$hobby5);
        $cnt = 0;
        for ($i=0; $i < count($hobby); $i++) {
            if($hobby[$i] == true) {
                $cnt++;
                echo $cnt . ". " . $hobby[$i] . "<br/>";
            } 
        }
        if ($hobby6 == true) {
            echo ++$cnt . ". " . $_POST["Hobby7"] . "<br/>";
        }
    ?>
</body>
</html>