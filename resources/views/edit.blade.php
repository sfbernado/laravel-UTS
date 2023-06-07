<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Dosen</title>
        <!-- Panggil file CSS Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Form Update Dosen</h1>

        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif

         <!-- Tampilkan form -->
        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nip">NIP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" value="{{ $dosen->nip }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $dosen->nama }}">
        </div>
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="{{ $dosen->fakultas }}">
        </div>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>