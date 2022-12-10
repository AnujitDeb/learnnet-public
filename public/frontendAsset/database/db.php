<?php


    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'demo';

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        die("Can't Connect to the Database!!!".mysqli_error($connection));
    }
    class Database{
        protected $hostname;
        protected $username;
        protected $password;
        protected $db;
        public $connection;
        public function __construct($hostname='localhost',$username='root',$password='',$db='demo'){
            $this->hostname=$hostname;

            $this->username=$username;
            $this->password=$password;
            $this->db=$db;
            $this->connect();

        }


        public function connect(){
            //echo "Successfully created";
           return $this->connection= mysqli_connect($this->hostname, $this->username, $this->password, $this->db);
        }
        public function get($table,$columnName="",$parameter="",$operator="=") {
            $sql = " SELECT * FROM $table";
            if($columnName && $parameter){
                $sql.="WHERE ".$columnName." ".$operator.$parameter;
            }
            $dataArray=[];
                $data = mysqli_query($this->connection, $sql);
            while($row = mysqli_fetch_assoc($data)){
                $dataArray[] = $row;
            }
           return $dataArray;
        }



    }

    $dbClass=new Database();
    $connection=$dbClass->connect();
    //var_dump( $dbClass->get('category',null,null))


?>