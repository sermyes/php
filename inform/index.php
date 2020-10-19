<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>환영합니다.</title>
    <style>
        html,body{
            margin: 0; padding: 0; height: 100%;
        }
        table{
            width: 800px; height: 600px;
            border: 1px solid #000;
            margin: 0 auto; text-align: center;
        }
        table thead td, table tfoot td{
            height: 150px; background-color: #999;
        }
        table tbody tr td:first-child{
            background-color: #ccc;
        }
        table td{
            border: 1px solid #000;
        }
        table tbody tr td:first-child{
            width: 60%;
        }
        table tbody tr td:last-child{
            vertical-align: top;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td colspan="2">header</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="2">footer</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>aside</td>
                <td><?php require("login_form.php")?></td>
            </tr>
        </tbody>
        
    </table>
</body>
</html>