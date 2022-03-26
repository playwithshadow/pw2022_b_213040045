<?php 
$mahasiswa = [
  [
      "nama" => "Rivan", 
      "npm" => "213040045", 
      "email" => "rivan.213040045@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "img/ppanime.jpg"
  ],
  [
      "nama" => "Sahronie",
      "npm" => "213040043", 
      "email" => "sahronie.213040043@mail.unpas.ac.id", 
      "jurusan" => "Teknik Industri",
      "gambar" => "img/anime1.jpg"
  ],
  [
      "nama" => "Ammar",
      "npm" => "213040051", 
      "email" => "ammar.213040051@mail.unpas.ac.id", 
      "jurusan" => "Teknik Mesin",
      "gambar" => "img/anime2.jpg"
  ],
  [
      "nama" => "Jamjam",
      "email" => "jamjam.213040043@mail.unpas.ac.id", 
      "npm" => "213040057", 
      "jurusan" => "Teknik Lingkungan",
      "gambar" => "img/anime3.jpg"
  ]

];

// var_dump($mahasiswa[1]["email"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
  <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
            <?php foreach($mahasiswa as $mhs) : ?>
              <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td><img src="<?= $mhs['gambar']; ?>" width="50px" class="rounded-circle"></td>
                <td><?= $mhs["nama"]; ?></td>
                <td>
                <a href="kuliah_latihan4.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>" class="btn badge bg-info">Detail</a>
                  <a href="" class="btn badge bg-warning">Edit</a>
                  <a href="" class="btn badge bg-danger">Delete</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>