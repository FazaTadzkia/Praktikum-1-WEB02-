
<html>
<head>
<style>
body {
    background-color: #DEB887;
    background-attachment :fixed;
    font-family: "monaco";
    color: #A52A2A;
}
h3 {
    font-size: 30px;
    margin: 20px;
    margin-bottom: 85px;
    text-align: center;
}
.a {
    font-size: 20px;
    font-weight: bold;
    margin: 15px;
}
.b {
    font-size: 20px;
    font-weight: bold;
    margin: 20px;
}
.c {
    font-size: 20px;
    font-weight: bold;
    margin: 15px;
}
.inp{
    position: static;
    margin-left: 250px;
    margin-bottom: 10px;
    top: -40px;
    background-color: #A52A2A;
  border: none;
  border-radius: 100px;
  color: white;
    font-size: 20px;
    width: 27%;
    font-weight: 250;
}
ul {
    position: static;
    margin-left: 190px;
    font-size: 15px;
    top: -20px;
}
li {
    position: relative;
    display: inline-block;
}
.jml {
    position : relative;
    right: 0px;
}
.hrg {
    position: absolute;
    right: 30px;
    width: 250px;
    border: 3px solid #A52A2A;
    padding: 10px;
    top: 100px;
}

th {
  background-color: #A52A2A;
  color: #DEB887;

}
.tbl {
    margin-left:auto;
    margin-right:auto;
    width: 500px;
    border: 3px solid #A52A2A;
    padding: 10px;
    top: 100px;
    height: 80px;
    border-collapse: collapse;

}
.button {
  background-color: #A52A2A;
  border: none;
  border-radius: 12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid #B8860B;

}
</style>
</head>
<body>
    <h3>Selamat Berbelanja di TOKOKU ONLINE Gaisss!!</h3>
    <form method="POST">
        <p class="a">Nama Pembeli: </p>
        <input class="inp" type="text" name="cus">

        <p class="b">Pilih Produk: </p>                
        <ul>
            <li class= "a"><input type="radio" name="item" value="kulkas"> Kulkas</li>
            <li class= "a"><input type="radio" name="item" value="jet pump"> Jet Pump </li>
            <li class= "a"><input type="radio" name="item" value="mesin cuci"> Mesin Cuci </li>
            <li class= "a"><input type="radio" name="item" value="tv"> TV </li>
            <li class= "a"><input type="radio" name="item" value="kompor"> Kompor </li>
        </ul>

        <p class="c">Jumlah Produk</p>
        <input class="inp" type="text" name="qty">
            </br>
            </br>
                    <input class="button" type="submit" name="hitung" value="Hitung">
                    <input class="button"type="reset" name="reset" value="Reset">
        <table class="hrg" >
                    <thead>
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Kulkas : Rp. 6.000.0000</th>
                        </tr>
                        <tr>
                            <th>Jet pump : Rp. 3.500.000</th>
                        </tr>
                        <tr>
                            <th>Mesin Cuci : Rp. 4.000.000</th>
                        </tr>
                        <tr>
                            <th>TV Rp. 3.000.000</th>
                        </tr>
                        <tr>
                            <th>Kompor Rp. 2.500.000</th>
                        </tr>
                    </tbody>
                </table>
    </form>
    <hr size="3px" width="100%" align="center" color="#B8860B">
    <h3>Total belanja anda adalah :</h3>
    <?php
    error_reporting(0);

    if(isset($_POST['hitung'])){
        $nama  =$_POST['cus'];
        $produk  =$_POST['item'];
        $harga =$_POST['harga'];
        $qty   =$_POST['qty'];
        $total = $_POST['total'];
        if($produk== "kulkas") {
            $total = 6000000 * $qty;
        } else if($produk=="jet pump") {
            $total = 3500000 * $qty;
        } else if($produk=="mesin cuci") {
            $total = 4000000 * $qty;
        } elseif ($produk=="tv") {
            $total = 3000000 * $qty;
        } else {
            $total = 2500000 * $qty;
        }
        echo "
            <table class='tbl' border='1' cellpadding='5' >
                <tr>
                    <th>Nama customer</th>
                    <th>Produk</th>
                    <th>Banyaknya</th>
                    <th>Total Harga</th>
                </tr>
                <tr>
                    <td align='center'>$nama</td>
                    <td align='center'>$produk</td>
                    <td align='center'>";echo number_format($qty,0,',','.');echo "</td>
                    <td align='center'>";echo number_format($total,0,',','.');echo "</td>
                </tr>
            </table>
        ";
    }
?>
</body>
</html>
