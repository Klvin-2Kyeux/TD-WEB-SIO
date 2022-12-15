<form method="post">
  <input type="text" name="num1" placeholder="Entrer le premier nombre">
  <input type="text" name="num2" placeholder="Entrer le deuxième nombre">
  <select name="operator">
    <option>Additionner</option>
    <option>Soustraire</option>
    <option>Multiplier</option>
    <option>Diviser</option>
  </select>
  <br>
  <button type="submit" name="submit" value="submit">Calculer</button>
</form>

<?php
  if (isset($_POST['submit'])) {
    $result1 = $_POST['num1'];
    $result2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
      case "Additionner":
        echo $result1 + $result2;
        break;
      case "Soustraire":
        echo $result1 - $result2;
        break;
      case "Multiplier":
        echo $result1 * $result2;
        break;
      case "Diviser":
        echo $result1 / $result2;
        break;
    }
  }
?>