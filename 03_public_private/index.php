<?php

    require 'Lat.php';


    $john = new Motor(); //set object


    //set property
    $merk = $john->setMerk('Honda');
    $cc = $john->setCC(160);
    $warna = $john->setWarna('Hitam');
    $no_mesin = $john->setNoMesin(12340);
    $showRoda = $john->showConstan();


    $roda = $john->result(1);


    //result of property
    echo 'Merk Motor : '.$merk.'<br>';
    echo 'CC Motor : '.$cc.'<br>';
    echo 'Warna Motor : '.$warna.'<br>';
    echo 'No Mesin Motor : '.$no_mesin.'<br>';
    echo 'Jumlah Roda : '.$showRoda.'<br>';
    echo $roda;
