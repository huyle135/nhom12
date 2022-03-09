<?php
$o= new PDO('mysql:host=localhost;dbname=book','root','');
$o->query('set names utf8');
$sql="select * from book";
$stm=$o->query($sql);
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);