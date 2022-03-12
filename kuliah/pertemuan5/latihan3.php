<?php 
$mahasiswa = [
	["Muhamad Rivan S", "117012728", "Rekayasa Perangkat Lunak", "xipan87@gmail.com"], 
	["Mochamad Andre R", "117012726", "Rekayasa Perangkat Lunak", "mandrersquad2@gmail.com"], 
	["Raden Muhamad Rofy", "117012734", "Rekayasa Perangkat Lunak", "rofy@gmail.com"]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Daftar Mahasiswa</title>
 </head>
 <body>
 	
 	<h1> Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
 	<ul>
 		<!-- Bisa Menggunakan ini -->
 		<!-- <?php foreach ($mahasiswa as $mhs ) : ?>
 			<li><?php echo "$mhs"; ?></li>
 		<?php endforeach; ?> -->
 		<!-- Atau Menggunakan Ini -->
 		<li>Nama    : <?php echo "$mhs[0]"; ?></li>
 		<li>NIS     : <?php echo "$mhs[1]"; ?></li>
 		<li>Jurusan : <?php echo "$mhs[2]"; ?></li>
 		<li>Email   : <?php echo "$mhs[3]"; ?></li>

 	</ul>
 <?php endforeach; ?>
 </body>
 </html>