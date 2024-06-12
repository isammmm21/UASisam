<h2>Tampil Barang</h2>
<?php

$s = "SELECT * FROM tb_barang";
$q = mysqli_query($cn, $s) or die (mysqli_error($cn));
$jumlah_barang = mysqli_num_rows($q);
if(mysqli_num_rows($q)) {
    echo 'barang ada sebanyak ' . $jumlah_barang;

    //looping dg while 
    while ($d=mysqli_fetch_assoc($q)){

    // teknik debugging
    // echo '<pre>';
    // print_r($d);
    //echo'</pre>';
    // exit;
    
    


        // echo '<br>barang zzz ';

        // tampil sebagai card
        echo"
        <div class=card>
        <div>$d[nama_barang]</div>
        <img src = 'img/$d[gambar]' class='gambar' />
        <div>$d[harga_jual]</div>

        <a href ='order.php? kode_barang=$d[kode_barang]'>
        <button>Beli</button>
        </a>
        
        <button>Edit</button>
        <button>Delete</button>
        </div>
        ";
    }

    // tampil barang
    echo "
    <div class='card form-add'>
    <h3> Tambah barang</h3>
    <input type=text name=nama_barang placeholder='nama barang'>
    <br>
    <input type=file name=gambar accept='.jpg,.png'>
    <br>
    <input type=number name=harga_jual placeholder='harga jual'>
    <input type=number name=harga_beli placeholder='harga beli'>
    <input type=number name=satuan placeholder='satuan'>
    <input type=number name=kategori placeholder='kategori'>



    <button>Add</button>
    </div>
    ";

} else {
    echo 'barang kosong';
    }