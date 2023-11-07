<?php

require 'Function.php';

$kodeboneka = $_GET["Kode"];

if( hapus($kodeboneka) > 0){
    echo "
            <script>
            alert('data berhasil dihapus!');
            document.location.href = 'Index.php'
            </script>
        ";

} else{
    echo "
            <script>
            alert('data gagal dihapus!');
            document.location.href = 'Index.php'
            </script>
        ";
}

?>