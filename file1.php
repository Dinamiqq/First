
<html>
<head>
  <title>PHP</title>
</head>
<body>
  <h1 align="center" style="color:#ff0000; font-size:30px">Основы PHP</h1>
  <p><b>Здесь отображаются только выводы, все операции происходят в коде</b></p>
  <h2><i>Переменные и их вывод</i></h2>
    <?php
    $Number = 10;
    $float = 2.5;
    $string = 'Hello World';
    $bool = true;
    $x = 20;
    $y = 6;
      define('PI', 3.14);// Это константа 
      echo "Это скрипт PHP<br />"; //Тестовая строчка
      echo "Это скрипт PHP<br />"; //<br /> это перенос на след. строку 
      echo "Он хочет сказать  $string<br />";
      echo "И это = $bool<br />";
      echo PHP_VERSION;
      echo "<br />";
      echo PI;
      echo "<br />";
      echo defined('PI'); // Это проверка на наличе константы 
      echo "<br />";
    ?>
  <h2><i>Арифметика</i></h2>
    <?php
    $summ = $x + $y;
    $diff = $x - $y;
    $mult = $x * $y;
    $dil = $x / $y;
    $ostatok = $x % $y; // Остаток от деления
      echo "Сумма из $x и $y = $summ<br />";
      echo "Разница из $x и $y = $diff<br />";
      echo "Умножение из $x и $y = $mult<br />";
      echo "Деление из $x и $y = $dil<br />";
      echo "Остаток от $x и $y = $ostatok<br />";
    ?>
  <h2><i>Строковые операции</i></h2>
    <?php
    $str_1 = "Первая строчка";
    $str_2 = "Вторая строчка";
      echo $str_1."<br />".$str_2; // Точка выводит сразу две строки(объединяет их)

    ?>
    <!--<table border="1" cellspacing="2" cellpadding="1"><tr><td><?php echo $str_1; ?></td><td><?php echo $str_2; ?></td></tr></table> -->
  <h2><i>Логические операции</i></h2>
  <p>Если значение false то php ничего не выводит<br />Пример:</p>
    <?php
    $x = 12;
    $y = 12;
    $z = 4.25;
    $bool_1 = $x == $y; 
    $bool_2 = $x < $z; 
    $bool_3 = $x >= $y;
    $bool_4 = $x > $z;
      echo $bool_1."<br />".$bool_2."<br />".$bool_3."<br />".$bool_4
    ?>
  <h2><i>Условные операторы</i></h2>
    <?php
    $x_1 = 10;
    $y_1 = 5;
      if ($x_1 > $y_1) {
        echo "Да, это правда";
      }
      else echo "Нет, это ложь";
    ?>  
    <p><b>Оператор Switch</b></p>
    <?php
     $s = 999;
      switch ($s) {
       case 'Hello':
         echo "Это по английский";
         break;
       case 'Привет':
         echo "А это по русский";
         break;
       case '123':
         echo "Тут показывает цифры";
         break;
       default:
         echo "А это мы не знаем";
         break;
     }

    ?>
  <h2><i>Циклы For, While и Do While</i></h2>
    <?php
      for ($i=0; $i < 10 ; $i++) { 
        echo "Цикл под номером $i<br />";
      }
        echo "<br />";

    $w=1;// В этом случае мы можем проводить любые операции, так же работают if , continue , break
      while ($w <= 10) { 
        echo "Итерация под номером $w<br />";
        $w++;
      }
    ?>
  <h2><i>Функции</i></h2>
    <?php
    function printWords($word) {//функция которая просто выводит
      echo $word;
    }

    function math($first , $second) {//функция которая считает 
      $summa = $first + $second;
      return $summa; //Возвращаем результат в $sum
    }


    $f = 24;
    $f_1 = 47;
    $sum = math ($f , $f_1);
      printWords($sum);
    ?>
  <h2><i>Массивы элементов</i></h2>
    <?php
    $array = array(12, 3.25, "string", true);
      echo $array[1];
    $array [1] = 25.5;// Замена значения в массиве
      echo "<br />".$array[1];
    $array[] = "New Element";// Добавили новый элемент
      echo "<br />".$array[4]."<hr />";
    for ($i=0; $i < count($array); $i++) { //Выводим элементы массива, count ограничивает цикл по кол-ву элементов массива
      echo "Элемент массива с индексом $i = ".$array[$i]."<br />";
    }
    $list = array("age" => 12, "name" => "Alex", "schoolBoy" => true); //Ключи и значения, цикл for не работает
    $list ["age"] = 10;

    $summa = 0;

      echo "<hr />".getAverage (array("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));

    function getAverage ($array) {
      foreach ($array as $key => $value) {//данная функция работает только для такого массива
        $summa += $value;
      }
      return $summa / count ($array);
    }
    ?>
  <h2><i>Область видимости переменных</i></h2>
    <?php

    ?>
</body>
</html>
