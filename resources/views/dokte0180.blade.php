<!DOCTYPE html>
<html>
<head>
	<title>DOKTER</title>
</head>
<body>
 
	<h3>Data Dokter</h3>

    <a href=""> Tambah Dokter</a>
	
	<br/>
    <br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Jabatan</th>
            <th>Aksi</th>

		</tr>
		@foreach($dokter as $a)
		<tr>
			<td>{{ $a->id }}</td>
			<td>{{ $a->nama }}</td>
			<td>{{ $a->jabatan }}</td>
			<td>
                <a href="">Edit </a>
                |
                <a href=""> Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>
</body>
</html>