<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <center>
   <h3> Pendaftaran Siswa Baru SMKN 1 SAYUNG </h3>
   <form action="prosespendaftaran.php" method="post">
   <table border=0>
    <tr>
   <td>Nama Lengkap : </td>
   <td><input type="text" name="nama" /> </td>
</tr>
<tr>
  <td> Tempat Lahir  : </td>
   <td><input type="text" name="tempat" /> <td>
</tr>
<tr>
   <td>Tanggal Lahir  : </td>
   <td><input type="date" name="tanggal" /> <td>
</tr>
   <td> jenis kelamin </td>
  <td><input type="radio" name="sex" value="pria" />Pria </td>
   <td><input type="radio" name="sex" value="wanita" />Perempuan </td>
   <tr>
   <td>Alamat : </td>
   <td><input type="text-area" name="Alamat" /> </td>
</tr>
  <tr>
   <td> Agama : </td>
  <td> <select name="religion">
    <option value="Islam">Islam
    <option value="Budha">Budha
    <option value="Hindu">Hindu
    <option value="Katolik">Katolik
    <option value="Kristen">Kristen 
  </select> </td>
</tr>
  <tr>
   <td> <input type="reset"value="Ulangi"/> </td>
    <td> <input type="submit"value="submit"/> </td>
</tr>
</form>
</center>
</body>
</html>