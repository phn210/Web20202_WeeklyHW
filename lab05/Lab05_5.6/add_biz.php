<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration</title>
    <style>
        .content {
            float:left;
            margin: 0px 20px 50px;
        }
        tr {
            margin-bottom: 5px;
        }
        p {
            display: inline-block;
            width: 100px;
        }
        .input-content {
            width: 900px;
            margin-left: 10px;
        }
        .scroll {
            width: 200px;
            height: 100px;
            overflow: auto;
        }
        .title {
            display: block;
        }
        .title:link {
            text-decoration: none;
        }
        .submit {
            position: fixed;
            top: 350px;
            left: 50px;
        }
    </style>
</head>
<body>
    <h1>Business Registration</h1>
    <form action="" method="POST">
        <div class="content">
        <table>
            <tr>
                <th style="width:200px;">Clicks on one, or control-click on mutiple categories</th>
            </tr>
            <tr>
                <td>
                    <div class="scroll">
                        <a href="" class = "title">Automative Parts and Supplies</a>
                        <a href="" class = "title">Seafood Stores and Restaurants</a>
                        <a href="" class = "title">Health and Beauty</a>
                        <a href="" class = "title">School and Colleges</a>
                        <a href="" class = "title">Comunity Sports and Recreations</a>
                    </div>
                </td>
            </tr>
        </table>
        </div>
        <div class="content">
        </table>
            <tr>
                <div class="form-content">
                    <p>Business name:</p>
                    <input type="text" name="userName"  class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Address:</p>
                    <input type="text" name="userName" class="input-content">
                </div>
            </tr>
            <tr>   
                <div class="form-content">
                    <p>City:</p>
                    <input type="text" name="userName" class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Telephone:</p>
                    <input type="text" name="userName" class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>URL:</p>
                    <input type="text" name="userName" class="input-content">
                </div>
            </tr>
            </div>
        </table>
        </div>
    <div class="submit">
        <button type="submit" class="submit-btn">Add business</button>
    </div>
    </form>
</body>
</html>