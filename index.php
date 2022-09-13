<?php
include "TCPDF-main/tcpdf.php";
$tcpdf = new TCPDF("P", "mm", "A4", true, "UTF-8", false, false);
$tcpdf -> AddPage();
$tcpdf -> SetFont("kozgopromedium", "B", 10);

$html = <<< EOF
<style>
*{
    font-size: 20px;
}

body {
    height: 100%
    width: 100%;
}

h1 {
    font-size: 30px;
    color: 38653d;
}

tabel {
    table-layout: fixed;
    width: 100%;
}

tr {
    line-height: 3;
}

th {
    width: 20%
}

td {
    width: 80%;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>自己紹介</h1>

    <table>
        <tr>
            <th>名前</th>
            <td>
                {$_POST["name"]}
            </td>
        </tr>

        <tr>
            <th>性別</th>
            <td>
                {$_POST["jender"]}
            </td>
        </tr>

        <tr>
            <th>生年月日</th>
            <td>
                {$_POST["year"]}年
                {$_POST["month"]}月
                {$_POST["day"]}日
            </td>
        </tr>

        <tr>
            <th>年齢</th>
            <td>
                {$_POST["age"]}
            </td>
        </tr>

        <tr>
            <th>出身</th>
            <td>
                {$_POST["pref"]}
            </td>
        </tr>

        <tr>
            <th>仕事</th>
            <td>
                {$_POST["job"]}
            </td>
        </tr>

        <tr>
            <th>趣味</th>
            <td>
                {$_POST["hobby1"]}
                {$_POST["hobby2"]}
                {$_POST["hobby3"]}
            </td>
        </tr>

        <tr>
            <th>その他</th>
            <td>
                {$_POST["ather"]}
            </td>
        </tr>

    </table>
    


</body>
</html>

EOF;

$tcpdf -> writeHTML($html);
$tcpdf -> Output("user.pdf", "I");
?>