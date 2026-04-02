@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="container-fluid p-4">
        <div class="d-md-flex justify-content-between align-items-center mb-4">
          <div>
            <h4 class="fw-bold mb-1">Arsip Data</h4>
            <p class="text-muted mb-0">Lihat dan pulihkan data yang telah dinonaktifkan.</p>
          </div>
          <div class="mt-3 mt-md-0">
            <button class="btn btn-outline-danger rounded-pill px-4 btn-sm">Kosongkan Arsip</button>
          </div>
        </div>

        <div class="archive-card">
          <div class="p-4 border-bottom d-flex justify-content-between align-items-center">
            <div class="input-group w-50">
              <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control bg-light border-0" placeholder="Cari di arsip..." />
            </div>
            <div class="d-flex gap-2">
              <button class="btn btn-light btn-sm border">Terbaru <i class="bi bi-chevron-down ms-1"></i></button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light">
                <tr class="small text-uppercase text-muted">
                  <th class="ps-4">Data / Nama</th>
                  <th>Kategori</th>
                  <th>Tanggal Arsip</th>
                  <th>Alasan</th>
                  <th class="text-end pe-4">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4">
                    <div class="fw-bold">Hendra Wijaya</div>
                    <div class="small text-muted">NIK: 3275XXXXXXXXXXXX</div>
                  </td>
                  <td><span class="badge badge-archive">Jemaat</span></td>
                  <td class="small">12 Feb 2026</td>
                  <td class="small italic text-muted">Pindah Wilayah</td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light rounded-pill px-3 me-1 text-primary"><i class="bi bi-arrow-counterclockwise"></i> Pulihkan</button>
                    <button class="btn btn-sm btn-light rounded-pill text-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4">
                    <div class="fw-bold">RT 005 / RW 01</div>
                    <div class="small text-muted">Wilayah Utara</div>
                  </td>
                  <td><span class="badge badge-archive">Zonasi</span></td>
                  <td class="small">05 Jan 2026</td>
                  <td class="small italic text-muted">Pemekaran Wilayah</td>
                  <td class="text-end pe-4">
                    <button class="btn btn-sm btn-light rounded-pill px-3 me-1 text-primary"><i class="bi bi-arrow-counterclockwise"></i> Pulihkan</button>
                    <button class="btn btn-sm btn-light rounded-pill text-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="p-4 text-center border-top bg-light-subtle">
            <p class="small text-muted mb-0">Data di arsip akan dihapus permanen secara otomatis setelah 90 hari.</p>
          </div>
        </div>
      </div>

@endsection