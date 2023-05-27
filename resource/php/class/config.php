<?php

class config{
    private $user = 'bsit3567_g3';
    private $password = 'admin123';
    public $pdo = null;

    public function con(){
        try {
            $this->pdo = new PDO('mysql:local=109.106.254.194;dbname=bsit3567_group3_socialmedia', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
