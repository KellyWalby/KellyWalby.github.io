<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>
<body>
 
<form>
    <input type="text" name = "num1" placeholder="Enter a number">
    <select name="Operator">
        <option>None</option>
        <option>Plus</option>
        <option>Minus</option>
        <option>Times</option>
        <option>Divided</option>
    </select>
    <input type="text" name = "num2" placeholder="Enter a number">
    <br>
    <br>
    <button style="background-color:DodgerBlue;" type="submit" name="submit" value="submit">Calculate</button>

</form>

<p> Answer:</p>
   
<?php
if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['Operator'];
    switch ($operator){
        case "None":
            echo "Please select an operator.";
        break;
        case "Plus":
            echo "Please select an operator.";
        break;
        case "Minus":
            echo "Please select an operator.";
        break;
        case "Times":
            echo "Please select an operator.";
        break;
        case "Divided":
            echo "Please select an operator.";
        break;

    }
}

?>

    


</body>






</html>