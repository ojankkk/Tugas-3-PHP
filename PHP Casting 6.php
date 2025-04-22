<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// Menjadikan semua variabel bernilai NULL
$a = NULL;
$b = NULL;
$c = NULL;
$d = NULL;
$e = NULL;

// Atau jika ingin benar-benar menghapus variabelnya, gunakan unset()
// unset($a, $b, $c, $d, $e);

// Untuk memverifikasi tipe dan nilai
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

</body>
</html>
