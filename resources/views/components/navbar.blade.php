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