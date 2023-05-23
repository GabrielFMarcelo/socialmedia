<?php
require_once 'resource/php/class/config.php';
class insert extends config{
  public $status;

  public function __construct($status){
    $this->status = $status;
  }

  public function insertTask(){
    $con = $this->con();
    $sql = "INSERT INTO `tbl_status`(`item`)VALUES('$this->status')";
    $data = $con->prepare($sql);
    // var_dump($data);
    // die();
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
  
  public function insertMsg(){
    $con = $this->con();
    $sql = "INSERT INTO `tbl_chat`(`text`)VALUES('$this->status')";
    $data = $con->prepare($sql);
    // var_dump($data);
    // die();
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
