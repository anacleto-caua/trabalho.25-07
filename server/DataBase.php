<?php
    /**
     * exemplo de conexão
     * <?php
     * require_once('DataBase.php');
     * $testbd = new DataBase("localhost", "root", "", 'test');
     * $testbd->querySelect(array("id_test","nome_test"), "tb_test");
     * ?>
     */
    class DataBase{
        private $host;
        private $username;
        private $password;
        private $db_name;
        private $MySQLi;
        
        public function __construct($h = "localhost", $r  = "root", $p = "", $d)
        {
            /*
            default/example
            private $host = "localhost";
            private $username = "root";
            private $password = "";
            private $db_name = "test";
            */
            $this->host=$h;
            $this->username=$r;
            $this->password=$p;
            $this->db_name=$d;

            $this->MySQLi = new MySQLi($this->host, $this->username, $this->password, $this->db_name);
            
        }


        public function querySelect($search="*" ,$table, $where=[]){
            $query = "SELECT ";

            //organiza as informações
            foreach($search as $dado){
                if($search[0]==$dado){
                    $query .= $dado;
                }
                else{
                    $query .= ' , ' . $dado;
                }
            }

            $query .= " FROM $table";

            //organiza as condições
            if(count($where)!=0){
                foreach($where as $dado){
                    if($where[0]==$dado){
                        $query .= ' WHERE ' . $dado;
                    }
                    else{
                        $query .= ' AND ' . $dado;
                    }
                }
            }

            $result = $this->MySQLi->query($query);

            while($fetch = $result->fetch_assoc()) {
                echo "<p>";
                foreach ($fetch as $field => $value) {
                    echo $field . ' => ' . $value . ' | ';
                }
                echo "</p>";
            }
        }

        public function queryInsert($table, $columns, $values){
            $query = " INSERT INTO $table ";
            
            $query .= " ( ";
            if(gettype($columns) == "Array"){
                foreach($column as $columns){

                    if($column==$columns[0]){
                        $query .= " $column ";
                    }else{
                        $query .= " ,$column ";
                    }
                }
            }else{
                $query .= " $columns[0] ";

            }
            $query .= " ) VALUES";
            
            $query .= " ( ";
            if(gettype($values)=="Array"){
                foreach($value as $values){
                    if($i==0){
                        $query .= " $value ";
                    }else{
                        $query .= " , $value ";
                    }
                }
            }else {
                $query .= $values[0] ;
            }
            $query .= " ) ";

            echo $query . "<br>";

            $this->MySQLi->query($query);
        }

        //GandS
        public function getHost(){
            return $this->host;
        }

        public function setHost($s){
            $this->host=$s;
        }

        
        public function getUsername(){
            return $this->username;
        }

        public function setUsername($s){
            $this->username=$s;
        }

        
        public function getPassword(){
            return $this->password;
        }

        public function setPassword($s){
            $this->password=$s;
        }


        public function getDb_name(){
            return $this->db_name;
        }

        public function setDb_name($s){
            $this->db_name=$s;
        }
    }
?>