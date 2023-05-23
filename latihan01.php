<?php
    $dta[0]["nama"] = "yong fratama";
    $dta[0]["alamat"] = "Jl.Utama 5 Blok A17";
    $dta[0]["tgl_lahir"] = "2011-11-28";

    $dta[1]["nama"] = "Komang Adi";
    $dta[1]["alamat"] = "Jl.Utama 5 Blok A17";
    $dta[1]["tgl_lahir"] = "2011-11-28";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta[0]);