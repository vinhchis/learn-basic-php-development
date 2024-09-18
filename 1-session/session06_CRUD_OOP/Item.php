<?php

class Item {
    #1. Properties

    private $server = "localhost"; //default port 3306
    private $account = "root";
    private $password = "";
    private $database = "stronghold";
    public $conn;

    #2. Constructor

    public function __construct() {
        $this->conn = new mysqli($this->server, $this->account, $this->password, $this->database);
        if (mysqli_connect_error()):
            trigger_error(mysqli_connect_error());
        else:
            return $this->conn;
        endif;
    }

    #3. Function
    #3.1. Read
    public function readData() {
        $query = "select * from Item";
        $rs = $this->conn->query($query);

        if ($rs->num_rows > 0):
            $data = [];
            while ($row = $rs->fetch_array()):
                $data[] = $row;
            endwhile;
            return $data;
        else:
            echo 'Records not found!';
        endif;
    }

    #3.2. Create
    public function createData($post) {
        $code = $this->conn->real_escape_string($_POST['txtCode']);
        $name = $this->conn->real_escape_string($_POST['txtName']);
        $price = $this->conn->real_escape_string($_POST['txtPrice']);

        $query = "insert into Item VALUES ('{$code}', '{$name}', {$price})";
        $rs = $this->conn->query($query);

        if (!$rs):
            header('location: Ex01_Read.php?messError=" Nothing to update "');
        else:
            header('location: Ex01_Read.php?messOK="Ne wData is added to database!"');
        endif;
    }

    #3.3. Update
    public function updateData() {
        $code = $this->conn->real_escape_string($_POST['txtcode']);
        $name = $this->conn->real_escape_string($_POST['txtname']);
        $price = $this->conn->real_escape_string($_POST['txtprice']);

        //Query
        $query = "update item set name = '{$name}', price = '{$price}' where code ='{$code}'";
        $rs = $this->conn->query($query);
        if (!$rs):
            header('location: Ex01_Read.php?messError=" Nothing to update "');
        else:
            header('location: Ex01_Read.php?messOK=" Data is updated to database!"');
        endif;
    }

    #3.4. Delete
    #4. Filter by Code

    public function filterByCode($code) {
        //Query
        $query = "select * from Item where Code = '{$code}'";
        $rs = $this->conn->query($query);

        if ($rs->num_rows > 0):
            $data = [];
            while ($row = $rs->fetch_array()):
                $data[] = $row;
            endwhile;
            return $data;
        else:
            echo 'Record not found';
        endif;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
