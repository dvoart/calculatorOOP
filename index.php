<?php 

declare(strict_types = 1);
include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
  <form action="includes/calc.inc.php" method="post">
    <p>My OOP calculator</p>
    <input type="number" name="num1" placeholder="first number">
    <select name="oper">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="div">Divide</option>
        <option value="mul">Multiply</option>
    </select>
    <input type="number" name="num2" placeholder="second number">
    <button type="submit" name="submit">Calculate</button>
  </form>
</body>
</html>