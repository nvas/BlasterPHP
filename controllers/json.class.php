<?php
#include './config/json.env.php';
include_once './blaster_load.php';

abstract class Json extends Envjson {

  public $json_content;
  public $json_url_data;

  abstract public function set_json_path($path);
  abstract public function set_json_url($url);

  abstract public function read_json_from_file();
  abstract public function fetch_json_from_url();

  abstract public function handel_json_from_file();
  abstract public function handel_json_from_url();

  abstract public function show_json_from_file();
  abstract public function show_json_from_url();

}

class Readjson extends Json {

  public function set_json_path($path){
    parent::$JSON_PATH = $path;
  }

  public function set_json_url($url){
    parent::$JSON_URL = $url;
  }

  public function read_json_from_file(){
    if(file_exists(parent::$JSON_PATH)){
      $json_file = file_get_contents(parent::$JSON_PATH);
      $decoded_json = json_decode($json_file, true);
      $this->json_content = $decoded_json;
          }else{
      echo 'cant open file';
    }
  }

  public function fetch_json_from_url(){
      $json_url = file_get_contents(parent::$JSON_URL);
      $decoded_json = json_decode($json_url, true);
      $this->json_url_data = $decoded_json;
  }

  public function handel_json_from_file(){
    $data = $this->json_content;
    return $data;
  }

  public function handel_json_from_url(){
    $url_data = $this->json_url_data;
    return $url_data;
  }

  public function show_json_from_file(){
    foreach ($this->json_content as $content) {
      foreach ($content as $key => $value)
      {
        echo  $key . " => " . $value . "<br>";
      }
    }
  }

  public function show_json_from_url(){
    foreach ($this->json_url_data as $content) {
      foreach ($content as $key => $value)
      {
        echo  $key . " => " . $value . "<br>";
      }
    }
  }

}
