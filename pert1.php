<?php
    $arr = [
	[
	'nama' => 'rafi',
	'nim' => '1234',
	'usia' => '22'
	],
	[
	'nama' => 'cahya',
	'nim' => '1233',
	'usia' => '21'
	],
	[
	'nama' => 'putra',
	'nim' => '1235',
	'usia' => '21'
	]
    ];
	
    
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1>Data Mahasiswa</h1>
		<table>
			<thead>
				<tr>
					<th>Nama</th>
					<th>NIM</th>
					<th>Umur</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>
