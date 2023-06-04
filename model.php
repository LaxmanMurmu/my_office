
<?php
class Database {
    private $localhost;
    private $username;
    private $password;
    private $dbname;
    protected $conn;

    public function connect() {
        $this->localhost = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'my_office';
        $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->dbname);
        return $this->conn;
    }
}




class Query extends Database {

    
    // =========================================================SELECT==================================================================
    // SELECT * FROM `user` WHERE 1
    // SELECT `id`, `email`, `firstname`, `lastname`, `mobile`, `password` FROM `user` WHERE 1


    public function getData($table, $fields = '*', $condition_arr = array(),  $order_by_field = '', $order_by_type = 'desc', $limit = '') {
        $sql = "SELECT $fields FROM $table";

        if (!empty($condition_arr)) {
            $sql .= ' WHERE ';
            $c = count($condition_arr);
            $i = 1;
            foreach ($condition_arr as $key => $val) {
                if ($i == $c) {
                    $sql .= "$key='$val'";
                } else {
                    $sql .= "$key='$val' AND ";
                }
                $i++;
            }
        }

    
        if ($order_by_field !== '') {
            $sql .= " ORDER BY $order_by_field $order_by_type";
        }

        if ($limit !== '') {
            $sql .= " LIMIT $limit";
        }
        // die($sql);
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            $arr = array();
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            return 0;
        }
    }


    // =========================================================INSERT==================================================================
    // INSERT INTO `user`(`id`, `email`, `firstname`, `lastname`, `mobile`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')


    public function insertData($table, $condition_arr) {
        if (!empty($condition_arr)) {
            $fields = implode(",", array_keys($condition_arr));
            $values = "'" . implode("','", array_values($condition_arr)) . "'";
    
            $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    
            $result = $this->connect()->query($sql);
        }
    }


     // =========================================================DELETE==================================================================
    //  DELETE FROM `user` WHERE 0

     public function deleteData($table , $condition_arr) {
        if($condition_arr!= ''){
            $sql = "DELETE FROM $table WHERE ";
            $c = count($condition_arr);
            $i = 1;
            foreach ($condition_arr as $key => $val) {
                if ($i == $c) {
                    $sql .= "$key='$val'";
                } else {
                    $sql .= "$key='$val' AND ";
                }
                $i++;
            }
            // echo ($sql);
        $result = $this->connect()->query($sql);
        }
          
    }



       // =========================================================UPDATE==================================================================
    // UPDATE `user` SET `id`='[value-1]',`email`='[value-2]',`firstname`='[value-3]',`lastname`='[value-4]',`mobile`='[value-5]',`password`='[value-6]' WHERE 1

       public function updateData($table, $update_arr, $condition_arr) {
        if (!empty($update_arr) && !empty($condition_arr)) {
            $update_fields = '';
            foreach ($update_arr as $key => $val) {
                $update_fields .= "$key='$val', ";
            }
            $update_fields = rtrim($update_fields, ', ');
    
            $condition_fields = '';
            foreach ($condition_arr as $key => $val) {
                $condition_fields .= "$key='$val' AND ";
            }
            $condition_fields = rtrim($condition_fields, ' AND ');
    
            $sql = "UPDATE $table SET $update_fields WHERE $condition_fields";
            $result = $this->connect()->query($sql);
        }
    }
    


 // =========================================================FOR SECURITY==================================================================
//  mysqli_real_escape_string   ------>this function add / in spaces

public function get_safe_str($str){
    if($str!=''){
    return mysqli_real_escape_string($this->connect(), $str);
    }
}
    


}





    

?>