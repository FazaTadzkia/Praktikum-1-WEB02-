<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title> Form Nilai </title>
</head>
<body>
    <!-- header -->
    <header>
    <h2 class='h2'>
        Sistem Penilaian
    </h2>
    </header>
    <h2 class='h22'>
        Form Nilai Siswa
    </h2>
    <hr/>
    <!-- content -->
    <form action="" method="POST">
        <p class='p1'> Nama Lengkap </p>
        <input class='box1'type="text" name='nama_s'>
        <p class='p2'> Mata Kuliah </p>
        <select class="matkul" name="matkul">
            <option selected>Pilih Mata Kuliah :</option>
            <option  value="UI/UX">UI/UX</option>
            <option  value="BASDAT"> Basis Data I</option>
            <option  value="WEB1">Pemrograman Web </option>
            <option  value="STTK">Statistik</option>
        </select>
        <p class='p3'> Nilai UTS </p>
        <input class='uts' type="text" name='uts'>
        <p class='p4'> Nilai UAS </p>
        <input class='uas' type="text" name='uas'>
        <p class='p5'> Nilai Tugas/Praktikum </p>
        <input class='tgs' type="text" name='tgs'>
        <br/>
        <input class= "simpan" type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>