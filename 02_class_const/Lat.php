<?php


    class Toko //class atau kerangka dasar yang digunakan untuk membuat dasar yang nantinya akan dikeluarkan sebagai objek
    {

        public $nama; //property/atribut ialah bagian-bagian dari class (mendudukung)
        public $warna; //property
        public $luas; //property
        public $stok_makanan; //property
        public $harga;  //property
        const belanja = 3; //set constant ialah variabel yang berisi tetap / static

 
        // method ialah tindakan yang bisa dilakukan didalam class
        public function setNama($nama)
        {

        	return $this->nama = $nama;
        }


        public function setWarna($warna)
        {

        	return $this->warna = $warna;
        }

        public function setHarga($harga)
        {
        	return $this->harga = $harga;
        }

        public function setLuas($luas)
        {
        	return $this->luas = $luas;
        }

        public function setStokMakanan($stok_makanan)
        {
        	return $this->stok_makanan = $stok_makanan;
        }


        public function open()
        {
            return 'Toko Buka';
        }


        public function close()
        {
            return 'Toko Tutup';
        }


        public function setBelanjaan($stok_makanan)
        {
            
            if ($stok_makanan < self::belanja) { //self digunakan untuk memanggil property yang static / tetap
            	return "Harganya ". self::belanja * $this->harga;
            	
            } else {
                return 'Stok tidak mencukupi';
            }

        }
        //endOfMethod
    }
