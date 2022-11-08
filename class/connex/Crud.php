<?php
class Crud extends PDO
{

    public function __construct()
    {
        parent::__construct('mysql: host = localhost; dbname = e2295517; charset=utf8', 'zlmFVv9gZgSwOj2RsEkc', 'e2295517');
    }


    public function select($table, $field = 'id', $order = 'ASC')
    {
        // $user_id = USER_ID;
        $sql = "SELECT * FROM time_manager.$table  ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $value,  $field = 'id', $url = 'client-index.php')
    {
        $sql = "SELECT * FROM time_manager.$table WHERE $field = $value";
        $stmt = $this->query($sql);
        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            die("error");
            header("Location : $url");
        }
    }

    public function insert($table, $data)
    {

        $nomChamp = implode(",", array_keys($data));

        $valeurChamp = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO time_manager.$table ($nomChamp) VALUES ($valeurChamp)";
        // print_r($sql);
        // var_dump($sql);
        // die();
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        // print_r( $stmt);
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            return $this->lastInsertId();
        }

        return $this->lastInsertId();
    }

    public function update($table, $data, $id, $champId = 'id')
    {
        $champRequette = null;
        foreach ($data as $key => $value) {
            $champRequette .= "$key = :$key, ";
        }
        $champRequette = rtrim($champRequette, ", ");
        $sql = "UPDATE time_manager.$table SET $champRequette WHERE $champId = :$champId";
        // var_dump($sql);
        // die();

        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        // print_r( $stmt);
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }



    public function delete($table, $data, $id, $champId = 'id')
    {
        $champRequette = null;
        foreach ($data as $key => $value) {
            $champRequette .= "$key = :$key, ";
        }
        $champRequette = rtrim($champRequette, ", ");
        $sql = "DELETE FROM time_manager.$table WHERE $champId = :$champId";


        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }


        // print_r( $stmt);
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
