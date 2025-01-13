<?php
    $employee_data = $_POST;
    $employee_name = $employee_data["employee_name"];
    $employee_age = $employee_data["employee_age"];
    $department = $employee_data["department"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題コンファーム</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border:1px solid black;
            margin-bottom: 15px;
        }

        th,td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table>
        <tr>
            <th>
                項目
            </th>
            <th>
                入力内容
            </th>
        </tr>
        <tr>
            <td>
                社員名
            </td>
            <td>
                <?php echo $employee_name; ?>
            </td>
        </tr>
        <tr>
            <td>
                年齢
            </td>
            <td>
                <?php echo $employee_age; ?>
            </td>
        </tr>
        <tr>
            <td>
                所属部署
            </td>
            <td>
                <?php echo $department; ?>
            </td>
        </tr>
    </table>
    <button type="button" onclick="location.href='complete.php';">確定</button>
    <button type="button" onclick="history.back();">キャンセル</button>
</body>
</html>