@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="container-fluid p-4">
        <div class="row mb-4">
          <div class="col-md-6">
            <h4 class="fw-bold mb-1">Sebaran Wilayah (RT/RW)</h4>
            <p class="text-muted">Kelola jangkauan data berdasarkan zona administratif.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <button class="btn btn-primary rounded-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahZona"><i class="bi bi-plus-circle me-2"></i>Tambah Zona Baru</button>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-xl-4 col-md-6">
            <div class="zone-card p-4">
              <div class="d-flex justify-content-between align-items-start mb-4">
                <div class="zone-badge">01</div>
                <div class="dropdown">
                  <button class="btn btn-light btn-sm" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                  <ul class="dropdown-menu border-0 shadow-sm">
                    <li><a class="dropdown-item" href="#">Edit Zona</a></li>
                    <li><a class="dropdown-item text-danger" href="#">Nonaktifkan</a></li>
                  </ul>
                </div>
              </div>
              <h5 class="fw-bold">Tempek Yon Air</h5>
              <p class="text-muted small">Komplek Asrama Yon Ang Air</p>
              <hr class="my-3 opacity-50" />
              <div class="row g-2 text-center">
                <div class="col-6">
                  <div class="bg-light p-2 rounded-3">
                    <small class="text-muted d-block">Kepala Keluarga</small>
                    <span class="fw-bold text-dark">42</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="bg-light p-2 rounded-3">
                    <small class="text-muted d-block">Total Jemaat</small>
                    <span class="fw-bold text-dark">156</span>
                  </div>
                </div>
              </div>
              <button class="btn btn-outline-primary btn-sm w-100 mt-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalDaftarJemaat">Lihat Daftar Jemaat</button>
            </div>
          </div>

          <div class="col-xl-4 col-md-6">
            <div class="zone-card p-4">
              <div class="d-flex justify-content-between align-items-start mb-4">
                <div class="zone-badge">02</div>
                <div class="btn btn-light btn-sm"><i class="bi bi-three-dots"></i></div>
              </div>
              <h5 class="fw-bold">RT 002 / RW 05</h5>
              <p class="text-muted small">Kelurahan Mekar Jaya, Kec. Sukmajaya</p>
              <hr class="my-3 opacity-50" />
              <div class="row g-2 text-center">
                <div class="col-6">
                  <div class="bg-light p-2 rounded-3">
                    <small class="text-muted d-block">Kepala Keluarga</small>
                    <span class="fw-bold text-dark">38</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="bg-light p-2 rounded-3">
                    <small class="text-muted d-block">Total Jemaat</small>
                    <span class="fw-bold text-dark">120</span>
                  </div>
                </div>
              </div>
              <button class="btn btn-outline-primary btn-sm w-100 mt-4 rounded-pill">Lihat Daftar Jemaat</button>
            </div>
          </div>

          <div class="col-xl-4 col-md-6">
            <div
              class="zone-card p-4 d-flex flex-column align-items-center justify-content-center border-dashed"
              style="border: 2px dashed #cbd5e1; background: rgba(255, 255, 255, 0.5); min-height: 320px; cursor: pointer"
              data-bs-toggle="modal"
              data-bs-target="#modalOnboardingZona"
            >
              <div class="bg-white p-4 rounded-circle shadow-sm mb-3">
                <i class="bi bi-plus-lg text-primary fs-2"></i>
              </div>
              <h6 class="fw-bold mb-1 text-center">Tambah Zona Lainnya</h6>
              <p class="text-muted small text-center px-4">Belum ada zona lain yang terdaftar. Klik untuk menambah zona administratif baru.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalOnboardingZona" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="bg-primary p-5 text-center text-white">
              <i class="bi bi-map-fill display-1 opacity-25 position-absolute top-50 start-50 translate-middle"></i>
              <img src="https://illustrations.popsy.co/white/location.svg" style="height: 150px; position: relative; z-index: 1" alt="Location Illustration" />
            </div>

            <div class="modal-body p-4 text-center">
              <h4 class="fw-bold">Mulai Pendataan Zona</h4>
              <p class="text-muted">Untuk manajemen data yang rapi, kami menyarankan Anda menyiapkan beberapa hal berikut:</p>

              <div class="text-start mx-auto mb-4" style="max-width: 320px">
                <div class="d-flex align-items-center mb-3">
                  <div class="bg-primary-subtle text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px">
                    <small class="fw-bold">1</small>
                  </div>
                  <span class="small fw-semibold">Data RT/RW yang valid</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                  <div class="bg-primary-subtle text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px">
                    <small class="fw-bold">2</small>
                  </div>
                  <span class="small fw-semibold">Nama Koordinator Wilayah</span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="bg-primary-subtle text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px">
                    <small class="fw-bold">3</small>
                  </div>
                  <span class="small fw-semibold">Batas wilayah/Blok</span>
                </div>
              </div>

              <div class="d-grid gap-2">
                <button class="btn btn-primary py-2 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#modalTambahZona">Lanjutkan Tambah Zona</button>
                <button class="btn btn-light py-2 rounded-pill text-muted small" data-bs-dismiss="modal">Nanti Saja</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalDaftarJemaat" tabindex="-1" aria-labelledby="modalDaftarJemaatLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-bottom p-4">
              <div>
                <h5 class="modal-title fw-bold text-dark" id="modalDaftarJemaatLabel">Daftar Jemaat: RT 001 / RW 05</h5>
                <p class="text-muted small mb-0">Menampilkan jemaat yang terdaftar di wilayah ini.</p>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0">
              <div class="p-3 bg-light border-bottom">
                <div class="input-group">
                  <span class="input-group-text bg-white border-0"><i class="bi bi-search"></i></span>
                  <input type="text" class="form-control border-0" placeholder="Cari jemaat di zona ini..." />
                </div>
              </div>

              <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="table-light">
                    <tr class="small text-uppercase">
                      <th class="ps-4">Nama Lengkap</th>
                      <th>Status</th>
                      <th>Kontak</th>
                      <th class="text-end pe-4">Profil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="https://ui-avatars.com/api/?name=Andi+Heryanto&background=random" class="rounded-circle" width="35" />
                          <div>
                            <span class="d-block fw-bold small">Andi Heryanto</span>
                            <span class="text-muted" style="font-size: 0.7rem">Kepala Keluarga</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-success-subtle text-success border-0 px-2 py-1">Aktif</span></td>
                      <td class="small">0812-xxxx-xxxx</td>
                      <td class="text-end pe-4">
                        <a href="data-jemaat.html" class="btn btn-sm btn-outline-primary rounded-pill px-3">Detail</a>
                      </td>
                    </tr>
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center gap-3">
                          <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=random" class="rounded-circle" width="35" />
                          <div>
                            <span class="d-block fw-bold small">Budi Santoso</span>
                            <span class="text-muted" style="font-size: 0.7rem">Anggota</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-success-subtle text-success border-0 px-2 py-1">Aktif</span></td>
                      <td class="small">0813-xxxx-xxxx</td>
                      <td class="text-end pe-4">
                        <a href="data-jemaat.html" class="btn btn-sm btn-outline-primary rounded-pill px-3">Detail</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="modal-footer border-top p-3">
              <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary rounded-pill px-4">Cetak Laporan Zona</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalTambahZona" tabindex="-1" aria-labelledby="modalTambahZonaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 p-4 pb-0">
              <div class="d-flex align-items-center">
                <div class="bg-primary-subtle text-primary p-3 rounded-3 me-3">
                  <i class="bi bi-map-fill fs-4"></i>
                </div>
                <div>
                  <h5 class="modal-title fw-bold" id="modalTambahZonaLabel">Tambah Zona Wilayah</h5>
                  <p class="text-muted small mb-0">Definisikan area administratif baru jemaat.</p>
                </div>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
              <form id="formTambahZona">
                <div class="row g-3 mb-3">
                  <div class="col-6">
                    <label class="form-label fw-semibold small">Nomor RT</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-end-0"><i class="bi bi-hash"></i></span>
                      <input type="text" class="form-control bg-light border-start-0" placeholder="Contoh: 001" required />
                    </div>
                  </div>
                  <div class="col-6">
                    <label class="form-label fw-semibold small">Nomor RW</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-end-0"><i class="bi bi-hash"></i></span>
                      <input type="text" class="form-control bg-light border-start-0" placeholder="Contoh: 05" required />
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-semibold small">Nama Wilayah / Blok (Opsional)</label>
                  <input type="text" class="form-control bg-light" placeholder="Contoh: Komplek Asri / Blok A" />
                </div>

                <div class="mb-3">
                  <label class="form-label fw-semibold small">Kelurahan</label>
                  <select class="form-select bg-light">
                    <option selected>Pilih Kelurahan</option>
                    <option value="1">Mekar Jaya</option>
                    <option value="2">Sukmajaya</option>
                    <option value="3">Abadijaya</option>
                  </select>
                </div>

                <div class="mb-4">
                  <label class="form-label fw-semibold small">Koordinator Wilayah (Korwil)</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person-badge"></i></span>
                    <input type="text" class="form-control bg-light border-start-0" placeholder="Cari nama jemaat..." />
                  </div>
                  <div class="form-text" style="font-size: 0.75rem">Korwil bertanggung jawab atas validasi data di zona ini.</div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-light px-4 rounded-pill fw-semibold" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary px-4 rounded-pill fw-semibold shadow-sm">Simpan Zona</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection