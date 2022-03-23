<!DOCTYPE html>
<html>
<head>
	<title>Data Admin Peduli Diri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
        <h4>Data Admin Peduli Diri</h4>
    </center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th align="center">No</th>
                <th><center>  NIK </center></th>
				<th><center>  Role </center></th>
				<th><center>  Nama </center></th>
				<th><center>  Email </center></th>
				<th><center>  Telepon </center></th>
				<th><center>  Alamat </center></th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($admin as $p)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$p->nik}}</td>
				<td>{{$p->level}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->no_telp}}</td>
				<td>{{$p->alamat}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>