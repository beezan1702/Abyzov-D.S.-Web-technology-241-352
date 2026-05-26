<?php

function geTR($rowString, $colsCount) {
    $trimmed = trim($rowString);
    if ($trimmed === '') {
        return false;
    }

    $cells = explode('*', $rowString);
    $cellCount = count($cells);

    $html = "<tr>\n";

    for ($i = 0; $i < $colsCount; $i++) {
        $cellValue = ($i < $cellCount) ? $cells[$i] : '';
        $cellValue = htmlspecialchars($cellValue);
        if ($cellValue === '') {
            $cellValue = '&nbsp;';
        }
        $html .= "<td>$cellValue</td>\n";
    }

    $html .= "</tr>\n";
    return $html;
}

function renderTable($tableStruct, $tableNumber, $colsCount) {
    $trimmedStruct = trim($tableStruct);
    $rows = explode('#', $trimmedStruct);

    $nonEmptyRows = array_filter($rows, function($row) {
        return trim($row) !== '';
    });


    if (count($nonEmptyRows) === 0) {
        return "<h2>Таблица №$tableNumber</h2>\n<p>В таблице нет строк.</p>\n";
    }

    $tableRowsHtml = '';
    $hasAnyCellRow = false; 

    foreach ($rows as $row) {
        $rowHtml = geTR($row, $colsCount);
        if ($rowHtml !== false) {
            $tableRowsHtml .= $rowHtml;
            $hasAnyCellRow = true;
        }
    }

    if (!$hasAnyCellRow) {
        return "<h2>Таблица №$tableNumber</h2>\n<p>В таблице нет строк с ячейками.</p>\n";
    }

    $html = "<h2>Таблица №$tableNumber</h2>\n";
    $html .= "<table class='lab-table'>\n";
    $html .= $tableRowsHtml;
    $html .= "</table>\n";
    return $html;
}

$colsCount = 3;

$tableStructures = [
    "первая*таблица*из*трёх*колонок#Строка2ячейка1*Строка2_яч2*Строка2ячейка3#Последняя*строка*три*ячейки",
    "Строка1*один*два*три#Строка2#Третья*строка*с*несколькими*ячейками#",
    "Больше*колонок*чем*нужно*раз*два*три#Игнорируем*лишние*колонки#Ещё*одна*строка",
    "Меньше*колонок#Второй*строки*нет#Добавим*пустые*ячейки",
    "Пустая*строка*между#   #Строка*с*ячейками*после пустой",
    "##Строка*после*двух*разделителей#",
    "Обычная*таблица*три#Вторая*строка*три#Третья*тоже*три",
    "",
    "есть*нет*да  8 # 0  #  1*1 ",
    "Одна*строка*всё*включено",
    "Спец*символы*<>&\"#Вторая*строка*тоже",
    "Лишние*колонки*будут*обрезаны#Эта*строка*короткая",
    "Пустая*внутри* #*и*звёздочки*подряд#Нормальная*строка",
];

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №4 — Таблицы на PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <header class="page-header">
            <img src="fot/logo.png" width=60 . logo>
            <div class="student-info">
                <p>ФИО: Абызов Дмитрий Сергеевич</p>
                <p>Группа: 241-352</p>
                <p>Лабораторная работа №4</p>
            </div>
        </header>

        <main class="page-main">
            <?php

            if ($colsCount == 0) {
                echo "<p class='error-message'>Ошибка, таблицы не могут быть выведены.</p>";
            } else {
                $tableCounter = 1; 
                foreach ($tableStructures as $structure) {
                    $output = renderTable($structure, $tableCounter, $colsCount);
                    echo $output;
                    $tableCounter++; 
                }
            }
            ?>
        </main>
        <footer class="page-footer">
            <p>&copy; 2025, Абызов Д.С.</p>
        </footer>
    </div>
</body>
</html>