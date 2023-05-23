<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        //View Data for Update Status
        public function viewData(){
          $con = $this->con();
          $sql = "SELECT * FROM `tbl_status` WHERE `status` = 'POSTED'";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data->fetchAll(PDO::FETCH_ASSOC);
          echo "<h3 class='mb-4 p-2'> Update Status </h3>";
                foreach ($result as $data) {
                    echo "<div class = jumbotron bg-muted status-add>";
                    echo "$data[item]";
                    echo "<a class='text-decoration-none d-inline dt-btn' href='template.php?delete=$data[id]'> Delete Task </a>";
                    echo "</div>";
                    echo "<br/>";
                }
        }

        //View Data for Update Chat
        public function viewChat(){
          $con = $this->con();
          $sql = "SELECT * FROM `tbl_chat` WHERE `status` = 'SEEN'";
          $data = $con->prepare($sql);
          $data->execute();
          $result = $data->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $data) {
                    echo "<p class='small p-2 ms-3 mb-1 rounded-3' style='background-color: #DBE3E5;'>";
                    echo "$data[text]";
                    echo "<br/>";
                }
        }
}
?>
