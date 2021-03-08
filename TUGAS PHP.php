<!DOCTYPE html>
<html lang="en">

<head>


    <title>Biodata Figo Ramadhan Hendri</title>
    <style>
        body {
            background-image: url('purple.jpg');
        }
    </style>
    <style>
        h1 {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            border-bottom: 2px solid rgb(0, 0, 0);
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            font-size: 20px;
        }

        body,
        h2,
        p,
        a,
        td,
            {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
        }

        .Utama {
            background-color: rgba(255, 255, 255, 0.7);
            width: 800px;
            color: black;
            margin: 20px auto;
            padding: 15px;
        }

        .icon {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<div class="Utama">
    <h1 align="Left"><b>Figo Ramadhan Hendri</b></h1>
    <h2 align="left">Computer Engineering</h2>

    <table>
        <tr>
            <td rowspan="8" width="100px"> <img src="pasphoto.jpg" width="200px" style="shape-image-threshold:circle;border-radius: 5%;border-color:rgb(255, 255, 255);margin-right:30px" border="2px"></td>
        </tr>
        <tr>
            <td><b>Personal Information</b></td>
        </tr>
        <tr>
            <td>Hp/Whatsapp</td>
            <td>:</td>
            <td>081382483458</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><a href="mailto:fig0ramadhan@gmail.com">fig0ramadhan@gmail.com</a></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Bogor,Ciangsana</td>
        </tr>
    </table>
    <td><b>Tentang Saya</b></td>
    <td><b>:</b></td>
    <P>Saya adalah mahasiswa Universitas Brawijaya yang sedang menempuh program studi Teknik Komputer untuk mendapatkan gelar sarjana Teknik. sekarang saya sudah disemester 6 dan sedang mempelajari program web.</P>
    <td><b>Skill</b></td>
    <td><b>:</b></td>
    <table>
        <tr>
            <td>- C++</td>
        </tr>
        <tr>
            <td>- Arduino</td>
        </tr>
        <tr>
            <td>- Autodesk Inventor</td>
        </tr>
        <tr>
            <td>- SketchUp</td>
        </tr>
    </table>
    <P><b>Pendidikan</b> <b>:</b></P>
    <table>
        <tr>
            <td>- SMA Negeri 64</td>
        </tr>
        <tr>
            <td>- Universitas Brawijaya</td>
        </tr>

    </table>
</div>
<div class="Utama" align="center">
    <h2 align="center">Sosial Media</h2>
    <a class="icon" href="https://www.instagram.com/f.ramadhan.h/"><img src="icons/Instagram.png" alt="" width="40px"></a>
    <a class="icon" href="https://www.facebook.com/figo.ramadhan.50/"><img src="icons/Facebook.png" alt="" width="40px"></a>
    <a class="icon" href="https://www.linkedin.com/in/figo-ramadhan-1a15a51b7/"><img src="icons/LinkedIn.png" alt="" width="40px"></a>
</div>
</body>
<div class="Utama" align="center">
    <?php 
        echo "<b>Radapadang Rumah Makan Padang <b>";
        echo "<br>";
        echo "<br>", '<img src="radapdang.png" alt="">';
        echo '<div class="utama">';
        echo '<div class="title">';
        echo '<h4><span>Menu Makanan  </h4>'
    ?>
</div>
<div class = "utama" align ="left">
    <?php
      
      
    
       echo "<h4>1.Ayam gulai</h4>";
       echo "<br>", '<img src="ayamgulai1.jpg" alt="">';
       echo "<h4>2.Rendang</h4>";
       echo "<br>", '<img src="rendang.jpg" alt="">';
       echo "<h4>3.Perkedel</h4>";
       echo "<br>", '<img src="perkedel.jpg" alt="">';
       echo "<h4>4.Ayam Bakar</h4>";
       echo "<br>", '<img src="ayambakar.jpg" alt="">';
       echo "<br>";
       echo "<br>";
       echo "Pesanan Anda "

    ?>

       <from action= "" method =POST name ="input">
           <br>
           <br>
           Menu makanan :<select name="makanan">
                        <option $menu ="ayamgulai">Ayamgulai</option>
                        <option $menu ="ayambakar">Ayambakar</option>
                        <option $menu ="Rendang">Rendang</option>
                        <option $menu ="perkedel">Perkedel</option>
           </select><br>
           Jumlah : <select name="jumlah">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
           </select>
            <br>
           <input type="submit" name="input" value="kirim">

        <?php

        $menu ="ayamgulai";
        $menu ="Rendang";
        $menu ="perkedel";
        $menu ="ayambakar";

        $total=0;
        $ayamgulai=7000;
        $rendang=6000;
        $perkedel=2000;
        $ayambakar=1000;

        if ($menu == "ayamgulai")
        {
        $total+=$ayamgulai;
         echo $total;
        }

        if ($menu == "Rendang")
        {
         $total+=$Rendang;
        echo $total;
        }

        if ($menu == "Perkedel")
        {
        $total+=$ayamgulai;
        echo $total;
        }

        if ($menu == "Ayambakar")
        {
        $total+=$ayambakar;
        echo $total;
        }

            if(isset($_POST['input'])){
                $makanan = $_POST['makanan'];
                $jumlah = $_POST['jumlah'];

                echo "pesanan yg anda pilih $makanan";
                echo "jumlah pesanan $jumlah";
                echo $jumlah+=$menu;
            }
        
    
        ?>

    </form>
</div>

</html>