<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Administration</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            width: 200px;
        }
        .submit-btn {
            margin-top: 5px;
        }
        .input-text {
            width: 200px;
            border: none;
        }
    </style>
</head>
<body>
    <h1>Category Administration</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <th>CatID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><input type="text" class="input-text" name="CatID"></td>
                <td><input type="text" class="input-text" name="Title"></td>
                <td><input type="text" class="input-text" name="Description"></td>
            </tr>
        </table>
        <button type="submit" class="submit-btn">Add category</button>
    </form>
</body>
</html>