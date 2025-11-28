<?php
require 'template/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if($page == 'home'){
    echo "<h2>Selamat datang di Sistem Modular PHP</h2>";
    echo "<p>Gunakan menu di atas untuk mengelola data.</p>";
}
elseif($page == 'user/list'){
    require 'user/list.php';
}
elseif($page == 'user/tambah'){
    require 'user/tambah.php';
}
elseif($page == 'user/edit'){
    require 'user/edit.php';
}
elseif($page == 'user/hapus'){
    require 'user/hapus.php';
}
else{
    echo "<h2>Halaman tidak ditemukan</h2>";
}

require 'template/footer.php';
