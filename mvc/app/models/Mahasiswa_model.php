<?php

class Mahasiswa_model{
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {   
        // data source name
        $dsn ='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn,'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    
    // private $mhs = [
    //     [
    //         "nama" => "Daffaiz Naufal",
    //         "nrp" => "203040138",
    //         "email" => "daffaiz.203040138@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Naufal",
    //         "nrp" => "203030138",
    //         "email" => "naufal.203030138@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Renang"
    //     ],
    //     [
    //         "nama" => "Faiz",
    //         "nrp" => "203050138",
    //         "email" => "Faiz.203050138@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Penerbangan"
    //     ]
    // ];
    
    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}