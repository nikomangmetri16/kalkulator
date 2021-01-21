<html>
<head>
 <title>Cara Membuat Kalkulator Sederhana Menggunakan Bahasa Pemrograman PHP</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST['kalkulator'])){
      $angka1 = @$_POST['angka1'];
      $angka2 = @$_POST['angka2'];
      $proses = @$_POST['proses'];
    ?>


    <?php
      switch ($proses) {
        case 'tambah':
          $hasil = $angka1+$angka2;
        break;
        case 'kurang':
          $hasil = $angka1-$angka2;
        break;
        case 'kali':
          $hasil = $angka1*$angka2;
        break;
        case 'bagi':
          $hasil = $angka1/$angka2;
        break;
      }
    }
    ?>
    <div class="bentuk">
      <h2 class="kepala">KALKULATOR</h2>
      <form method="post" action="index.php">
        <input type="text" name="angka1" class="angka" placeholder="">
        <input type="text" name="angka2" class="angka" placeholder="">
      <select class="proses" name="proses">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
      </select>
      <input type="submit" name="kalkulator" value="Hitung" class="tombolnya">
      </form>
      <?php if(isset($_POST['kalkulator'])){ ?>
			  <input type="text" value="<?php echo $hasil; ?>" class="angka">
		  <?php }else{ ?>
			  <input type="text" class="angka" placeholder="Hasil" disabled="">
		  <?php } ?>
    </div>
</body>
</html>