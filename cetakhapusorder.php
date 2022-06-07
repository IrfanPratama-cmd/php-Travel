<?php 
require('database.php');
extract($_POST);
$nama;
$email;
$telp;
$travel;
$destinasi;
$querydelete = "DELETE FROM orders WHERE telp='$telp'";
$hasildelete = mysqli_query($conn,$querydelete);
if($hasildelete==1){
    echo "
            <script>
                alert('Hapus berhasil!');
                document.location.href = 'hasilorder.php';
            </script>
        ";
}else{
    echo "
            <script>
                alert('Hapus gagal!');
                document.location.href = 'hasilorder.php';
            </script>
        ";
}
?>