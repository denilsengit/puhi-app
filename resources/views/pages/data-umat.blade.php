@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="container-fluid p-4">
        <div class="d-md-flex justify-content-between align-items-center mb-4">
          <div>
            <h4 class="fw-bold mb-1">Daftar Seluruh Umat</h4>
            <p class="text-muted mb-0">Kelola dan lihat data umat yang terdaftar secara mendetail.</p>
          </div>
          <div class="mt-3 mt-md-0">
            <button class="btn btn-outline-primary rounded-pill px-4 me-2" data-bs-toggle="modal" data-bs-target="#modalExportData"><i class="bi bi-file-earmark-arrow-down me-2"></i>Export</button>
            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalTambahumat"><i class="bi bi-plus-lg me-2"></i>Tambah Umat</button>
          </div>
        </div>
        <div class="modal fade" id="modalTambahumat" tabindex="-1" aria-labelledby="modalTambahumatLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
              <div class="modal-header border-0 p-4 pb-0">
                <div class="d-flex align-items-center">
                  <div class="bg-primary text-white p-3 rounded-3 me-3 shadow-sm">
                    <i class="bi bi-person-plus-fill fs-4"></i>
                  </div>
                  <div>
                    <h5 class="modal-title fw-bold" id="modalTambahumatLabel">Tambah Umat Baru</h5>
                    <p class="text-muted small mb-0">Lengkapi formulir di bawah untuk mendaftarkan umat baru.</p>
                  </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body p-4">
                <form id="formTambahumat">
                  <div class="mb-4">
                    <h6 class="fw-bold text-primary mb-3 d-flex align-items-center"><i class="bi bi-card-heading me-2"></i>Informasi Pribadi</h6>
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Nama Lengkap</label>
                        <input type="text" class="form-control bg-light border-0 py-2" placeholder="Nama sesuai KTP" required />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">NIK (16 Digit)</label>
                        <input type="number" class="form-control bg-light border-0 py-2" placeholder="32750xxx..." required />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Tempat Lahir</label>
                        <input type="text" class="form-control bg-light border-0 py-2" placeholder="Kota Kelahiran" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Tanggal Lahir</label>
                        <input type="date" class="form-control bg-light border-0 py-2" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Jenis Kelamin</label>
                        <div class="d-flex gap-3 mt-1">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="laki" checked />
                            <label class="form-check-label small" for="laki">Laki-laki</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="perempuan" />
                            <label class="form-check-label small" for="perempuan">Perempuan</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <h6 class="fw-bold text-primary mb-3 d-flex align-items-center"><i class="bi bi-geo-alt me-2"></i>Kontak & Wilayah</h6>
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Nomor Telepon/WA</label>
                        <div class="input-group">
                          <span class="input-group-text bg-light border-0">+62</span>
                          <input type="tel" class="form-control bg-light border-0 py-2" placeholder="812xxx" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label fw-semibold small">Zonasi Wilayah (RT/RW)</label>
                        <select class="form-select bg-light border-0 py-2">
                          <option selected disabled>Pilih Zona</option>
                          <option>RT 001 / RW 05</option>
                          <option>RT 002 / RW 05</option>
                          <option>RT 003 / RW 05</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label fw-semibold small">Status dalam Keluarga</label>
                        <select class="form-select bg-light border-0 py-2">
                          <option selected disabled>Pilih Status</option>
                          <option>Kepala Keluarga</option>
                          <option>Istri</option>
                          <option>Anak</option>
                          <option>Lainnya</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                    <button type="button" class="btn btn-light px-4 rounded-pill fw-semibold" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary px-4 rounded-pill fw-semibold shadow-sm">Daftarkan umat</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalExportData" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
              <div class="modal-header border-0 p-4 pb-0">
                <div>
                  <h5 class="modal-title fw-bold">Ekspor Data</h5>
                  <p class="text-muted small mb-0">Pilih format dokumen untuk mengunduh laporan.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body p-4">
                <div class="row g-3">
                  <div class="col-6">
                    <div class="export-option p-3 border rounded-4 text-center cursor-pointer position-relative overflow-hidden shadow-hover" onclick="selectExport('excel')">
                      <input type="radio" name="exportFormat" id="formatExcel" class="position-absolute top-0 end-0 m-3 opacity-0" />
                      <div class="bg-success-subtle text-success p-3 rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center">
                        <i class="bi bi-file-earmark-excel-fill fs-3"></i>
                      </div>
                      <h6 class="fw-bold mb-1">MS Excel</h6>
                      <small class="text-muted">.xlsx</small>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="export-option p-3 border rounded-4 text-center cursor-pointer position-relative overflow-hidden shadow-hover" onclick="selectExport('pdf')">
                      <input type="radio" name="exportFormat" id="formatPDF" class="position-absolute top-0 end-0 m-3 opacity-0" />
                      <div class="bg-danger-subtle text-danger p-3 rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center">
                        <i class="bi bi-file-earmark-pdf-fill fs-3"></i>
                      </div>
                      <h6 class="fw-bold mb-1">PDF Doc</h6>
                      <small class="text-muted">.pdf</small>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="export-option p-3 border rounded-4 text-center cursor-pointer position-relative overflow-hidden shadow-hover" onclick="selectExport('csv')">
                      <input type="radio" name="exportFormat" id="formatCSV" class="position-absolute top-0 end-0 m-3 opacity-0" />
                      <div class="bg-info-subtle text-info p-3 rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center">
                        <i class="bi bi-file-earmark-spreadsheet-fill fs-3"></i>
                      </div>
                      <h6 class="fw-bold mb-1">CSV Data</h6>
                      <small class="text-muted">.csv</small>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="export-option p-3 border rounded-4 text-center cursor-pointer position-relative overflow-hidden shadow-hover" onclick="selectExport('word')">
                      <input type="radio" name="exportFormat" id="formatWord" class="position-absolute top-0 end-0 m-3 opacity-0" />
                      <div class="bg-primary-subtle text-primary p-3 rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center">
                        <i class="bi bi-file-earmark-word-fill fs-3"></i>
                      </div>
                      <h6 class="fw-bold mb-1">MS Word</h6>
                      <small class="text-muted">.docx</small>
                    </div>
                  </div>
                </div>

                <div class="mt-4 pt-3 border-top">
                  <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="checkFilter" />
                    <label class="form-check-label small" for="checkFilter">Hanya data yang difilter saat ini</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="checkVerified" checked />
                    <label class="form-check-label small" for="checkVerified">Sertakan status verifikasi</label>
                  </div>
                </div>
              </div>

              <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-light rounded-pill px-4 fw-semibold w-100 mb-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary rounded-pill px-4 fw-bold w-100 shadow-sm" onclick="processExport()"><i class="bi bi-download me-2"></i>Unduh Sekarang</button>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4 p-3 mb-4">
          <div class="row g-3">
            <div class="col-md-3">
              <select class="form-select bg-light border-0 rounded-3">
                <option selected>Filter Wilayah</option>
                <option>RT 001</option>
                <option>RT 002</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select bg-light border-0 rounded-3">
                <option selected>Status Hubungan</option>
                <option>Kepala Keluarga</option>
                <option>Anggota</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select bg-light border-0 rounded-3">
                <option selected>Status Verifikasi</option>
                <option>Terverifikasi</option>
                <option>Menunggu</option>
              </select>
            </div>
            <div class="col-md-3">
              <button class="btn btn-light w-100 rounded-3 fw-semibold text-muted"><i class="bi bi-funnel me-2"></i>Terapkan Filter</button>
            </div>
          </div>
        </div>

        <div class="table-card">
          <div class="table-responsive">
            <table class="table mb-0 table-hover">
              <thead>
                <tr>
                  <th class="ps-4">Identitas umat</th>
                  <th>No. Telepon</th>
                  <th>Wilayah</th>
                  <th>Status KK</th>
                  <th>Status</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4">
                    <div class="d-flex align-items-center gap-3">
                      <div class="avatar-sm bg-primary-subtle text-primary">AN</div>
                      <div>
                        <p class="mb-0 fw-bold">Andi Nugraha</p>
                        <small class="text-muted">NIK: 327501XXXXXXXXXX</small>
                      </div>
                    </div>
                  </td>
                  <td>0812-3456-7890</td>
                  <td>RT 001 / RW 05</td>
                  <td><span class="badge bg-light text-dark fw-medium border">Kepala Keluarga</span></td>
                  <td><span class="badge bg-success-subtle text-success border-0 px-3 py-2 rounded-pill">Terverifikasi</span></td>
                  <td class="text-center">
                    <div class="dropdown">
                      <button class="btn btn-light btn-sm rounded-3" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                      <ul class="dropdown-menu border-0 shadow-sm">
                        <li>
                          <a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Hapus</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="p-4 d-flex justify-content-between align-items-center border-top">
            <small class="text-muted">Menampilkan 1 - 10 dari 1,240 data</small>
            <nav>
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link border-0 bg-light rounded-3 me-1" href="#">Sebelumnya</a></li>
                <li class="page-item active"><a class="page-link border-0 rounded-3 me-1" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0 bg-light rounded-3 me-1" href="#">2</a></li>
                <li class="page-item"><a class="page-link border-0 bg-light rounded-3" href="#">Berikutnya</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

@endsection