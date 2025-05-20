<div class="modal fade" id="detailDiagnosisModal">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen">
        <div class="modal-content border-0 shadow-lg">
            {{-- Modal Header --}}
            <div class="modal-header bg-primary text-white py-3 px-4 align-items-center">
                <h1 class="modal-title h4 d-flex align-items-center mb-0">
                    <i class="bi bi-clipboard-pulse me-3"></i>
                    Detail Diagnosis
                </h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            {{-- Modal Body --}}
            <div class="modal-body bg-light">
                <div class="container">

                    <div class="alert" id="alertBackground" role="alert">
                        <h4 class="alert-heading" id="headerDetailDiagnosis"></h4>
                        <p id="subheaderDetailDiagnosis"></p>
                    </div>

                    {{-- Disease Detail Section --}}
                    <div class="row pt-3" id="rowDetailPenyakit">
                        <div class="col-12">
                            <h2 class="h4 border-bottom pb-2 mb-3 text-primary">
                                <i class="bi bi-file-medical me-2"></i>Detail Penyakit
                            </h2>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4 p-lg-5">
                                    <div class="row g-4">
                                        <div class="col-12 col-lg-4 order-lg-2">
                                            <div class="container-image-penyakit">
                                                <div class="container-chocolat">
                                                    <a href="#" class="open-image-chocolat d-block" id="containerImagePenyakitDetailDiagnosisModal">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-8 order-lg-1">
                                            <div class="mb-4">
                                                <h3 class="h4 fw-bold text-primary d-flex align-items-center">
                                                    <i class="fas fa-virus me-2"></i>Nama Penyakit
                                                </h3>
                                                <p class="card-text fs-5 border-start border-3 border-primary ps-3 py-2"
                                                    id="penyakitName">
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <h3 class="h4 fw-bold text-danger d-flex align-items-center">
                                                    <i class="fas fa-exclamation-triangle me-2"></i>Penyebab
                                                    Penyakit
                                                </h3>
                                                <p class="card-text border-start border-3 border-danger ps-3 py-2"
                                                    id="penyakitReason">
                                                </p>
                                            </div>
                                            <div>
                                                <h3 class="h4 fw-bold text-success d-flex align-items-center">
                                                    <i class="fas fa-medkit me-2"></i>Solusi Penyakit
                                                </h3>
                                                <div class="border-start border-3 border-success ps-3 py-2">
                                                    <h3 id="headerPenyakitSolution" class="h5 text-muted mb-2">
                                                    </h3>
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 col-lg-4 order-lg-2 d-flex align-items-center justify-content-center mb-3 mb-lg-0">
                                                <div id="containerImagePenyakitDetailDiagnosisModal" class="text-center"
                                                    style="max-width: 350px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-4">
                        <div class="col-12">
                            <h2 class="h4 border-bottom pb-2 mb-3 text-primary">
                                <i class="bi bi-list-check me-2"></i>Histori Jawaban
                            </h2>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-0">
                                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                        <table class="table table-striped mb-0" id="detailJawabanDiagnosisTable">
                                            <thead class="table-light sticky-top">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Gejala</th>
                                                    <th>Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pb-3">
                        <div class="col-12">
                            <h2 class="h4 border-bottom pb-2 mb-3 text-primary">
                                <i class="bi bi-pie-chart-fill me-2"></i>Persentase Penyakit
                            </h2>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <canvas id="chartDiagnosisPenyakit" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #detailDiagnosisModal .modal-content {
        border-radius: 0.75rem;
    }

    #detailDiagnosisModal .table thead {
        position: sticky;
        top: 0;
        z-index: 10;
    }

    #detailJawabanDiagnosisTable {
        margin-bottom: 0;
    }
</style>
