<?php

namespace Crud\Book;

use PDO;

class Book
{
    public $conn = null;
    public $title;
    public $price;
    public $author;
    public $id;

    /*database host username pass dtabasename start declearing*/
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $dbname = "crud";

    /*the end*/


    public function __construct()
    {
        session_start();
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->pass);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $exception) {
            echo "connection error" . $exception->getMessage();
        }
    }


    public function setData($data)
    {
        if (array_key_exists('title', $data) && !empty($data['title'])) {
            $this->title = $data['title'];
        }
        if (array_key_exists('price', $data)&& !empty($data['price'])){
            $this->price=$data['price'];
        }
        if (array_key_exists('author',$data)&&!empty($data['author'])){
            $this->author=$data['author'];
    }
        if (array_key_exists('id', $data) && !empty($data['id'])) {
            $this->id = $data['id'];
        }
    }

    /*this is the end of store method*/


    public function storeData()
    {
        $sql = "INSERT INTO books( `title`,`price`, `author`) values('$this->title','$this->price','$this->author')";
        $this->conn->exec($sql);
        $_SESSION['message'] = "New record created successfully";
        header('location: index.php');
    }

    /*this is the end of index method*/


    /*method index*/
    public function indexData()
    {
        $sql = "SELECT * FROM `books` WHERE `is_del`=0";
        $statement = $this->conn->query($sql);
        $data = $statement->fetchAll();
        return $data;

    }

    /*this the end of setdatamethod*/


    public function deleteData()
    {
        $sql = "UPDATE `books` SET `is_del`=1 WHERE is_del=0 AND id='$this->id'";
        $this->conn->exec($sql);
$_SESSION['massage']="Deleted successfully";
header('location:index.php');
    }

    /*this the end of delete method*/


    public function updateData()
    {
        $sql = "UPDATE `books` SET `title`=?,`price`=?,`author`=? WHERE id='$this->id'";
        $stm = $this->conn->prepare($sql);
        $stm->execute([$this->title,$this->price,$this->author]);
        $_SESSION['message'] = "New record Updated successfully";
        header('location: index.php');

    }

    /*this the end of update method*/




    public function trushData()
    {
        $sql = "SELECT `id`, `title`,`price` ,`author` FROM `books` WHERE is_del=1";
        $statement = $this->conn->query($sql);
        return $statement->fetchAll();

    }

    /*this the end of trushData method*/


    public function restoreData()
    {

        $sql = "UPDATE `books` SET `is_del`=0 WHERE is_del=1 AND id='$this->id'";
        $this->conn->exec($sql);
        $_SESSION['massage']="Deleted successfully";
        header('location:index.php');

    }

    /*this the end restoreData*/





    public function showData()
    {
        $sql = "SELECT `id`, `title`,`price`,`author` FROM `books` WHERE `id`='$this->id'";
        $statement = $this->conn->query($sql);
        return $statement->fetch();
        return $data;
    }
    /*this the end of show method*/






    /*this the startig of permentlydelete method*/
    public function permentDelete(){
        $sql="DELETE FROM `books` WHERE id='$this->id'";
        $this->conn->exec($sql);
    }
    /*this the the end of premently Deleted data*/
    public function searchData(){
        $sql="SELECT `title` FROM `books` WHERE `title` LIKE '%$this->title%'";
        $staement=$this->conn->query($sql);
        return $staement->fetchAll();
        //return true;


    }
    /*delete all data method start*/
    public function  delall(...$id){
        $sql="DELETE FROM `books` WHERE `id`IN($id)";
        $this->conn->exec($sql);
    }
}