<!DOCTYPE html>
<html>
<head>
    <title>Form Pendataan Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    include "koneksi.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title=input($_POST["title"]);
        $author=input($_POST["author"]);
        $published_year=input($_POST["published_year"]);
        $isbn=input($_POST["isbn"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into manajemen_buku (title,author,published_year,isbn) values
		('$title','$author','$published_year','$isbn')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data Buku</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Masukan Title" required />

        </div>
        <div class="form-group">
            <label>Author:</label>
            <input type="text" name="author" class="form-control" placeholder="Masukan Title Author" required/>
        </div>
       <div class="form-group">
            <label>Published Year :</label>
            <input type="text" name="published_year" class="form-control" placeholder="Masukan Published Year" required/>
        </div>
                </p>
        <div class="form-group">
            <label>ISBN:</label>
            <input type="text" name="isbn" class="form-control" placeholder="Masukan ISBN" required/>
        </div>      

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>