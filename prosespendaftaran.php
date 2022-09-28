<?php
echo "Nama lengkap :";
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
echo "<br>";
}

echo "Tempat Lahir :";
if (isset($_POST['tempat'])) {
    echo $_POST['tempat'];
echo "<br>";
}

echo "Tanggal Lahir :";
if (isset($_POST['tanggal'])) {
    echo $_POST['tanggal'];
echo "<br>";
}
echo "Jenis Kelamin :";
if (isset($_POST['sex'])) {
    echo $_POST['sex'];
echo "<br>";
}

echo "Alamat :";
if (isset($_POST['Alamat'])) {
    echo $_POST['Alamat'];
echo "<br>";
}

echo "Agama :";
if (isset($_POST['religion'])) {
    echo $_POST['religion'];
echo "<br>";
}

?>
