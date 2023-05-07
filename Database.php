<!DOCTYPE html>
<html>
<head>
    <title>Join Products and Categories Table</title>
    <link rel="stylesheet" href="https://arkatama.id/">
    <style>
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        table th {
            background-color: #f5f5f5;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Join Products and Categories Table</h1>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Name</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>1. Makanan</th>
                    <th>2. Minuman</th>
                    <th>3. Fashion</th>
                    <th>4. Elektronik</th>
                    <th>5. Perawatan Kecantikan</th>
                    <th>6. Perhiasan</th>
                    <th>7. Otomotif</th>
                    <th>8. Peralatan Rumah Tangga</th>
                    <th>9. Mainan</th>
                    <th>10. Hobi</th>
                    <th>11. Olahraga</th>
                    <th>12. Musik</th>
                    <th>13. Film</th>
                    <th>14. Buku</th>
                    <th>15. Teknologi</th>
                    <th>16. Pendidikan</th>
                    <th>17. Seni</th>
                    <th>18. Kesehatan</th>
                    <th>19. Bisnis</th>
                    <th>20. Keuangan</th>
                    <th>21. Investasi</th>
                    <th>22. Properti</th>
                    <th>23. Perjalanan</th>
                    <th>24. Hewan Peliharaan</th>
                    <th>25. Taman dan Pertamanan</th>
                    <th>26. Rumah dan Dekorasi</th>
                    <th>27. Pakaian Dalam</th>
                    <th>28. Peralatan Kamera</th>
                    <th>29. Peralatan Kesehatan</th>
                    <th>30. Komputer dan Aksesori</th>
                </tr>
            </thead>
            <tbody>




<?php
$host = 'localhost:3306';
$username = 'root';
$password = '';

// membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password);

// memeriksa apakah koneksi berhasil
if (!$conn) {
    die('Koneksi gagal:' . mysqli_connect_error());
}
echo 'Koneksi berhasil';

$sql = "INSERT INTO carousels(name,url, banner) VALUES('nama baru', 'baru')";

// fungsi untuk melakukan insert ke tabel categories
function insert_category($conn, $category_name) {
    // query untuk insert data ke tabel categories
    $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";

    // mengeksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data kategori berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

// fungsi untuk melakukan insert ke tabel products
function insert_product($conn, $product_name, $product_price, $category_id) {
    // query untuk insert data ke tabel products
    $sql = "INSERT INTO products (product_name, product_price, category_id) VALUES ('$product_name', '$product_price', '$category_id')";

    // mengeksekusi query
    if (mysqli_query($conn, $sql)) {
        echo "Data produk berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

?>




