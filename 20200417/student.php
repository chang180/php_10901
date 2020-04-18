<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生成績查詢</title>
    <style>
        form {
            display: block;
            width: 300px;
            height: 200px;
            border: 1px solid #999;
            box-shadow: 1px 1px 5px #ccc;
            
        }
    </style>
</head>

<body>
    <form action="score.php" method="get">
        <input type="number" name="num">
        <input type="submit" name="查詢成績">
    </form>

</body>

</html>