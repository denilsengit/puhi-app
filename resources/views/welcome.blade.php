<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUHIUmat | Dashboard Professional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <style>
      :root {
        --sb-width: 280px;
        --sb-width-minimized: 90px;
        --primary-bg: #f0f2f5;
        --accent-color: #4361ee;
        --sidebar-dark: #1e293b;
        --sidebar-hover: #262f3f;
      }

      body {
        font-family: "Inter", sans-serif;
        background-color: var(--primary-bg);
        color: #334155;
        overflow-x: hidden;
      }

      /* Sidebar Modern */
      .sidebar {
        width: var(--sb-width);
        height: 100vh;
        position: fixed;
        background: linear-gradient(180deg, var(--sidebar-dark) 0%, #0f172a 100%);
        z-index: 1050;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 2px 0 15px rgba(0, 0, 0, 0.15);
        display: flex;
        flex-direction: column;
        overflow: hidden;
      }

      .sidebar.minimized {
        width: var(--sb-width-minimized);
      }

      .sidebar-header {
        padding: 1.25rem 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        flex-shrink: 0;
      }

      .sidebar.minimized .sidebar-header {
        padding: 0.875rem 0.5rem;
        flex-direction: column;
        justify-content: flex-start;
        gap: 12px;
      }

      .sidebar-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 1;
        min-width: 0;
      }

      .sidebar.minimized .sidebar-logo {
        gap: 0;
        flex: 0;
      }

      .sidebar-logo .logo-icon {
        background: linear-gradient(135deg, var(--accent-color), #6366f1);
        padding: 8px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.25rem;
        flex-shrink: 0;
        box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
      }

      .sidebar.minimized .sidebar-logo .logo-icon {
        margin: 0;
      }

      .sidebar-logo .logo-text {
        font-weight: 700;
        color: #fff;
        font-size: 1.125rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .sidebar.minimized .logo-text {
        display: none;
      }

      .sidebar-logo .logo-text .text-primary {
        color: var(--accent-color);
      }

      .sidebar-toggle-btn {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #94a3b8;
        padding: 0.5rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        flex-shrink: 0;
      }

      .sidebar.minimized .sidebar-toggle-btn {
        width: 36px;
        height: 36px;
        background: rgba(67, 97, 238, 0.2);
        border: 1px solid rgba(67, 97, 238, 0.3);
      }

      .sidebar-toggle-btn:hover {
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
      }

      .sidebar.minimized .sidebar-toggle-btn:hover {
        background: rgba(67, 97, 238, 0.3);
        color: var(--accent-color);
      }

      .nav-container {
        flex: 1;
        overflow-y: auto;
        padding: 1rem 0;
        scroll-behavior: smooth;
      }

      .nav-container::-webkit-scrollbar {
        width: 4px;
      }

      .nav-container::-webkit-scrollbar-track {
        background: transparent;
      }

      .nav-container::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
      }

      .nav-container::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.2);
      }

      .nav-section-title {
        text-transform: uppercase;
        font-size: 0.65rem;
        letter-spacing: 0.1em;
        color: #64748b;
        font-weight: 700;
        padding: 0.75rem 1.5rem;
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
      }

      .sidebar.minimized .nav-section-title {
        display: none;
      }

      .sidebar .nav-link {
        color: #94a3b8;
        padding: 0.85rem 1.25rem;
        margin: 0.25rem 0.75rem;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 12px;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        font-weight: 500;
        font-size: 0.95rem;
        text-decoration: none;
      }

      .sidebar.minimized .nav-link {
        justify-content: center;
        padding: 0.85rem 0.75rem;
        margin: 0.3rem 0.65rem;
      }

      .sidebar.minimized .nav-link span {
        display: none;
      }

      .sidebar.minimized .nav-link {
        width: 50px;
        height: 50px;
        padding: 0;
      }

      .sidebar-nav-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
      }

      .sidebar .nav-link:hover {
        background: rgba(67, 97, 238, 0.1);
        color: #fff;
        padding-left: 1.5rem;
      }

      .sidebar.minimized .nav-link:hover {
        background: rgba(67, 97, 238, 0.15);
        padding-left: 0.75rem;
      }

      .sidebar .nav-link.active {
        background: var(--accent-color);
        color: #fff;
        box-shadow: 0 4px 15px rgba(67, 97, 238, 0.4);
      }

      .sidebar .nav-link.active::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 4px;
        height: 24px;
        background: #fff;
        border-radius: 0 2px 2px 0;
      }

      .sidebar.minimized .nav-link.active::before {
        display: none;
      }

      /* Content Area */
      .main-wrapper {
        margin-left: var(--sb-width);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .main-wrapper.sidebar-minimized {
        margin-left: var(--sb-width-minimized);
      }

      /* Custom Navbar */
      .top-navbar {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 1rem 2rem;
        position: sticky;
        top: 0;
        z-index: 1000;
      }

      /* Modern Cards */
      .card-stat {
        border: none;
        border-radius: 20px;
        background: #fff;
        padding: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transition: transform 0.3s ease;
      }

      .card-stat:hover {
        transform: translateY(-5px);
      }

      .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
      }

      /* Table Styling */
      .table-card {
        border: none;
        border-radius: 20px;
        background: #fff;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
      }

      .table thead th {
        background: #f8fafc;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        color: #64748b;
        padding: 1.2rem;
        border-bottom: 1px solid #f1f5f9;
      }

      .table tbody td {
        padding: 1.2rem;
        border-bottom: 1px solid #f8fafc;
      }

      /* Footer */
      .footer {
        margin-top: auto;
        padding: 1.5rem 2rem;
        background: #fff;
        border-top: 1px solid #f1f5f9;
      }

      /* Responsive */
      @media (max-width: 991.98px) {
        .sidebar {
          margin-left: calc(-1 * var(--sb-width));
          width: var(--sb-width);
        }
        .sidebar.show {
          margin-left: 0;
        }
        .main-wrapper {
          margin-left: 0;
        }
        .main-wrapper.sidebar-minimized {
          margin-left: 0;
        }
      }

      /* Sidebar Footer */
      .sidebar-footer {
        padding: 1.25rem 0.75rem;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        flex-shrink: 0;
        margin-top: auto;
      }

      .sidebar-footer-content {
        background: rgba(67, 97, 238, 0.08);
        border: 1px solid rgba(67, 97, 238, 0.2);
        border-radius: 12px;
        padding: 0.875rem;
        text-align: center;
        font-size: 0.8rem;
        color: #94a3b8;
        font-weight: 500;
      }

      .sidebar.minimized .sidebar-footer-content {
        padding: 0.65rem;
      }

      .sidebar.minimized .sidebar-footer-content p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 0.7rem;
      }
    </style>
  </head>
  <body>
    <nav class="sidebar" id="mainSidebar">
      <!-- Sidebar Header with Logo and Minimize Button -->
      <div class="sidebar-header">
        <div class="sidebar-logo">
          <div class="logo-icon">
            <i class="bi bi-intersect"></i>
          </div>
          <h4 class="logo-text mb-0">PUHI</h4>
        </div>
        <button class="sidebar-toggle-btn" id="sidebarMinimizeBtn" title="Minimize Sidebar">
          <i class="bi bi-chevron-left"></i>
        </button>
      </div>

      <!-- Navigation Container -->
      <div class="nav-container">
        <div class="nav flex-column">
          <!-- Menu Utama Section -->
          <small class="nav-section-title">Menu Utama</small>
          <a href="#" class="nav-link active" title="Ringkasan">
            <span class="sidebar-nav-icon"><i class="bi bi-grid-fill"></i></span>
            <span>Ringkasan</span>
          </a>
          <a href="data-umat.html" class="nav-link" title="Data Umat">
            <span class="sidebar-nav-icon"><i class="bi bi-people-fill"></i></span>
            <span>Data Umat</span>
          </a>
          <a href="zonasi-wilayah.html" class="nav-link" title="Zonasi Wilayah">
            <span class="sidebar-nav-icon"><i class="bi bi-map-fill"></i></span>
            <span>Zonasi Wilayah</span>
          </a>

          <!-- Laporan Section -->
          <small class="nav-section-title">Laporan</small>
          <a href="statistik-bulanan.html" class="nav-link" title="Statistik Bulanan">
            <span class="sidebar-nav-icon"><i class="bi bi-file-earmark-bar-graph-fill"></i></span>
            <span>Statistik Bulanan</span>
          </a>
          <a href="arsip-data.html" class="nav-link" title="Arsip Data">
            <span class="sidebar-nav-icon"><i class="bi bi-archive-fill"></i></span>
            <span>Arsip Data</span>
          </a>
        </div>
      </div>

      <!-- Sidebar Footer -->
      <div class="sidebar-footer">
        <div class="sidebar-footer-content">
          <p class="mb-0">v1.0.0</p>
        </div>
      </div>
    </nav>

    <div class="main-wrapper">
      <header class="top-navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <button class="btn btn-light d-lg-none me-3" id="sidebarToggle">
            <i class="bi bi-list fs-4"></i>
          </button>
          <div class="input-group d-none d-md-flex" style="width: 300px">
            <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control bg-light border-0" placeholder="Cari data umat..." />
          </div>
        </div>

        <div class="d-flex align-items-center gap-4">
          <div class="dropdown">
            <div class="position-relative cursor-pointer" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
              <i class="bi bi-bell-fill fs-5 text-muted"></i>
              <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">Notifikasi Baru</span>
              </span>
            </div>

            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 mt-3 p-0 overflow-hidden" aria-labelledby="notificationDropdown" style="width: 350px">
              <li class="p-3 border-bottom d-flex justify-content-between align-items-center bg-light-subtle">
                <h6 class="fw-bold mb-0">Notifikasi</h6>
                <span class="badge bg-primary-subtle text-primary rounded-pill small">3 Baru</span>
              </li>

              <div style="max-height: 400px; overflow-y: auto">
                <li>
                  <a class="dropdown-item p-3 d-flex gap-3 border-bottom active-unread" href="#">
                    <div class="icon-circle bg-primary-subtle text-primary flex-shrink-0" style="width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center">
                      <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div>
                      <p class="mb-1 small fw-bold text-dark">Umat Baru Terdaftar</p>
                      <p class="mb-1 text-muted small text-wrap">Siti Aminah telah mendaftar di Wilayah Utara.</p>
                      <small class="text-primary fw-semibold" style="font-size: 0.7rem">2 menit yang lalu</small>
                    </div>
                  </a>
                </li>

                <li>
                  <a class="dropdown-item p-3 d-flex gap-3 border-bottom" href="#">
                    <div class="icon-circle bg-warning-subtle text-warning flex-shrink-0" style="width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center">
                      <i class="bi bi-shield-exclamation"></i>
                    </div>
                    <div>
                      <p class="mb-1 small fw-bold text-dark">Perlu Verifikasi</p>
                      <p class="mb-1 text-muted small text-wrap">5 Data Umat baru menunggu verifikasi admin.</p>
                      <small class="text-muted" style="font-size: 0.7rem">1 jam yang lalu</small>
                    </div>
                  </a>
                </li>

                <li>
                  <a class="dropdown-item p-3 d-flex gap-3 border-bottom text-wrap" href="#">
                    <div class="icon-circle bg-info-subtle text-info flex-shrink-0" style="width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center">
                      <i class="bi bi-info-circle-fill"></i>
                    </div>
                    <div>
                      <p class="mb-1 small fw-bold text-dark">Pembaruan Sistem</p>
                      <p class="mb-1 text-muted small text-wrap">PUHIUmat telah diperbarui ke versi 2.4.0.</p>
                      <small class="text-muted" style="font-size: 0.7rem">Kemarin, 14:20</small>
                    </div>
                  </a>
                </li>
              </div>

              <li class="p-2 text-center bg-light">
                <a href="log-aktivitas.html" class="text-decoration-none small fw-bold text-primary">Lihat Semua Aktivitas</a>
              </li>
            </ul>
          </div>
          <div class="vr mx-2 h-25"></div>
          <div class="dropdown">
            <div class="d-flex align-items-center gap-3 cursor-pointer" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">
              <div class="text-end d-none d-sm-block">
                <p class="mb-0 small fw-bold">Budi Pratama</p>
                <p class="mb-0 text-muted" style="font-size: 0.75rem">Administrator</p>
              </div>
              <div class="position-relative">
                <img src="https://ui-avatars.com/api/?name=Budi+Pratama&background=4361ee&color=fff" class="rounded-3 shadow-sm border border-2 border-white" width="40" height="40" />
                <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-white rounded-circle shadow-sm"></span>
              </div>
            </div>

            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 mt-3 py-3" aria-labelledby="profileDropdown" style="min-width: 230px">
              <li class="px-4 py-2 mb-2">
                <h6 class="fw-bold mb-0">Budi Pratama</h6>
                <small class="text-muted">budi.p@PUHI.com</small>
              </li>
              <li><hr class="dropdown-divider opacity-50" /></li>
              <li>
                <a class="dropdown-item py-2 px-4 d-flex align-items-center gap-3" href="edit-profile.html">
                  <i class="bi bi-person-circle text-primary fs-5"></i>
                  <span>Lihat Profil</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item py-2 px-4 d-flex align-items-center gap-3" href="edit-profile.html#pills-security">
                  <i class="bi bi-shield-lock text-primary fs-5"></i>
                  <span>Keamanan</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item py-2 px-4 d-flex align-items-center gap-3" href="arsip-data.html">
                  <i class="bi bi-clock-history text-primary fs-5"></i>
                  <span>Log Aktivitas</span>
                </a>
              </li>
              <li><hr class="dropdown-divider opacity-50" /></li>
              <li>
                <a class="dropdown-item py-2 px-4 d-flex align-items-center gap-3 text-danger fw-bold" href="login.html">
                  <i class="bi bi-box-arrow-right fs-5"></i>
                  <span>Keluar Aplikasi</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </header>

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
              <button class="btn btn-primary btn-sm px-3"><i class="bi bi-plus-lg me-1"></i> Tambah Baru</button>
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

      <footer class="footer">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0 text-muted">&copy; 2023 - 2026 <strong>PUHI</strong>. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <a href="#" class="text-decoration-none text-muted me-3">Panduan</a>
            <a href="#" class="text-decoration-none text-muted">Dukungan</a>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Sidebar Minimize/Expand Functionality
      const sidebar = document.getElementById("mainSidebar");
      const mainWrapper = document.querySelector(".main-wrapper");
      const minimizeBtn = document.getElementById("sidebarMinimizeBtn");
      const toggleBtn = document.getElementById("sidebarToggle");

      // Load sidebar state from localStorage
      const sidebarMinimized = localStorage.getItem("sidebarMinimized") === "true";
      if (sidebarMinimized) {
        sidebar.classList.add("minimized");
        mainWrapper.classList.add("sidebar-minimized");
        minimizeBtn.innerHTML = '<i class="bi bi-chevron-right"></i>';
      }

      // Minimize button toggle
      minimizeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("minimized");
        mainWrapper.classList.toggle("sidebar-minimized");

        const isMinimized = sidebar.classList.contains("minimized");
        minimizeBtn.innerHTML = isMinimized ? '<i class="bi bi-chevron-right"></i>' : '<i class="bi bi-chevron-left"></i>';

        // Save state to localStorage
        localStorage.setItem("sidebarMinimized", isMinimized);
      });

      // Mobile sidebar toggle
      if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
          sidebar.classList.toggle("show");
        });
      }

      // Close sidebar on window resize if needed
      window.addEventListener("resize", () => {
        if (window.innerWidth >= 992) {
          sidebar.classList.remove("show");
        }
      });

      // Add tooltip titles for minimized sidebar icons
      document.querySelectorAll(".nav-link").forEach((link) => {
        const span = link.querySelector("span:last-child");
        if (span) {
          link.title = span.textContent.trim();
        }
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Helper untuk membuat Gradient
        const createGradient = (ctx, colorStart, colorEnd) => {
          const gradient = ctx.createLinearGradient(0, 0, 0, 400);
          gradient.addColorStop(0, colorStart);
          gradient.addColorStop(1, colorEnd);
          return gradient;
        };

        // --- MODERN DONUT CHART ---
        const ctxDonut = document.getElementById("modernDonutChart").getContext("2d");
        new Chart(ctxDonut, {
          type: "doughnut",
          data: {
            labels: ["Dewasa", "Anak", "Lansia"],
            datasets: [
              {
                data: [45, 30, 25],
                backgroundColor: ["#4361ee", "#2ec4b6", "#f1c40f"],
                hoverOffset: 15,
                borderWidth: 4,
                borderColor: "#ffffff",
                borderRadius: 10,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "80%",
            plugins: {
              legend: { display: false },
            },
          },
        });

        // --- MODERN AREA CHART (Line Chart) ---
        const ctxArea = document.getElementById("modernAreaChart").getContext("2d");

        // Gradient untuk area bawah garis
        const fillGradient = createGradient(ctxArea, "rgba(67, 97, 238, 0.3)", "rgba(67, 97, 238, 0)");

        new Chart(ctxArea, {
          type: "line",
          data: {
            labels: ["Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [
              {
                label: "Umat Baru",
                data: [40, 65, 52, 88, 75, 105],
                fill: true,
                backgroundColor: fillGradient,
                borderColor: "#4361ee",
                borderWidth: 3,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#4361ee",
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                tension: 0.4, // Membuat garis melengkung halus
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                backgroundColor: "#1e293b",
                padding: 12,
                titleFont: { size: 14 },
                callbacks: {
                  label: (context) => ` +${context.raw} Umat`,
                },
              },
            },
            scales: {
              y: {
                beginAtZero: true,
                grid: { color: "#f1f5f9", drawBorder: false },
                ticks: { color: "#94a3b8", font: { size: 11 } },
              },
              x: {
                grid: { display: false },
                ticks: { color: "#94a3b8", font: { size: 11 } },
              },
            },
          },
        });
      });
    </script>
  </body>
</html>
