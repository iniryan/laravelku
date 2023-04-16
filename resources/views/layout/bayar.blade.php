
@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h1>Halaman Bayar</h1>
        <a href="/bayar/add" class="btn btn-primary">Tambahkan Pembayaran</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Email</th>
                <th scope="col">Telepon</th>
                <th scope="col">Jumlah Bayar</th>
                <th scope="col">Status Bayar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->total_bayar }}</td>
                    <td>{{ $student->status_bayar }}</td>
                    <td>
                        <a href="/bayar/{{ $student->id }}/edit" class="btn btn-warning">Edit</a>
                        <!-- <a href="/bayar/delete/{{ $student->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a> -->
                        <form action="/bayar/{{ $student->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
