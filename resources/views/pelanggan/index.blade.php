@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; font-family:serif;">Pelanggan</h2>
    <a href="{{ url('/pelanggan/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Pelanggan</button></a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
<table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
                <th>PELANGGAN ID</th>
                <th>GOLONGAN</th>
                <th>USER</th>
                <th>NO PELANGGAN</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
                <th>KTP</th>
                <th>SERI</th> 
                <th>METERAN</th> 
                <th>AKTIF</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pel_id }}</td> 
                <td>{{ $row->pel_gol_id }}</td>
                <td>{{ $row->pel_user_id }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->pel_ktp }}</td> <!-- Menampilkan nomor KTP -->
                <td>{{ $row->pel_seri }}</td> 
                <td>{{ $row->pel_meteran }}</td> 
                <td>{{ $row->pel_aktif ? 'Aktif' : 'Non-Aktif' }}</td> <!-- Menampilkan status aktif -->
                <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}"><button>Edit</button></a></td>
                <td>
                    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
