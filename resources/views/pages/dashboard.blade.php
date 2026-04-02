@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="container-fluid p-4">
        <div class="mb-4">
          <h4 class="fw-bold mb-1">Ikhtisar Data Umat</h4>
          <p class="text-muted">Data diperbarui secara real-time pada 4 Februari 2026.</p>
        </div>

        <div class="row g-4 mb-5">
          <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
              <div class="icon-circle bg-primary-subtle text-primary"><i class="bi bi-people"></i></div>
              <div>
                <p class="text-muted small mb-0">Total Umat</p>
                <h4 class="fw-bold mb-0">50</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
              <div class="icon-circle bg-success-subtle text-success"><i class="bi bi-person-check"></i></div>
              <div>
                <p class="text-muted small mb-0">Terverifikasi</p>
                <h4 class="fw-bold mb-0">9,210</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
              <div class="icon-circle bg-warning-subtle text-warning"><i class="bi bi-house-door"></i></div>
              <div>
                <p class="text-muted small mb-0">Total Kepala Keluarga</p>
                <h4 class="fw-bold mb-0">3,120</h4>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-stat d-flex align-items-center gap-3">
              <div class="icon-circle bg-danger-subtle text-danger"><i class="bi bi-geo-alt"></i></div>
              <div>
                <p class="text-muted small mb-0">Wilayah / Tempek</p>
                <h4 class="fw-bold mb-0">5</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4 mb-4">
          <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="fw-bold mb-0">Komposisi Usia</h6>
                <i class="bi bi-info-circle text-muted" data-bs-toggle="tooltip" title="Data berdasarkan kategori umur"></i>
              </div>
              <div style="height: 250px; position: relative">
                <canvas id="modernDonutChart"></canvas>
              </div>
              <div class="mt-4">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-2 border rounded-3 text-center">
                      <small class="text-muted d-block">Dewasa</small>
                      <span class="fw-bold" style="color: #4361ee">45%</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border rounded-3 text-center">
                      <small class="text-muted d-block">Anak</small>
                      <span class="fw-bold" style="color: #2ec4b6">30%</span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-2 border rounded-3 text-center">
                      <small class="text-muted d-block">Lansia</small>
                      <span class="fw-bold" style="color: #ffc107">25%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="fw-bold mb-0">Tren Pertumbuhan Umat</h6>
                <select class="form-select form-select-sm w-auto border-0 bg-light">
                  <option>6 Bulan Terakhir</option>
                  <option>1 Tahun Terakhir</option>
                </select>
              </div>
              <div style="height: 300px">
                <canvas id="modernAreaChart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="table-card">
          <div class="p-4 d-md-flex justify-content-between align-items-center border-bottom">
            <h5 class="fw-bold mb-0">Daftar Umat Terbaru</h5>
            <div class="d-flex gap-2 mt-3 mt-md-0">
              <button class="btn btn-light border btn-sm"><i class="bi bi-funnel me-1"></i> Filter</button>
            </div>
          </div>
          <div class="table-responsive text-nowrap">
            <table class="table mb-0 table-hover">
              <thead>
                <tr>
                  <th>Identitas</th>
                  <th>No. Telepon</th>
                  <th>Wilayah</th>
                  <th>Status KK</th>
                  <th>Verifikasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center gap-3">
                      <div class="avatar-sm bg-light p-2 rounded text-primary fw-bold">RN</div>
                      <div>
                        <p class="mb-0 fw-bold">Rahmat Nugraha</p>
                        <small class="text-muted">3275012309880001</small>
                      </div>
                    </div>
                  </td>
                  <td>0812-3456-7890</td>
                  <td>RT 05 / RW 01</td>
                  <td><span class="badge bg-light text-dark border">Kepala Keluarga</span></td>
                  <td><span class="badge bg-success-subtle text-success">Verified</span></td>
                  <td>
                    <button class="btn btn-sm btn-light"><i class="bi bi-pencil-square"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection