<?php 
$hewan = array(
    1=> array(
        "Foto" => "<img src = '1.jpg' width ='100' height = '80'>",  
        "Nama Pahlawan" => "TuanKu Imam Bonjol",
        "Tanggal Lahir" => "1 Januari 1772",
        "Asal" => "Sumatera Barat",
        "Perjuangan" => "Mengembalikan AL-QUR'AN dan Sunnah sebagai pondasi kehidupan masyarakat serta menentang dominasi kekuasaan kolonial Belanda",
    ),
    2 => array(
        "Foto" => "<img src = '2.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Cut Nyak Dien",
        "Tanggal Lahir" => "12 Mei 1848",
        "Asal" => "Lampadang, Aceh",
        "Perjuangan" => "Ia memimpin pasukan untuk melawan Belanda pada masa perang Aceh",
    ),
    3 => array(
        "Foto" => "<img src = '3.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Pangeran Diponerogo",
        "Tanggal Lahir" => "11 November 1785",
        "Asal" => "Yogyakarta",
        "Perjuangan" => "Memimpin perang Jawa untuk mengusir para penjajah",
    ),
    4 => array(
        "Foto" => "<img src = '4.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Sultan Hasanuddin",
        "Tanggal Lahir" => "12 Januari 1631)",
        "Asal" => "Sulawesi Selastan",
        "Perjuangan" => "Ia berusaha menggabungkan beberapa kerajaan kecil di wilayah Indonesia Timur dan membuat perlawanannya dengan Belanda semakin memanas",
    ),
    5 => array(
        "Foto" => "<img src = '5.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Pattimura",
        "Tanggal Lahir" => "8 Juni 1783",
        "Asal" => "Maluku",
        "Perjuangan" => "melawan Belanda yang berusaha menguasai Maluku dengan menindas, memaksa kerja rodi, dan menguras kekayaan Maluku",
    ),
    6 => array(
        "Foto" => "<img src = '6.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Raden Ajeng Kartini ",
        "Tanggal Lahir" => "21 April 1879",
        "Asal" => "Jawa Tengah",
        "Perjuangan" => "Ia memperjuangkan kesetaraan hak dan membangun sekolah perempuan bernama yayasan Kartini",
    ),
    7 => array(
        "Foto" => "<img src = '7.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Dewi Sartika",
        "Tanggal Lahir" => "4 Desember 1884",
        "Asal" => "Jawa Barat",
        "Perjuangan" => "Mendirikan sekolah istri",
    ),
    8 => array(
        "Foto" => "<img src = '8.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Cut Meutia",
        "Tanggal Lahir" => "15 Februari 1870",
        "Asal" => "Aceh",
        "Perjuangan" => "Ia mengusir penjajah",
    ),
    9 => array(
        "Foto" => "<img src = '9.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Sultan Iskandar Muda",
        "Tanggal Lahir" => "F21 Januari 1591",
        "Asal" => "Aceh",
        "Perjuangan" => "Memperkuat armada dan angkatan perang, melakukan penaklukan wilayah, penyerangan terhadap Portugis dan menjalin kerjasama perdagangan",
    ),
    10 => array(
        "Foto" => "<img src = '10.jpg' width ='100' height = '80'>",
        "Nama Pahlawan" => "Ki Hajar Dewantara",
        "Tanggal Lahir" => "2 Mei 1889",
        "Asal" => "D.I YOgyakarta",
        "Perjuangan" => "Mendirikan perguruan Taman Siswa",
    ),
    // Lanjutkan sampai 10 hewan
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 100px;
            height: 80px;
        }
    </style>
</head>
<body>
    <!--Pemilihan tabel flora dan fauna-->
<b>Nama : Salsabillah Izmirafifah Nurin</b>
</br>
<b>NIM : 701220316</b>
</br>
<b> NRP %5 = 316% * 5 = 15,8 : 2 = 4=> Pahlawan Nasional Indonesia </b>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
echo "<center><b>PAHLAWAN NASIONAL INDONESIA</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Foto</th><th>Nama Pahlawan</th><th>Tanggal Lahir<th>Asal</th><th>Perjuangan</th></tr>";
$nomor = 1;

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($hewan as $data) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $data['Foto'] . "</td>";
    echo "<td>" . $data['Nama Pahlawan'] . "</td>";
    echo "<td>" . $data['Tanggal Lahir'] . "</td>";
    echo "<td>" . $data['Asal'] . "</td>";
    echo "<td>" . $data['Perjuangan'] . "</td>";
    echo "</tr>";
    $nomor++;
}

echo "</table>";


    ?>

</body>
</html>