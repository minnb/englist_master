<?php

function print_result($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function path_storage($name)
{
  $path_server = 'upload/'.$name;
  $str = date("Ym");
  $path = $path_server.'/'.$str;
  if (!file_exists($path)) 
  {
    mkdir($path, 0777, true);
  }
  return $path;
}

function delete_image_no_path($img){
  if(File::exists($img)){
    File::delete($img);
  }
}

function randomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//use for array
function selectedOption($array, $select){
  foreach($array as $key=>$value){
    if($key == $select && $select != '' ){
        echo '<option value="'.$key.'" selected>'.$value.' </option>';
    }else{
        echo '<option value="'.$key.'">'.$value.'</option>';
    }
  }
}

function getUom(){
    $arr = [
      'month'=> 'Month',
      'year' => 'Year',
      'week' => 'Week'
    ];
    return $arr;
}