<?php
include_once './blaster_load.php';
abstract class File extends Fileenv
{
    public $file_contents;
    abstract public function set_textfile_path($textfile_path);
    abstract public function read_file();
    abstract public function disply_file();
}

class Handelfile extends File
{

  public function set_textfile_path($textfile_path){
    parent::$TEXT_FILE = $textfile_path;
  }

    public function read_file()
    {
        if (file_exists(parent::$TEXT_FILE)) {
            $handle_file = fopen(parent::$TEXT_FILE, "r");
            $contents = fread($handle_file, filesize(parent::$TEXT_FILE));
            $this->file_contents = $contents;
            fclose($handle_file);
         } //else {
        //     echo "Blaster: Oops File does not exist.<br> or wrong file format <br><br>";
        // }
    }
    public function disply_file()
    {
        if (isset($this->file_contents)) {
            return $this->file_contents;
        } else {
            return "Blaster: Oops somthing went wrong";
        }
    }
}

class Front extends Handelfile {
    public $content;
    public function __construct()
    {
        $this->content = parent::read_file();
    }
    public function show()
    {
        echo parent::disply_file();
    }
}
