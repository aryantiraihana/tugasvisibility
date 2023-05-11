<?php 

    // class Mobil{
    //     public $kondisi,
    //             $merk, 
    //             $nama, 
    //             $warna, 
    //             $kecepatan; 
        
    //     public function getKondisiMobil($kondisi){
    //         $this->kondisi=$kondisi;
    //     }

    //     public function setMerk($merk){
    //         $this->merk=$merk;
    //     }

    //     public function setNama($nama){
    //         $this->nama=$nama;
    //     }

    //     public function setWarna($warna){
    //         $this->warna=$warna;
    //     }

    //     public function setKecepatan($kecepatan){
    //         $this->kecepatan=$kecepatan;
    //     }


    //     public function getCetak(){
    //         echo "Kondisi Mobil : ".$this->kondisi;
    //         echo "<br>";
    //         echo "Merk Mobil : ".$this->merk;
    //         echo "<br>";
    //         echo "Nama Mobil : ".$this->nama;
    //         echo "<br>";
    //         echo "Warna Mobil : ".$this->warna;
    //         echo "<br>";
    //         echo "Kecepatan Mobil : ".$this->kecepatan;
    //         echo "<br>";
    //         echo "============================<br>";

        
    //     }

    // }

    // $mobil1 = new Mobil();
    // $mobil1->kondisi = "Maju";
    // $mobil1->merk = "Toyota";
    // $mobil1->nama = "Fortuner";
    // $mobil1->warna = "Hitam";
    // $mobil1->kecepatan = "250";

    // $mobil2 = new Mobil();
    // $mobil2->kondisi = "Mundur";
    // $mobil2->merk = "Honda";
    // $mobil2->nama = "Brio";
    // $mobil2->warna = "Hijau";
    // $mobil2->kecepatan = "100";

    // echo $mobil1->getCetak();
    // echo $mobil2->getCetak();



    
    class Mobil {
        public $kondisi, 
                $merk, 
                $nama, 
                $warna, 
                $kecepatan;

        public function inputDataMobil($merk, $nama, $warna, $kecepatan){
            $this->merk=$merk;
            $this->nama=$nama;
            $this->warna=$warna;
            $this->kecepatan=$kecepatan;
        }

        public function getKondisi($kondisi){
            $this->kondisi=$kondisi;
        }

        public function getCetak(){
            echo "Kondisi Mobil ".$this->kondisi;
            echo "<br>";
            echo "Merk Mobil : ".$this->merk;
            echo "<br>";
            echo "Nama Mobil : ".$this->nama;
            echo "<br>";
            echo "Warna Mobil : ".$this->warna;
            echo "<br>";
            echo "Kecepatan Mobil : ".$this->kecepatan;
            echo "<br>";
            echo "============================<br>";

        
        }

    }

    $mobil1 = new Mobil();
    $mobil1->getKondisi("Maju");
    $mobil1->inputDataMobil("Toyota","Fortuner","Putih","250");

    $mobil2 = new Mobil();
    $mobil2->getKondisi("Mundur");
    $mobil2->inputDataMobil("Honda","Brio","Putih","200");

    $mobil1->getCetak();
    $mobil2->getCetak();
?>