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
    
    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="select * from manajemen_buku where id=$id";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
        $title=input($_POST["title"]);
        $author=input($_POST["author"]);
        $published_year=input($_POST["published_year"]);
        $isbn=input($_POST["isbn"]);
        
        $sql="update manajemen_buku set
			title='$title',
			author='$author',
			published_year='$published_year',
			isbn='$isbn'
			where id=$id";
        
        $hasil=mysqli_query($kon,$sql);
        
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data Buku</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>title:</label>
            <input type="text" name="title" class="form-control" placeholder="Masukan title" required />

        </div>
        <div class="form-group">
            <label>author:</label>
            <input type="text" name="author" class="form-control" placeholder="Masukan title author" required/>
        </div>
        <div class="form-group">
            <label>published_year :</label>
            <input type="text" name="published_year" class="form-control" placeholder="Masukan published_year" required/>
        </div>
        <div class="form-group">
            <label>isbn:</label>
            <input type="text" name="isbn" class="form-control" placeholder="Masukan isbn" required/>
        </div>

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>