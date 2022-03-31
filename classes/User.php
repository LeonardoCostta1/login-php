<?php

class User extends Connection
{

    public function login($email, $senha)
    {

        $sql = 'SELECT * FROM user WHERE email = :email AND senha = :senha';
        $sql =  $this->connection()->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $_SESSION['id'] = $dados['id'];
            return true;
        } else {
            return false;
        }
    }

    public function logged($id)
    {
        $array = array();
        $sql = 'SELECT email FROM user WHERE id = :id';
        $sql = $this->connection()->prepare($sql);
        $sql->bindValue('id', $id);

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
}
