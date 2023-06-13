<?php

if (isset($_POST["tambahPetani"])) {
  if (tambahPetani($_POST) > 0) {
    echo "<script>
            alert(' Berhasil Ditambahkan');
            document.location.href = '?page=tani';
          </script>";
  } else {
    echo "<script>
            alert(' Gagal Ditambahkan');
            document.location.href = '?page=tani';
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
              $id_user = $_SESSION['user'];
              $user = query("SELECT * FROM users WHERE id_user = $id_user")[0];
            ?>
            Hi, <?= $user["name"]; ?>
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
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create Driver</h2>
      <p class="dashboard-subtitle">Create your own Driver</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <form action="" method="POST">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Nama Supplier / Petani</label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
        
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone_number">No HP / WA</label>
                      <input
                        type="number"
                        name="phone_number"
                        id="phone_number"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="kecamatan">Kecamatan</label>
                      <select name="kecamatan" id="kecamatan" class="form-control">
                        <option value="Tanjung Harapan">Tanjung Harapan</option>
                        <option value="Lubuk Sikarah">Lubuk Sikarah</option>
                       
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="alamatdetail">Alamat detail</label>
                      <input
                        type="text"
                        name="alamatdetail"
                        id="alamatdetail"
                        class="form-control"
                        required
                      />
                       
                       
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" id="status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="Pasif">Pasif</option>
                       
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      name="tambahPetani"
                      class="btn btn-success px-4"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>