<?php
//sambung ke pangkalan data
include "config.php"; 

//semak sama ada data dengan ID pengguna nama telah dihantar 
if (isset($_POST['id'])) {
//pembolehubah untuk memegang data yang dihantar 
$id = $_POST['id'];
$nama_pelajar = $_POST['nama_pelajar'];
$no_ndp = $_POST['no_ndp'];
$no_kp = $_POST['no_kp'];
$no_hp = $_POST['no_hp'];
$jantina = $_POST['jantina']; 

//tambah rekod baru ke dalam table
$sql = "INSERT INTO info_pelajar (id,no_ndp,nama_pelajar,no_kp,jantina,no_hp) 
VALUES ( '$id','$no_ndp','$nama_pelajar','$no_kp','$jantina','$no_hp')";

//pertanyaan sql dengan sambungan ke database 
$hasil = mysqli_query($samb, $sql);
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data 
// papar mesej berjaya atau gagal simpan rekod baru
if ($hasil) {
echo "<script>alert('TAMBAH PELAJAR BERJAYA');
window.location='index.php'</script>";

}else{

echo "<script>alert('TAMBAH PELAJAR GAGAL!');
window.location='tambahpelajar.php'</script>";
}

} ?>
<html>
<head>
    <title>SISTEM MAKLUMAT PELAJAR</title>
    <link rel="icon" type="image/x-icon" href="ilp.png">
    <style>
        h1{
            text-align: center;
            padding: 10px;
        }
        legend{
            text-align: center;
        }
        h2{
            text-align: center;
        }
    </style>
<h1>INSTITUT LATIHAN PERINDUSTRIAN KUALA LANGAT</h1>
<h2>SISTEM MAKLUMAT PELAJAR TPP</h2>
 <fieldset>
<legend><h2>TAMBAH PELAJAR</h2></legend>
<body>
   


        
        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
        <label>ID</label><br>
            <input type="text" name="id" id="id" placeholder="ID Pelajar" size="5" required><br>
            <br>
        
        <label>Nama Anda</label><br>
            <input type="text" name="nama_pelajar" id="nama" placeholder="Nama" size="50" required><br>
            <br>

        <label>No Pelajar</label><br>
            <input type="text" name="no_ndp" id="nama" placeholder="No NDP" size="9" required><br>
            <br>

        <label>Nombor Kad Pengenalan</label><br>
        *Tanpa jarak<br>
            <input type="text" name="no_kp" placeholder="030406040246" maxlength='12' size="15" ><br>
            <br>

        <label>No Telefon</label><br>
            <input type="text" name="no_hp" id="no_hp" placeholder=""  required><br>
            <br>

        <label>Jantina</label><br>
            <input required="required" type="radio" name="jantina" value="LELAKI">
            Lelaki
            <input required="required" type="radio" name="jantina" value="PEREMPUAN">
            Perempuan<br>
            <br>

           
            <!-- button daftar & reset -->
            <button type="submit">Tambah</button>
            <button type="reset">Reset</button><br><br>
            *Pilihan hanya dibenarkan sekali sahaja.
        </form>
        <form action="index.php"> <button type="submit">Home</button><br><br>
    </fieldset>
</body>

</html>