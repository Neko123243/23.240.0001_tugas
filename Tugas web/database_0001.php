<?php
    class Database{
        //properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php_0001";
        public $connect;
        public $jns_kelamin = "jns_kelamin";
        public $gambar = "gambar";
        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username,
            $this->password);
            mysqli_select_db($this->connect, $this->database);
            // pengujian koneksi
            // if($this->connect->connect_error){
            //    die ("Koneksi Gagal : " . $this->connect->connect_error);
            // }
            // echo "koneksi Berhasil";

        }
        

            function tampilData(){
                $data = mysqli_query($this->connect, "SELECT * FROM db_users_0001");
                $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
                // var_dump($rows);
                return $rows;
            }

            function tambahData($nama, $alamat, $no_hp, $jns_kelamin, $gambar): void{
                mysqli_query($this->connect, "INSERT INTO db_users_0001 VALUE (NULL, '$nama', '$alamat',
                '$no_hp', '$jns_kelamin', '$gambar')");
            }

            function editData($id){
                $data = mysqli_query($this->connect, "SELECT * FROM db_users_0001 WHERE id='$id'");
                $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
                return $rows;
            }
            function updateData($id, $nama, $alamat, $no_hp, $jns_kelamin){
                mysqli_query($this->connect, "UPDATE `db_users_0001` SET `id` = '$id', `nama` = '$nama', `alamat` = '$alamat', `no_hp` = '$no_hp', `jns_kelamin` = '$jns_kelamin' WHERE `db_users_0001`.`id` = '$id'");
            }
            function hapusData($id){
                mysqli_query($this->connect, "DELETE FROM db_users_0001 WHERE `db_users_0001`.`id` = '$id'");
            }
            function rinciData(){
                $data = mysqli_query($this->connect, "SELECT * FROM db_users_0001");
                $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
                // var_dump($rows);
                return $rows;
            }
    }

?>