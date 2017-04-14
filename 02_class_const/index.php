<?php


    require 'Lat.php';


    $john = new Toko(); //object

    //mengatur object
    $nama =  $john->setNama('Toko OE');
    $warna = $john->setWarna('Hitam Putih');
    $luas = $john->setLuas('3x5 m');
    $stok = $john->setStokMakanan('10');
    $harga = $john->setHarga(10000);

    $total = $john->setBelanjaan(2);


    //menampilkan hasil dari aturan object
    echo 'Nama Toko : '.$nama.'<br>';
    echo 'Warna Toko : '.$warna.'<br>';
    echo 'Luas Toko : '.$luas.'<br>';
    echo 'Stok Makanan : '.$stok.'<br>';
    echo 'Harga /bungkus : '.$harga.'<br>';
    echo 'Total Pembelian : '.$total;
