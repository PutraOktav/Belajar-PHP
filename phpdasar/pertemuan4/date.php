<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("d");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak januari 1970
// echo time();
// echo date("l", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 10, 30, 1999));


// strtotime
echo date("l", strtotime("30 oct 1999"));
