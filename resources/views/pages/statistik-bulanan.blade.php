@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="container-fluid p-4">
        <div class="d-md-flex justify-content-between align-items-end mb-4">
          <div>
            <h4 class="fw-bold mb-1">Analisis Pertumbuhan Umat</h4>
            <p class="text-muted mb-0">Laporan mendalam tren bulanan dan demografi wilayah.</p>
          </div>
          <div class="mt-3 mt-md-0 d-flex gap-2">
            <select class="form-select border-0 shadow-sm bg-white rounded-pill px-4" style="width: 200px">
              <option>Tahun 2026</option>
              <option>Tahun 2025</option>
            </select>
            <button class="btn btn-primary rounded-pill px-4 shadow-sm"><i class="bi bi-printer me-2"></i>Cetak Laporan</button>
          </div>
        </div>

        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <div class="stat-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted small mb-1 fw-bold">PERTUMBUHAN BULAN INI</p>
                  <h2 class="fw-bold mb-0 text-primary">+124</h2>
                </div>
                <span class="badge bg-success-subtle text-success">+12% <i class="bi bi-graph-up"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted small mb-1 fw-bold">TOTAL VERIFIKASI</p>
                  <h2 class="fw-bold mb-0 text-success">892</h2>
                </div>
                <span class="badge bg-primary-subtle text-primary">High Accuracy</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stat-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted small mb-1 fw-bold">RATA-RATA PER RT</p>
                  <h2 class="fw-bold mb-0 text-dark">52.4</h2>
                </div>
                <i class="bi bi-info-circle text-muted"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg-8">
            <div class="stat-card h-100">
              <div class="d-flex justify-content-between mb-4">
                <h6 class="fw-bold">Grafik Tren Pendaftaran Jemaat</h6>
                <div class="dropdown">
                  <button class="btn btn-light btn-sm border-0" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                </div>
              </div>
              <div class="chart-container">
                <canvas id="monthlyGrowthChart"></canvas>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="stat-card h-100 text-center">
              <h6 class="fw-bold mb-4 text-start">Komposisi Gender</h6>
              <div class="chart-container" style="height: 220px">
                <canvas id="genderPieChart"></canvas>
              </div>
              <div class="d-flex justify-content-around mt-4">
                <div>
                  <p class="text-muted small mb-0">Laki-laki</p>
                  <h5 class="fw-bold">54%</h5>
                </div>
                <div class="vr"></div>
                <div>
                  <p class="text-muted small mb-0">Perempuan</p>
                  <h5 class="fw-bold">46%</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection