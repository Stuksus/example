

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Библиотека</h1>
<table border="1">
    <tr>
        <td>
            Название
        </td>
        <td>
            Автор
        </td>
        <td>
            Дата
        </td>
        <td>
            Жанр
        </td>
    </tr>
    <?php


    $bd = mysqli_connect("university.netology.ru", "smetanin", "neto1247", "global");
    $res = "select * from books";
    $sql = mysqli_query($bd, $res);


    while ($data = mysqli_fetch_array($sql)):
        echo
        "<tr><td>",$data['name'],
        "</td><td>",$data['author'],
        "</td><td>",$data['year'],
        "</td><td>",$data['isbn'],
        "</td><td>",$data['genre'],
        "</td></tr>"
        ;
    endwhile;
    ?>
</table>
</body>
</html>

