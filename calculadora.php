<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <h1>Calculadora fullstack!</h1>
    <form action="calculadora.php" method="post">    
        <label>Numero 1</label>
        <input type="text" name="numero1" id="numero1"></input>

        <label>Numero 2</label>
        <input type="text" name="numero2" id="numero2"></input>

        <input type="submit" value="Calcular">
         </form>
    <hr/>
    <p>resultado da operação </p>

    <?php
    if (empty($_POST["numero1"]))
        $numero1 = numero1
        $numero2 = numero2
    ?>

</body>
</html>