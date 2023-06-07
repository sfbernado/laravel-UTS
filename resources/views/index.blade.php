@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Dosen</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tabel Dosen</h1>
        <div class="text-right">
            <a href="{{ route('dosen.create') }}" class="btn btn-primary">+ Data Dosen</a>
            <a href="{{ route('dosen.index') }}" class="btn btn-danger">Logout</a>
        </div>
        <br/>
        
        @if(count($data) > 0)
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $dosen)
                <tr>
                    <td>{{ $dosen->id }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->fakultas }}</td>
                    <td>
                    <a class="btn btn-success" href="{{ route('dosen.edit', $dosen->id) }}">Edit</a>
                    <form  method="POST" action="{{ route('dosen.destroy', $dosen->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>