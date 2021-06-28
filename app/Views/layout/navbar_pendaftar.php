<nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/pendaftar" style="color: azure;">PSB ONLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" style="color: blanchedalmond;" href="/pendaftaransiswa">Pendaftaran Siswa Baru</a>
                <a class="nav-link" style="color: blanchedalmond;" href="/statuspendaftaran">Status Pendaftaran</a>
                <a class="nav-link" href="/auth/logout" data-toggle="modal" data-target="#logoutModal" style="color: darkred;">Logout</a>
            </div>
        </div>
    </div>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah ini untuk keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/">Logout</a>
            </div>
        </div>
    </div>
</div>