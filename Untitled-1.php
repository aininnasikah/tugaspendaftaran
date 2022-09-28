<?php 
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:barang.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FORM barang where id=$kode";
$query = mysqli_query($db,$sql);
$barang = mysqli_ftch_assoc($query);

if(mysqli_num_($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> form Edit Barang </h1>
    <form action="proses-edit-barang.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $barang['id']?> />
            <p>
                <lable name="nama">Nama Barang : </table>
                <input type="text" value="<?php echo $barang['nama']?>" />
</p>