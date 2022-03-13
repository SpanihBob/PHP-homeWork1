<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWork 1</title>
</head>
<body>
    <!-- Разработать скрипт, который будет разбивать число на цифры, считать их количество, 
    находить самую большую, самую маленькую цифру в числе, считать сумму цифр, 
    среднее значение. -->
    <?php
        $enteredNumber = 5493256;                       //5493256
        echo ("<h1>Number is: " .$enteredNumber. "</h1>");
        $changedString = str_split($enteredNumber);   //[5,4,9,3,2,5,6]
        $lineAgain = implode(",", $changedString);      //5,4,9,3,2,5,6
        echo "<h2>Digits inthe number: " .$lineAgain. "</h2>";
        echo "<p>Count of digits: <b>" .strlen($enteredNumber). "</b>"; //длинна строки
        echo ", Max: <b>" . max($changedString). "</b>";                //максимум массива
        echo ", Min: <b>" . min($changedString). "</b>";                //минимум массива
        echo ", Summ: <b>" . array_sum($changedString). "</b>";         //сумма всех элементов массива
        $summ = array_sum($changedString);
        $length = strlen($enteredNumber);
        echo ", Avg: <b>" . round(($summ/$length), 3, PHP_ROUND_HALF_DOWN) . "</b></p>";         //сумма всех элементов массива
    ?>
</body>
</html>
