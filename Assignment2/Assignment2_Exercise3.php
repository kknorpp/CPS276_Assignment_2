<?php
$columns = 5;
$rows = 15;
function tableFunction()
{
    $columns = 5;
    $rows = 15;
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columns; $j++) {
            echo '<td>';
            echo "Row $i Cell $j" ;
            echo '</head></td>';
        }
        echo '</tr>';
    }
}


?>

<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <table align="left" border='1'>
        <?php echo tableFunction(); ?>
    </table>
</body>

</html>