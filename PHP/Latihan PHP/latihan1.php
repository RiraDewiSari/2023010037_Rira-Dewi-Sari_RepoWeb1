<!DOCTYPE HTML> 
<html> 
<head> 
    <title>Aplikasi PHP</title> 
</head> 
<body> 
    <?php 
        echo "Tag Standar<br>";
        echo "Ini Adalah Script PHP Pertama Saya<br>"; 
        echo "Saya sedang belajar PHP di Polibang<br>";
 
        $warna = "red"; 
        echo "Rumah saya " . $warna . "<br>"; 
        echo "Mobil saya " . $WARNA . "<br>"; 
        echo "Sepeda saya " . $WARna . "<br>";     
        
        // Deklarasi variabel 
        $txt = "Hello POLIBANG!"; 
        $number = 10; 
        // Menampilkan nilai variabel 
        echo $txt;  // Output: Hello World! 
        echo $number; // Output: 10

        echo "Membuat  program php dengan menggunakan minimal 5 varibel dan kombinasikan 
variable tersebut saat ditampilkan. <br>";
        // Definisi variabel
        $firstName = "Rira";
        $lastName = "Akbar";
        $age = 25;
        $profession = "Software Engineer";
        $hobby = "coding";

        // Kombinasi variabel untuk ditampilkan
        echo "<h1>Profil</h1>";
        echo "<p>Nama Lengkap: $firstName $lastName</p>";
        echo "<p>Usia: $age tahun</p>";
        echo "<p>Pekerjaan: $profession</p>";
        echo "<p>Hobi: $hobby</p>";

        // Kalimat gabungan menggunakan variabel
        echo "<p>Halo, nama saya $firstName $lastName, seorang $profession berusia $age tahun yang sangat suka $hobby. Senang bertemu dengan Anda!</p>";
    
    ?> 

<h2>Daftar Nama Barang</h2> 
    <ol> 
        <?php 
        for ($i = 1; $i <= 50; $i++) { 
            echo "<li>Barang ke-$i</li>"; 
        } 
        ?> 
    </ol> 

</body> 
 
</html> 