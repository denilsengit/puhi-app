<nav class="sidebar" id="mainSidebar">

  <div class="sidebar-header">
    <div class="sidebar-logo">
      <div class="logo-icon">
        <i class="bi bi-intersect"></i>
      </div>
      <h4 class="logo-text mb-0">PUHI</h4>
    </div>

    <button class="sidebar-toggle-btn" id="sidebarMinimizeBtn">
      <i class="bi bi-chevron-left"></i>
    </button>
  </div>

  <div class="nav-container">
    <div class="nav flex-column">

      <small class="nav-section-title">Menu Utama</small>

<a href="{{ route('dashboard') }}" 
   class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <i class="bi bi-grid-fill"></i>
    <span>Ringkasan</span>
</a>

<a href="{{ route('data-umat') }}" 
   class="nav-link {{ request()->routeIs('data-umat') ? 'active' : '' }}">
    <i class="bi bi-people-fill"></i>
    <span>Data Umat</span>
</a>

<a href="{{ route('zonasi-wilayah') }}" 
   class="nav-link {{ request()->routeIs('zonasi-wilayah') ? 'active' : '' }}">
    <i class="bi bi-map-fill"></i>
    <span>Zonasi Wilayah</span>
</a>

      <small class="nav-section-title">Laporan</small>

      <a href="{{ route('statistik-bulanan') }}" 
   class="nav-link {{ request()->routeIs('statistik-bulanan') ? 'active' : '' }}">
<i class="bi bi-file-earmark-bar-graph-fill"></i>
    <span>Statistik Bulanan</span>
</a>

      <a href="{{ route('arsip-data') }}" 
   class="nav-link {{ request()->routeIs('arsip-data') ? 'active' : '' }}">
<i class="bi bi-archive-fill"></i>
    <span>Arsip Data</span>
</a>

    </div>
  </div>

  <div class="sidebar-footer">
    <div class="sidebar-footer-content">
      <p class="mb-0">v1.0.0</p>
    </div>
  </div>

</nav>