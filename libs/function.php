<?php

function loadClass($c)
{
	include URL."classes/class.".$c.".php";
}


function getIndex($index, $value='')
{
	$data = isset($_GET[$index])? $_GET[$index]:$value;
	return $data;
}

function postIndex($index, $value='')
{
	$data = isset($_POST[$index])? $_POST[$index]:$value;
	return $data;
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}
function kiemtrauser($datanhap,$matkhau,$xnmatkhau,&$flag,&$kq)
{
	foreach ($datanhap as $key => $value) {
        if($value == "")
        {
         $kq.= "<br/> chưa nhập ".$key;
         $flag=false;
        }
    }
     if($matkhau!=$xnmatkhau)
    {
        $kq="mật khẩu nhập lại không khớp";
        $flag= false;
    }
}
function dangnhaptudong($a,$b,$c)
{
        $_SESSION['taikhoan']=$a;
        $_SESSION['maloaiuser']= $b;
        $_SESSION['matk']= $c;
}
function redirect($url)
{
    echo '<script> window.location.href = "'.$url.'";</script>';
}
function start()
{
    if(!isset($_GET['page']))
    {
      $start=0;
    }
    else $start= ($_GET['page']-1) *10;
    return $start;
}

