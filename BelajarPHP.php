<?php

//FUNGSI DENGAN INPUT
        function perkenalan () {
            echo "Selamat datang, ";
            echo "Pada Acara Digital Talent<br/>";
            echo "2019<br/>";
        }

        perkenalan();

        function perkenalanInput ($nama, $salam) {
            echo "<hr>";
            echo $salam. ", ";
            echo "perkenalkan nama saya " .$nama. "<br/>";
            echo "senang berkenalan dengan anda ";
        }

        perkenalanInput("Hanum","good morning");

        $nama = "Hanum faulinnuur";
        $salam = "Assalamualaikum";

        perkenalanInput($nama, $salam);

//FUNGSI DENGAN INPUT DAN MENGIRIM NILAI

        function hitung_umur ($Tlahir, $Tsekarang) {
            $umur = $Tsekarang - $Tlahir;

            return $umur;
        }

        echo "<hr>";
        echo "umur saya adalah ". hitung_umur( 2003, 2023). " tahun";


        function hitung_umur1 ($Tlahir1, $Tsekarang1 = 2023) {
            $umur = $Tsekarang1 - $Tlahir1;

            return $umur;
        }

        echo "<hr>";
        echo "FUNGSI DENGAN DEFAULT<br>";
        echo "umur saya adalah ". hitung_umur1( 2000). " tahun";

        function faktorial ($angka) {
            if ($angka < 2) {
                return 1;
            }else{
                return $angka * faktorial($angka-1);
            }
        }

        echo "<hr>";
        echo "faktorial 5 adalah ". faktorial(5);
?>