<?php
//可根據指定資料類型來過濾變數
function my_filter($var, $type = "int")
{
    switch ($type) {
        case 'string':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES) : '';
            break;
        case 'url':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_URL) : '';
            break;
        case 'email':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_EMAIL) : '';
            break;
        case 'int':
        default:
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_NUMBER_INT) : '';
            break;
    }

    return $var;
}

//取得使用者照片
function get_user_pic($user_sn = '', $type = "")
{
  $filename = "uploads/{$type}/{$user_sn}.png";
  if (file_exists($filename)) {
      return $filename;
  } else {
      $size = ($type == 'thumbs') ? "300x200" : "600x400";
      return "http://dummyimage.com/{$size}/000000/ffffff.gif&text=此人無照上路";
  }
}

//取得面板圖片
function get_panel_pic($panel_sn = '', $type = '')
{
    $filename = "uploads/{$type}/{$panel_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "300x200" : "600x400";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=面板無照片";
    }
}

//取得單元圖片
function get_goods_pic($goods_sn = '', $panel_sn = "",  $type = "")
{
    $filename = "uploads/{$type}/{$panel_sn}/{$goods_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "300x200" : "600x400";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無商品照片";
    }
}

//取得商品圖片
function get_act_pic($act_sn = '', $type = "")
{
    $filename = "uploads/{$type}/{$act_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "300x200" : "600x400";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=公告無照片";
    }
}