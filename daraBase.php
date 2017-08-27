
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
            ISBN
        </td>
        <td>
            Жанр
        </td>
    </tr>
    <?php
    header( 'Content-Type: text/html; charset=utf-8' );
    $bd = mysqli_connect("localhost", "rooting", "123123", "firstDataBase");
    mysqli_set_charset($bd,'utf8');
    $res = "select * from books";
    $sql = mysqli_query($bd, $res);
    $kol = mysqli_num_rows($sql);

   while ($data = mysqli_fetch_array($sql)):
    echo
        "<tr><td>",$data['name'],
        "</td><td>",$data['author'],
        "</td><td>",$data['year'],
        "</td><td>",$data['isbn'],
    "</td><td>",$data['genre'],
        "</td></tr>"
        ;
   endwhile; ?>
</table>
</body>
</html>
