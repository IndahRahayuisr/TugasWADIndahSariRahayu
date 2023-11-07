<?php

require 'Function.php';

$kodeboneka = $_GET["kode"];

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