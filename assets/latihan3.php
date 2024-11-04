<!-- PERULANGAN BARIS & KOLOM PADA TABEL-->


<table border="1">
<!-- baris , php ditutup agar berfungsi html -->
<?php for ($i=0; $i < 3; $i++) { ?>
    <tr>
        <!-- kolom , php ditutup agar berfungsi html -->
        <?php for ($x=0; $x < 5; $x++) { ?>
            <td>
                <?php echo $i.",".$x ?>
            </td>
            <?php } ?>
    </tr>
 <?php } ?>
 </table>
<br><br>

 <!-- PENGKONDISIAN -->
  <?php
  $nilai = 10;
  if ($nilai < 20){
    echo "benar";
  }else{
    echo "salah";
  }
  ?>
  <br><br>
<?php
$nilai = 20;
  if ($nilai < 20){
    echo "benar";
  }else{
    echo "salah";
  }
  ?>
  <br><br>
  <?php
$nilai = 20;
  if ($nilai < 20){
    echo "benar";
  }elseif ($nilai == 20) {
    echo "nilai = 20";
  }else{
    echo "salah";
  }
  ?>