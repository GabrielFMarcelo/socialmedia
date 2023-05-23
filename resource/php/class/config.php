<?php

class config{
    private $user = 'bsit3567_g3';
    private $password = 'admin123';
    public $pdo = null;

    public function con(){
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=bsit3567_group3_socialmediabsit3567_', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
