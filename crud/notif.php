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

    <div class="col-md-10 text-dark overflow-auto" style="height:100vh;">
      <div class="row g-0 mt-3 ps-5">
          <div class="col-md-10">
            <div class="card shadow">
              <div class="card-header text-center"><h1>Notification</h1></div>
              <div class="card-body">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">From</th>
                      <th scope="col">Description</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1.</th>
                      <td>@keballSerangan</td>
                      <td>Liked your video 💗</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2.</th>
                      <td>@jeLLz</td>
                      <td>Liked your video 💗</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">3.</th>
                      <td>@Xymal</td>
                      <td>Tagged you in the Comment : @Pejed lucu banget ini bang.</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                          <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                      </td>
                    </tr>

                    <tr>
                        <th scope="row">4.</th>
                        <td>@Riveon</td>
                        <td>Just Followed You 🗿</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                            <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                        </td>
                      </tr>
                    
                    <tr>
                        <th scope="row">5.</th>
                        <td>@sodiannn</td>
                        <td>Liked your video 💗</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                            <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">6.</th>
                        <td>@Kakap</td>
                        <td>Liked your video 💗</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                            <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                        </td>
                    </tr>

                    <tr></tr>
                        <th scope="row">7.</th>
                        <td>@Chizmoon</td>
                        <td>Just Followed You 🗿</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                            <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                        </td>
                    </tr>

                    <tr></tr>
                        <th scope="row">8.</th>
                        <td>@gamersindoonesia88</td>
                        <td>Just Followed You 🗿</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#view" style="background-color: cornflowerblue;"><i class="bi bi-eye"></i></a>
                            <a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal"data-bs-target="#block"><i class="bi bi-ban"></i></a>
                        </td>
                    </tr>
                  </tbody>
                </table>
                <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to view this Message?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">View</button>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal fade" id="block" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to Block this User?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-dark text-light">Block</button>
                    </div>
                  </div>
                </div>
            </div>
              </div>
            </div>
          </div>
              <div class="forms">
              <form class="col-md-8">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold mt-3">Make New Post!</label>
                  <input type="text" class="form-control bg-light" id="" aria-describedby="">
                  <div id="emailHelp" class="form-text">Write u want to Write for New Post! 😁👌🔥</div>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>