<div>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Desales</title>

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Profil -->
  <div class="container mt-5 text-center">
    <img src="{{ asset ('front/images/image.png') }}" alt="Foto Profil" class="rounded-circle img-thumbnail" style="width: 150px;">
    <h2 class="mt-3">Desales</h2>
    <p class="text-muted">Teknik Informatika - Universitas Esa Unggul</p>

    <div class="d-flex justify-content-center gap-2 mb-4">
      <button class="btn btn-outline-primary">
        <i class="fa-solid fa-location-dot me-1"></i> Jakarta
      </button>
      <button class="btn btn-outline-secondary">
        <i class="fa-regular fa-calendar-days me-1"></i> 01 Januari 2024
      </button>
    </div>
  </div>

  <!-- Tentang Saya -->
  <div class="container mb-5">
    <div class="card">
      <div class="card-body">
        <h5 class="text-center mb-4">Tentang Saya</h5>
        <p class="text-muted text-center">
          Saya merupakan mahasiswa universitas essa unggu. Saat ini saya berkulihan di kampus cabang citra raya
        </p>
      </div>
    </div>
  </div>

  <!-- Linked Personal -->
  <div class="container mb-5">
    <div class="card">
      <div class="card-body p-0">
        <ul class="list-group list-group-flush rounded-3 text-center">
          <li class="list-group-item">
            <a href="https://github.com/desales24" target="_blank">
              <i class="fa-brands fa-github fa-xl me-2"></i> GitHub
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.instagram.com/frans_2405/" target="_blank">
              <i class="fa-brands fa-instagram fa-xl me-2"></i> Instagram
            </a>
          </li>
          <li class="list-group-item">
            <a href="mywebsite.html"><i class="fa fa-globe" aria-hidden="true"></i> Website
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Skill -->
  <div class="container mb-5">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-4 text-center">Keahlian</h5>

        <p>HTML</p>
        <div class="progress mb-3" style="height: 8px;">
          <div class="progress-bar bg-success" style="width: 90%;"></div>
        </div>

        <p>C</p>
        <div class="progress mb-3" style="height: 8px;">
          <div class="progress-bar bg-info" style="width: 85%;"></div>
        </div>

        <p>C++</p>
        <div class="progress mb-3" style="height: 8px;">
          <div class="progress-bar bg-warning" style="width: 75%;"></div>
        </div>

        <p>Java</p>
        <div class="progress" style="height: 8px;">
          <div class="progress-bar bg-danger" style="width: 70%;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-light py-3">
    <div class="container text-center">
      <small class="text-muted">&copy; 2024 Desales - All rights reserved.</small>
    </div>
  </footer>

</body>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</html>
</div>
