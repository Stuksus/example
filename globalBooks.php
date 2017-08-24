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