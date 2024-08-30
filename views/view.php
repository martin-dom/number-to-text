<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .wrapper{
            width: 600px;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Write number</h1>
        <h3>Less then 9 * 10<sup>18</sup></h3>
        <form action="#" method="post">
            <input type="number" id="number" name="number" required><br><br>
            <input type="submit" value="send">
        </form>
        <p><?php echo $num?></p>
        <p><?php echo changeToText($data, $isNegative)?></p>
    </div>
</body>
</html>