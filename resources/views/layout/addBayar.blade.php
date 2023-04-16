@extends('layout.app')

@section('content')

    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Tambahkan Pembayaran</h4>
        <form action="/bayar" method="POST" class="w-50 mt-3">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM kamu">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkapmu">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: email@example.com">
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="Masukkan nomor telepon aktif">
            </div>
            <div class="mb-3">
                <label for="status_bayar" class="form-label">Status Bayar</label>
                <select class="form-select" aria-label="Default select example" id="status_bayar" name="status_bayar">
                    <option value="Belum Bayar" selected>Belum Bayar</option>
                    <option value="Sudah Bayar">Sudah Bayar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="total_bayar" class="form-label">Total Bayar</label>
                <input type="text" class="form-control" id="total_bayar" name="total_bayar" value="300000" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="/bayar" class="btn btn-secondary">Kembali</a>
        </form>
    </div>


@endsection