<!DOCTYPE html>

<html>
    <body>
        <?php

    $a = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
} 
myTest();

echo "<p>Variable x outside function is: $a</p>";
?>

</body>
</html>