<?php
    $result = "";
if(isset($_POST['add'])){
    $fnum = $_POST['fnum'];
    $snum = $_POST['snum'];
    echo $result = $fnum + $snum;

    if($result%2){
        echo " - is Odd";
    }else{
        echo " - is Even";
    }
}

if(isset($_POST['substract'])){
    $fnum = $_POST['fnum'];
    $snum = $_POST['snum'];
    echo $result = $fnum - $snum;

    if($result%2){
        echo " - is Odd";
    }else{
        echo " - is Even";
    }
}

if(isset($_POST['multiply'])){
    $fnum = $_POST['fnum'];
    $snum = $_POST['snum'];
    echo $result = $fnum * $snum;

    if($result%2){
        echo " - is Odd";
    }else{
        echo " - is Even";
    }
}

if(isset($_POST['division'])){
    $fnum = $_POST['fnum'];
    $snum = $_POST['snum'];
    echo $result = $fnum / $snum;

    if($result%2){
        echo " - is Odd";
    }else{
        echo " - is Even";
    }
}
?>