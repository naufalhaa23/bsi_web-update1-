<?php
class Tugas1 extends CI_Controller
{
    Public function index()
    {
        $nim = "19221029";
        $nama = "Muhammad Fariz Itsar";
        $kelas = "19.3A.04";
        $prodi = "Sistem Informasi";
        
        echo "<pre>";
        echo "<h1> BIODATA <h1><br>";
        echo "NIM : $nim<br>";
        echo "Nama : $nama<br>";
        echo "Kelas : $kelas<br>";
        echo "Prodi : $prodi<br>";
        echo "<pre>";
    }
    Public function biodata()
    {
        $data=array(
            'no_barang' => "2322",
            'nama_barang' =>"penghapus",
            'qty' => 90
        );

        $this->load->view('view_belajar', $data);
    }
}