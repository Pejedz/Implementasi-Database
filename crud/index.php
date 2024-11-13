<?php 
  include 'koneksi.php';
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
          <div class="col-md-8">
            <div class="card shadow">
              <div class="card-header  text-center"><h1>Home</h1></div>
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Username</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1.</th>
                      <td>@Pejed</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eveniet quod voluptatum perspiciatis voluptates vero autem saepe molestiae consequuntur perferendis earum optio, assumenda, facere soluta voluptatibus ab sapiente eaque molestias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatem doloribus commodi minima neque ipsam dolorem nihil cum, pariatur repellat accusamus, facere quas autem numquam dicta iure at veritatis qui! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magnam obcaecati mollitia quae dicta minus, reprehenderit consectetur voluptatibus. Quas eos cum explicabo odit blanditiis magni veniam temporibus numquam minus soluta. lore</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                          <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2.</th>
                      <td>@Kcarbonara</td>
                      <td>keren banget kamu ayahah hayyuk sangat sigma stop yapping skidbi toilet rizz ohia ohayou </td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                          <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">3.</th>
                      <td>@Majell</td>
                      <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum at enim deleniti pariatur. Distinctio asperiores placeat sequi facere libero saepe corrupti? Ea inventore amet voluptatum, dolor distinctio perferendis beatae deserunt?</td>
                      <td>
                          <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                          <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-footer">
                        <input type="text" class="form-control bg-light" id="" aria-describedby="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to delete this Message?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-danger ">Delete</button>
                    </div>
                  </div>
                </div>
            </div>
              </div>
            </div>
            </div>
          <div class="col-md-4">
            <div class="forms"></div>
              <form class="col-md-11">
                <div class="mb-3 ms-3">
                  <div class="card shadow">
                    <div class="card-header"><h4>Forms</h4></div>
                    <div class="card-body">
                      <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                      <input type="email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      <label for="exampleInputEmail1" class="form-label fw-bold mt-1">Password</label>
                      <input type="password" class="form-control bg-light" id="exampleInputPassword1" aria-describedby="PasswordHelp" required>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary ms-3">Login</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>