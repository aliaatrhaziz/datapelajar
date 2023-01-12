<?php
//sambung ke pangkalan data 
include "config.php";
?>
<html>
    <head>
    <title>SISTEM MAKLUMAT PELAJAR</title>
    <link rel="icon" type="image/x-icon" href="ilp.png">
    <style>
        table, tr, td, th{
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        h1{
            text-align: center;
            padding: 10px;
        }
        legend{
            text-align: center;
        }
    </style>
    </head>
    <h1>INSTITUT LATIHAN PERINDUSTRIAN KUALA LANGAT</h1>
    <button>
    <a href="tambahpelajar.php">TAMBAH PELAJAR</a>
    </button>
    <fieldset>
        
<legend><h2>SISTEM MAKLUMAT PELAJAR TPP</h2></legend>
<body>
        <table align="center">
            <tr>
                <th>ID</th>
                <th>NAMA PELAJAR</th>
                <th>NO NDP</th>
                <th>NO KAD PENGENALAN</th>
                <th>NO TELEFON</th>
                <th>JANTINA</th>
                
            </tr> 
            
           
            <?php
            $samb= mysqli_connect($host, $user, $password, $database);

            $sql = "SELECT * FROM info_pelajar ORDER BY id";
            $data = mysqli_query($samb, $sql);  
            $id = 1;          
            while ($info_pelajar = mysqli_fetch_array($data)) {
            ?>
            <tr>
               <td><?php echo $id; ?></td>
               <td><?php echo $info_pelajar['nama_pelajar']; ?></td>
               <td><?php echo $info_pelajar['no_ndp']; ?></td>
               <td><?php echo $info_pelajar['no_kp']; ?></td>
               <td><?php echo $info_pelajar['no_hp']; ?></td>
               <td><?php echo $info_pelajar['jantina']; ?></td>
                <td><a href="padampelajar.php">Padam</a></td>
                <td><a href="tambahpelajar.php">Tambah</a></td>
           </tr>
           <?php $id = $id + 1; } ?>
          
           
        </table>
            </fieldset>
    </body>
</html>