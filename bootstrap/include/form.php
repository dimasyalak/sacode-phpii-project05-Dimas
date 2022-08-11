<!-- FORM START -->
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

    <!-- HEADING -->
    <h1 class="mb-3 text-center fw-bolder">Login</h1>
    <p class="text-muted text-center mb-5">Isi alamat email dan kata sandi Anda.</p>

    <!-- ALAMAT EMAIL -->
    <div class="form-group mb-3">
        <label for="alamat-email" class="form-label text-muted">Alamat Email</label>
        <input type="email" id="alamat-email" name="email" placeholder="Alamat Email ..." class="form-control form-control-lg">
    </div>

    <!-- KATA SANDI -->
    <div class="form-group mb-3">
        <label for="kata-sandi" class="form-label text-muted">Kata Sandi</label>
        <input type="password" id="kata-sandi" name="kata_sandi" placeholder="Kata Sandi ..." class="form-control form-control-lg">
    </div>

    <!-- TOMBOL SUBMIT -->
    <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>

</form>
<!-- FORM END -->