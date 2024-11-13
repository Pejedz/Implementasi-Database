<?php 
  include 'dalaman/koneksi.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <div class="row g-0">
    <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-secondary" style="height: 100vh;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <i class="bi bi-facebook me-2 fs-2"></i>
        <span class="fs-4">FishBook</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link active bg-light text-dark" aria-current="page">
            <i class="bi bi-houses me-2 fs-5"></i>
             Home
          </a>
        </li> 
        <li>
          <a href="notif.php" class="nav-link text-white">
          <i class="bi bi-bell me-2 fs-5"></i>
            Notification
          </a>
        </li>
        <li>
          <a href="Message.php" class="nav-link text-white">
          <i class="bi bi-chat-square-dots fs-5 me-2"></i>
            Message
          </a>
        </li>
        <li>
          <a href="bookmark.php" class="nav-link text-white">
          <i class="bi bi-bookmarks fs-5 me-2"></i>
            Bookmark
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          <i class="bi bi-people fs-5 me-2"></i>
            Friends
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="pejed.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>Pejed</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Switch Account</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    <div class="card ms-3 mt-3" style="width: 25rem; height: 21rem;">
        <img class="card-img-top" src="sekiro.jpg" alt="Card image cap">
        <div class="card-body">
        <p class="card-text">Sekiro gua udh nyampe sini aja wir. ini pemandangan keren beutttt. developer sedang memasak🔥🔥🔥</p>
        </div>
    </div>
    <div class="card ms-3 mt-3" style="width: 25rem; height: 21rem;">
        <img class="card-img-top" src="hormat.jpeg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>