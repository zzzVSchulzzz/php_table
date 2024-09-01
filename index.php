<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title><?php echo "PHP Table"; ?></title>
      <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div class="container">
      <h2>Таблица истинности</h2>
      <table class="table">
        
        <thead>
          <tr>
            <?php
              // Массив заголовков
              $headers = ['A', 'B', '!A', 'A || B', 'A && B', 'A xor B'];
              // Заголовки таблицы
              foreach ($headers as $header) {
                echo "<th>$header</th>";
              }
            ?>
          </tr>
        </thead>

        <tbody>
          <?php
            $a = 0;
            $b = 0;
            // Цикл для всех комбинаций A и B (0 и 1)
            for ($a = 0; $a <= 1; $a++) {
                for ($b = 0; $b <= 1; $b++) {
                  // Не забываем использовать конкатенцию, чтобы все не профакать
                  echo '<tr>';
                  echo '<td>' . $a . '</td>';
                  echo '<td>' . $b . '</td>';
                  echo '<td>' . (!$a ? 1 : 0) . '</td>';
                  echo '<td>' . (($a || $b) ? 1 : 0) . '</td>';
                  echo '<td>' . (($a && $b) ? 1 : 0) . '</td>';
                  echo '<td>' . (($a xor $b) ? 1 : 0) . '</td>';
                  echo '</tr>';
                }
            }
          ?>
        </tbody>
          
      </table>

    </div>
    <div class="container">
      <h2>Таблица жесткого сравнения</h2>
      <table class="table firstColumn">
        <?php
          $values = [true, false, 1, 0, -1, "1", null, "php"];
          $labels = ['true', 'false', '1', '0', '-1', '"1"', 'null', '"php"'];

          // Выводим заголовок таблицы
          echo '<thead><tr><th></th>';
          foreach ($labels as $label) {
            echo "<th>$label</th>";
          }
          echo '</tr></thead>';

              // Выводим строки с сравнением
              echo '<tbody>';
          foreach ($values as $i => $rowValue) {
            echo '<tr><th>' . $labels[$i] . '</th>'; // Первая колонка
            foreach ($values as $colValue) {
              // Сравнение значений с использованием строгого равенства
              $result = ($rowValue === $colValue) ? 'true' : 'false';
              echo "<td>$result</td>";
            }
            echo '</tr>';
          }
          echo '</tbody>';
        ?>
      </table>

    </div>
    <div class="container">
      <h2>Таблица гибкого сравнения</h2>
      <table class="table firstColumn">
        <?php
          $values = [true, false, 1, 0, -1, "1", null, "php"];
          $labels = ['true', 'false', '1', '0', '-1', '"1"', 'null', '"php"'];

          // Выводим заголовок таблицы
          echo '<thead><tr><th></th>';
          foreach ($labels as $label) {
            echo "<th>$label</th>";
          }
          echo '</tr></thead>';

          // Выводим строки с сравнением
          echo '<tbody>';
          foreach ($values as $i => $rowValue) {
            echo '<tr><th>' . $labels[$i] . '</th>'; // Первая колонка
            foreach ($values as $colValue) {
              // Сравнение значений с использованием строгого равенства
              $result = ($rowValue == $colValue) ? 'true' : 'false';
              echo "<td>$result</td>";
            }
            echo '</tr>';
          }
          echo '</tbody>';
        ?>
      </table>

    </div>
  </body>
</html>
