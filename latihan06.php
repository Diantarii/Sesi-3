<?php
    $mhs=array(
        array("Diantari", "2201010119","Tegallalang"),
        array("Mangtri", "2201010120","Tegallalang"),
        array("Mahima", "2201010339","Denpasar"),
        array("Nabila", "2201010344","Denpasar"),
    );

    header("Content-Type: application/json");
    echo json_encode($mhs);
