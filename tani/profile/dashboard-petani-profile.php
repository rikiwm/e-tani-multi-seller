<?php 

if (isset($_POST["updatePetani"])) {
  if (updatePetani($_POST) > 0) {
    echo "<script>
            alert(' Berhasil Diubah');
            document.location.href = '?page=profile';
          </script>";
  } else {
    echo "<script>
            alert(' Gagal Diubah');
            document.location.href = '?page=profile';
          </script>";
  }
}

?>
<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
  data-aos="fade-down"
>
  <div class="container-fluid">
    <button
      class="btn btn-secondary d-md-none mr-auto mr-2"
      id="menu-toggle"
    >
      &laquo; Menu
    </button>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collpase navbar-collapse" id="navbarResponsive">
      <!-- dekstop menu -->
      <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
          >
            <img
              src="../assets/images/person-circle.svg"
              alt="profile"
              height="40px"
              class="rounded-circle mr-2 profile-picture"
            />
            <?php 
              $id_driver = $_SESSION['tani'];
              $user = query("SELECT * FROM tani WHERE id_tani = $id_driver")[0];
            ?>
            Hi, <?= $user["name_tani"]; ?>
          </a>
          <div class="dropdown-menu">
            <a href="../index.php" class="dropdown-item">Back To Home</a>
            <div class="dropdown-divider"></div>
            <a href="../logout.php" class="dropdown-item">logout</a>
          </div>
        </li>
      </ul>

      <!-- mobile app -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a href="" class="nav-link"> Hi, Hafizh </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Edit Profile</h2>
        <p class="dashboard-subtitle">Edit Your Proflie</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
          <div class="col-12 mt-2">
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card">
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">Nama Lengkap</label>
                                  <input type="text" name="name" value="<?= $user["name_tani"] ?? ''; ?>" id="name" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" readonly name="email" value="<?= $user["email"] ?? ''; ?>" id="email" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="phone_number">No. Hp / WA</label>
                                  <input type="tel" name="phone_number" value="<?= $user["phone_number"] ?? ''; ?>" id="phone_number" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="code">Kecamatan</label>
                                  <select name="kecamatan" id="kecamatan" class="form-control">
                                  <option value="<?= $user["kecamatan"]; ?>"><?= $user["kecamatan"]; ?></option>
                                  <option value="Lubuk Sikarah">Lubuk Sikarah</option>
                                  <option value="Tanjung Harapan">Tanjung Harapan</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                  <label for="status">Status</label>
                                  <p>
                                  <?php if ($user["status"] == "Active") : ?>
                                <span class="badge badge-pill badge-success"><?= $user["status"]; ?></span>
                              <?php elseif($user["status"] == "Pasif"): ?>
                                <span class="badge badge-pill badge-danger"><?= $user["status"]; ?></span>
                              <?php endif; ?>
                              </p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="Foto">Picture</label>
                                  <p>
                                  <?php if ($user["photo_profile"] <= 0) : ?>
                                    <input type="file" name="photo" id="photo" class="form-control">
                              <?php elseif($user["photo_profile"] >1): ?>
                                <div class="card-body">
                                <img
                                    src="../assets/images/<?= $user["photo_profile"]; ?>"
                                    alt="profile"
                                    height="80px"
                                    class="rounded-circle profile-picture"
                                    />
                                    </div>
                              <?php endif; ?>
                              </p>
                              </div>
                            </div>
                            <div class="col-md-12" id="alamat">
                              <div class="form-group">
                                <label for="alamat">Alamat Detail</label>
                                <textarea name="alamat" id="editor"><?= $user["alamat"] ?? ''; ?></textarea>
                              </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col text-right">
                          <input type="hidden" name="id" value="<?= $user["id_tani"] ?? ''; ?>">
                          <button type="submit" name="updatePetani" class="btn btn-success px-4">Save Now</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
        </div>
    </div>
    </div>
</div>