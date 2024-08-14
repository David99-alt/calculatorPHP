<?php
if(isset($_POST['check'])) {
    //deciation of variables
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    //checking operator and perform operation

    if(empty($num1)) {
       echo "Error: Both numbers must be entered. ";
       exit;
    }

    // checking operator and perform operation
     
    if ($operator == '+') {
        echo $result = $num1 + $num2;}
    elseif ($operator == '-') {
            echo $result = $num1 - $num2;
        }
        elseif ($operator == '*') {
            echo $result = $num1 * $num2;
        }
        elseif ($operator == '/') {
            echo $result = $num1 * $num2;
        }
        
    }

    



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <form method="post"  class="container">
            <div class="inputcontainer">
                <label>first number</label>
                <input type="number" name="num1" placeholder="please enter number">
            </div>

            <div class="inputcontainer">
                <label>operators</label>
                <select name="operator">
                    <option>+</option>
                    <option>-</option>
                    <option>/</option>
                    <option>*</option>
                </select>

            </div>

            <div class="inputcontainer">
                <label>second Number</label>
                <input type="number" name="num2" placeholder="please enter number">
            </div>

            <div class="buttoncontainer">
                <input type="submit" value="calculate" name="check">
            </div>
        </form>
    </div>
</body>

</html>







</body>

</html>