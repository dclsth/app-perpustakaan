<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anggota</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background: #f4f4f4; }
        .success { color: #15803d; background: #dcfce7; padding: 10px; border-radius: 4px; margin-bottom: 20px; }
        .search-box { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Daftar Anggota</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <p><a href="{{ route('members.create') }}">+ Tambah Anggota Baru</a></p>

    <!-- Form Pencarian -->
    <div class="search-box">
        <form action="{{ route('members.index') }}" method="GET">
            <input type="text" name="search" placeholder="Cari nama anggota..." value="{{ request('search') }}">
            <button type="submit">Cari</button>
            @if(request('search'))
                <a href="{{ route('members.index') }}">Reset</a>
            @endif
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $member['id'] }}</td>
                    <td>{{ $member['nama'] }}</td>
                    <td>{{ $member['nim'] }}</td>
                    <td>{{ ucfirst($member['status']) }}</td>
                    <td>
                        <a href="{{ route('members.show', $member['id']) }}">Detail</a> |
                        <a href="{{ route('members.edit', $member['id']) }}">Edit</a> |
                        <form action="{{ route('members.destroy', $member['id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus anggota ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:blue; text-decoration:underline; cursor:pointer; padding:0; font-family:inherit;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center;">Tidak ada data anggota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Navigasi Pagination dengan Parameter Pencarian -->
    <div style="margin-top: 20px;">
        {{ $members->appends(request()->query())->links() }}
    </div>

</body>
</html>