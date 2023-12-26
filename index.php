<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ตารางสูตรคูณ</title>
    <style>
        table {
            background-color: #fafafa;
            border: 1px solid #ccc;
            width: 450px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: center;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 5px;
        }
        th {
            background-color: #eee;
            color: #333;
        }
        td {
            color: #666;
        }
        .even {
            background-color: #f9f9f9;
        }
        .overflow-scroll {
            overflow-y: scroll;
            height: 300px;
        }
        .table-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
    <div class="table-title">
        ตารางสูตรคูณแม่ 2
    </div>
    <div class="overflow-scroll">
        <table>
            <tbody>
                <?php
                $multi_x = 2; 
                for ($i = 1; $i <= 24; $i++) {
                    $result = $i * $multi_x; 
                    $class = ($i % 2 == 0) ? "even" : "";
                    echo "<tr class='$class'>
                    <td>$multi_x</td>
                    <td>x</td>
                    <td>$i</td>
                    <td>=</td>
                    <td>$result</td>

                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
