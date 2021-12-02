<?php
//-- melakukan konfigurasi database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_saw';
//-- menghubungkan ke database server dengan ekstensi mysqli
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
//-- menghentikan program dan menampilkan pesan kesalahan apabila koneksi gagal
if ($db->connect_error) {
    die('Koneksi Error (' . $db->connect_errno . ')' . $db->connect_error);
}
