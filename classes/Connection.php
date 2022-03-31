<?php
session_start();
class Connection{

    public function connection(){
        try {
            return new \PDO('mysql:host=localhost;dbname=login','root' ,'');
        } catch (\Exception $th) {
            //throw $th;
            throw new Exception("Error Processing Request: ". $th);
            
        }
        
    }
}