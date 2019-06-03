<?php include("calculator_control.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <label>number1</label><br>
  <input type="text" name="number1" value=<?=$number1?>>
  <br>
  <label>number2</label><br>
  <input type="text" name="number2" value=<?=$number2?>>
  <br><br>
  <input type="submit" value="add" name="add">
  <input type="submit" value="subtract" name="subtract">
  <input type="submit" value="multipy" name="multiply">
  <input type="submit" value="divide" name="divide">
</form> 
<p>answer: <?=$answer?></p>
<p>history of calculation: <?=$history_of_calculation?></p>
</body>
</html>