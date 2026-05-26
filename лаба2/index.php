<?php

$student_name = "Абызов Дмитрий Сергеевич";   
$group = "241-352";                        
$lab_number = 2;                          
$variant = 1;                            

$start_value = 15;   
$count = 5;          
$step = 2;         

$stop_min = -200;     
$stop_max = 10000;     

$type = 'D';         
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №<?php echo $lab_number; ?> – <?php echo $student_name; ?>, <?php echo $group; ?>, вариант <?php echo $variant; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
   
    <img src='fot/logo.png' width='70'>
    <div class="student-info">
        <p>Студент: <?php echo $student_name; ?></p>
        <p>Группа: <?php echo $group; ?></p>
        <p>Лабораторная работа №<?php echo $lab_number; ?>, вариант <?php echo $variant; ?></p>
    </div>
</header>

<main>
    <?php

    $valid_values = array();


    echo "<h2>Табуляция функции f(x) вариант $variant </h2>";
    echo "<p>Параметры: x0 = $start_value, количество = $count, шаг = $step, пределы остановки: [$stop_min, $stop_max]</p>";
    if ($type == 'A') {
        echo "<div class='result-type-a'>";
    } elseif ($type == 'B') {
        echo "<ul>";
    } elseif ($type == 'C') {
        echo "<ol>";
    } elseif ($type == 'D') {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>№</th><th>x</th><th>f(x)</th></tr>";
    } elseif ($type == 'E') {
        echo "<div class='result-blocks'>";
    }


    $counter = 0;

    for ($i = 0; $i < $count; $i++) {
        $x = $start_value + $i * $step;

        $error = false;  
        $f = null;       

        if ($x <= 10) {
            $f = 10 * $x - 5;
        } elseif ($x > 10 && $x < 20) {
            $f = ($x + 3) * $x * $x;
        } else { 
            if ($x == 25) {
                $error = true;   
            } else {
                $f = 3 / ($x - 25) + 2;
            }
        }


        if ($error==False) {
            if ($f < $stop_min || $f > $stop_max) {

                break;
            }
        }

        $output_value = "";   
        if ($error==True) {
            $output_value = "error";
        } else {
            $rounded_f = round($f, 3);
            $output_value = $rounded_f;
            $valid_values[] = $rounded_f;
        }

        $counter++;   

        if ($type == 'A') {
            echo "f($x) = $output_value<br>";
        } elseif ($type == 'B') {
            echo "<li>f($x) = $output_value</li>";
        } elseif ($type == 'C') {
            echo "<li>f($x) = $output_value</li>";
        } elseif ($type == 'D') {
            echo "<tr><td>$counter</td><td>$x</td><td>$output_value</td></tr>";
        } elseif ($type == 'E') {
            echo "<div class='result-block'>f($x) = $output_value</div>";
        }
    }

    if ($type == 'A') {
        echo "</div>";
    } elseif ($type == 'B') {
        echo "</ul>";
    } elseif ($type == 'C') {
        echo "</ol>";
    } elseif ($type == 'D') {
        echo "</table>";
    } elseif ($type == 'E') {
        echo "</div>";
    }

    
    $max_val = null;
    $min_val = null;
    $sum_val = 0;
    $count_valid = count($valid_values);   

    if ($count_valid > 0) {
        $max_val = max($valid_values);         
        $min_val = min($valid_values);        
        $sum_val = array_sum($valid_values);    
        $avg_val = $sum_val / $count_valid;     

        $max_val = round($max_val, 3);
        $min_val = round($min_val, 3);
        $sum_val = round($sum_val, 3);
        $avg_val = round($avg_val, 3);
    } else {
        $max_val = "нет данных";
        $min_val = "нет данных";
        $sum_val = "нет данных";
        $avg_val = "нет данных";
    }

    echo "<div class='statistics'>";
    echo "<h3>Статистика по значениям функции</h3>";
    echo "<p>Максимум: $max_val</p>";
    echo "<p>Минимум: $min_val</p>";
    echo "<p>Сумма: $sum_val</p>";
    echo "<p>Среднее арифметическое: $avg_val</p>";
    echo "</div>";
    ?>
</main>

<footer>
    <p>Тип верстки: <?php echo $type; ?></p>
    <p>&copy; <?php echo date("Y"); ?> – Лабораторная работа №<?php echo $lab_number; ?></p>
</footer>

</body>
</html>