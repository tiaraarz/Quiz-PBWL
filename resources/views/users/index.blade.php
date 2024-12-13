@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Users</h2>
    <a href="{{ url('/users/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah user</button></a>
    <table class="table table-bordered" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2); border: solid 2px black;">
        <tr style="text-align:center;">
            <th>USER ID</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>POS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->user_id }}</td>
            <td>{{ $row->user_nama }}</td>
            <td>{{ $row->user_email }}</td>
            <td>{{ $row->user_pass }}</td>
            <td>{{ $row->user_alamat }}</td>
            <td>{{ $row->user_hp }}</td>
            <td>{{ $row->user_pos }}</td>
            <td><a href="{{ url('users/' . $row->user_id . '/edit') }}"><button>Edit</button></a></td>
                <td>
                    <form action="{{ url('users/' . $row->user_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection