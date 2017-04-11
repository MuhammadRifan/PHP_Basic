<?php
    echo "<h3>PHP tag</h3>";
        echo "&lt;?php echo 'sesuatu'; ?&gt;";
            // tag php open dan close, digunankan untuk membuka dan menutup script php
    echo "<br>";

    echo "<h3>PHP tag short echo</h3>";
        echo "&lt;?= 'sesuatu'; ?&gt;";
            // tag php short echo, digunakan untuk menampilkan echo secara ringkas
    echo "<br>";

    echo "<h3>PHP echo</h3>";
        echo "echo 'something';";
            //  digunakan untuk menampilkan output php
    echo "<br>";

    echo "<h3>PHP print</h3>";
        print "print 'something';";
            // digunakan untuk menampilkan output php

            // PS. perbedaan echo dan print, echo bisa menampilkan beberapa parameter sekaligus, sedangkan print tidak -->
    echo "<br>";

    echo "<h3>PHP Comment 1</h3>";
        echo '// script <br> # script';
            // digunakan untuk mengkomen atau mematikan script php dalam satu baris
    echo "<br>";

    echo "<h3>PHP Comment 2</h3>";
        echo "/* <br> script <br> */";
            // digunakan untuk mengkomen atau mematikan script php yang lebih dari satu baris
    echo "<br>";

    echo "<h3>PHP Variabel</h3>";
        echo '$variable = "something";';
            // digunakan untuk menamai variabel dalam php
            // PS. variabel adalah nama sebuah data yang bisa berupa string, integer dan array
    echo "<br>";

    echo "<h3>PHP String</h3>";
        echo "echo 'string';<br>".'echo "string";';
            // string adalah datatype php yang bisa berisi huruf atau pun angka
            // dalam php, string dibagi menjadi 2, yaitu menggunakan "" dan ''
            // jika menggunakan "", variabel, function dsb akan terbaca sesuai dengan yang dimaksud
            // jika menggunakan '', variabel, function dsb akan terbaca sebagai string
    echo "<br>";

    echo "<h3>PHP Integer</h3>";
        $x = 7;
        echo '$x = 7;<br>';
        var_dump($x);
            // integer adalah datatype php yang hanya berisi bilangan bulat, bukan desimal
    echo "<br>";

    echo "<h3>PHP Float</h3>";
        $x = 7.5;
        echo '$x = 7.5;<br>';
        var_dump($x);
            // float adalah datatype php yang hanya berisi bilangan desimal
    echo "<br>";

    echo "<h3>PHP Boolean</h3>";
        echo '$x = true;<br>';
        echo '$z = false;<br>';
            // boolean adalah datatype php yang hanya berisi true dan false / 1 dan 0
            // biasa digunakan dalam if
    echo "<br>";

    echo "<h3>PHP Array</h3>";
        $array = array("Satu",'Dua',3);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
            // array adalah sebuah tempat yang berisi data - data yang bisa berupa string atau integer
    echo "<br>";

    echo "<h3>PHP If statements</h3>";
        $t = 11;

        if ($t < 5) {
            echo "Lebih kecil dari 5";
        } elseif ($t < 10) {
            echo "Lebih besar dari 5";
        } else {
            echo "Lebih besar dari 10";
        }
            // digunakan untuk mengeksekusi beberapa action sesuai dengan kondisi yang di tetapkan
            // if = digunakan jika kondisi yang diinginkan hanya 1
            // elseif = digunakan jika kondisi yang diinginkan lebih dari 1
            // else = digunakan sebagai default if
            // maksudnya adalah jika kondisi tidak sesuai dengan if atau elseif, maka else yang akan dijalankan
    echo "<br>";

    echo "<h3>PHP Switch statements</h3>";
        $angka = 0;

        switch ($angka) {
            case 1:
                echo "Angka 1";
                break;
            case 2:
                echo "Angka 2";
                break;
            case 3:
                echo "Angka 3";
                break;
            default:
                echo "Bukan angka 1,2,3";
        }
            // hampir sama seperti if, namun switch lebih mengarah ke kondisi dari sebuah variabel
            // jadi jika variabel sesuai dengan kondisi yang pertama "case 1", maka script pada case tersebut akan berjalan
            // default pada switch case berguna seperti else pada if statements
    echo "<br>";

    echo "<h3>PHP While loop</h3>";
        $x = 1;

        while ($x <= 5) {
            echo "The number is = $x <br>";
            $x ++;
        }
            // switch digunakan untuk me looping atau mengulang beberapa script dengan kondisi tertentu
            // misal ada sebuah variabel berisi int 1, kita akan mengulang sebuah script menggunakan variabel tersebut sebanyak 5
            // maka kita menggunakan while, jika variabel lebih kecil dari 5, maka script pada while tersebut akan berjalan
            // jangan lupa untuk memberi auto increment pada akhir body sebelum close branch, agar switch tidak mengalami infinite loop
    echo "<br>";

    echo "<h3>PHP Do While loop</h3>";
        $x = 6;

        do {
            echo "The number is = $x <br>";
            $x++;
        } while ($x <= 5);
            // hampir sama seperti switch, hanya saja jika variabel nya tidak sesuai yang di kondisi kan
            // maka tetap mengeluarkan script dengan jumlah looping 1
            // penulisan nya hampir sama seperti switch loop, hanya saja tata letak nya saja yang dirubah
    echo "<br>";

    echo "<h3>PHP For loop</h3>";
        for ($x = 1; $x <= 5; $x++) {
            echo "The number is = $x <br>";
        }
            // cara kerja nya sama seperti sebelumnya, yang membedakan hanya tempat menaruh variabel
            // jadi variabel, kondisi, dan auto increment berada pada satu baris yang sama
    echo "<br>";

    echo "<h3>PHP Foreach loop</h3>";
        $var = array("1" => "satu", "2" => 2, "3" => 'tiga', "4" => 3.5);

        foreach ($var as $value => $value2) {
            echo "$value = $value2 <br>";
        }
            // loop ini biasa digunakan untuk me looping sebuah array
            // variabel as value => value2
            // variabel adalah nama variabel yang memiliki array
            // value adalah nomor pada array tersebut
            // value2 adalah isi yang dimiliki array tersebut
    echo "<br>";

    echo "<h3>PHP Function</h3>";
        function func()
        {
            $nama = "Muhammad Rifan";
            echo "Hello, $nama";
        }

        func();
        echo "<br>";
        for ($x = 1; $x <= 5; $x++) {
            echo func()."<br>";
        }
            // function adalah sebuah wadah yang berisi beberapa script
            // function bisa digunakan lebih dari sekali
            // cara memanggilnya pun cukup mudah hanya perlu menulis nama function tersebut beserta kurung buka kurung tutup
?>
