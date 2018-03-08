<?php
//刪除面板資料夾
function delete_panel_file($path){
    if( is_dir($path) ){
      $handle = opendir($path); 
      while($file = readdir($handle)){ 
        if( $file != '.' && $file != '..' ){ 
          $file = "$path/$file"; 
          if( is_dir($file) ){ 
            rm_dir($file); 
          }else{ 
            unlink($file); 
          } 
        } 
      } 
      rmdir($path); 
    } 
  }