<?php

    echo 'hy';?>
<br/>
<?php
    $a='123.5opa';
    $b=123;
    $c=123.5;
    $d=true;
    $t=1;
define('NAME', 'Вася');
var_dump($a,$b,$c,$d,NAME);
?>
<br/>
<?php echo $a ?>
    <br/>
<?php echo $b ?>
    <br/>
<?php echo $c ?>
    <br/>
<?php echo $d ?>
    <br/>
<?php echo NAME ?>
    <p/>

<?php echo "$a" ?>
<br/>
<?php echo "$b" ?>
<br/>
<?php echo "$c" ?>
<br/>
<?php echo "$d" ?>
<br/>
<?php echo "NAME" ?>
<p/>

<?php echo '$a' ?>
<br/>
<?php echo '$b' ?>
<br/>
<?php echo '$c'?>
<br/>
<?php echo '$d'?>
<br/>
<?php echo 'NAME' ?>
<p/>


<?php
$aa = '«Славная осень! Здоровый, ядреный';
$ab = 'Воздух усталые силы бодрит;';
$ac = 'Лед неокрепший на речке студеной';
$ad = 'Словно как тающий сахар лежит.»';

?>

<p>
    <?php echo $aa.'<br/>';
    echo $ab.'<br/>';
    echo $ac.'<br/>';
    echo $ad.'<br/>'; ?>
    <br/>
    <u>Н. А. Некрасов</u>
<p/>

    <?php echo $aa.'<br/>', $ab.'<br/>', $ac.'<br/>', $ad.'<br/>';
