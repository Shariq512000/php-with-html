<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operate">
            <option value="sum">Sum (+)</option>
            <option value="sub">Sub (-)</option>
            <option value="mul">Multi (x)</option>
            <option value="div">Divide (/)</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p>
        <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operate = $_POST['operate'];
            switch($operate){
                case "sum" : $sum = $num1 + $num2;
                            echo "The sum of {$num1} & {$num2} is {$sum}";
                            break;
                case "sub" : $sub = $num1 - $num2;
                            echo "The sub of {$num1} & {$num2} is {$sub}";
                            break;
                case "mul" : $mul = $num1 * $num2;
                            echo "The multi of {$num1} & {$num2} is {$mul}";
                            break;
                case "div" : $div = $num1 / $num2;
                            echo "The division of {$num1} & {$num2} is {$div}";
                            break;
                default : echo 'Please Select One Operator';
            }
            // echo $firstName . $lastName;
        }
        ?>
    </p>
</body>
</html>