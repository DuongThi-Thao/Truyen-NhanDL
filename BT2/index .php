<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>
<body>

  <div class="container-fluid vh-100 ">
    <div class="row h-100">
      <div class="col-3 bg-success-subtle height:100vh">
        <div><img src="logo2.png" alt=""></div>
        <div class = "pd-5 mt-5 ">
          <div class="dropdown col-6">
            <a class="btn btn-secondary dropdown-toggle col-12" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </a>
          </div>
          <div class="row mt-2">
            <div class="col-9 ">
              <a href=""class="text-decoration-none">
                <i class="bi bi-person"></i>
                <span>User</span>
              </a>
            </div>
          </div>
          <div class="dropdown mt-2 ">
          <a class="btn btn-secondary dropdown-toggle col-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Furniture
          </a>
          </div>
          <div class="row mt-2">
            <div class="col-12 ">
              <a href=""class="text-decoration-none">
                <i class=" bi bi-bracket"></i>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-9 bg-info-subtle">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <a href="" id="sidebarToggle" class="col-1 mt-1"><i class=" bi bi-list fs-1"></i></a>
              <h2 class="col-11 mt-3">User</h2>
          </div>
            
          </div>
          <div class="col-6">
            <div class=" mt-3 input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control" placeholder="search here..." aria-label="search" aria-describedby="addon-wrapping">
              </div>
          </div>
        </div>
        <div class=" mt-5">
          <a href="user_add.php">
            <button class="btn btn-primary">Add a new user</button>
          </a>
        </div>

        <table class="table mt-5">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Detail</th>
              <th scope="col">edit</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>@mdo</td>
              <td><a href="#"class="text-decoration-none">Detail</a></td>
              <td><a href=""><i class="bi bi-pencil-fill"></i></a></td>
              <td><a href=""><i class="bi bi-basket"></i></a></td>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>@fat</td>
              <td><a href="#"class="text-decoration-none">Detail</a></td>
              <td><a href=""><i class="bi bi-pencil-fill"></i></a></td>
              <td><a href=""><i class="bi bi-basket"></i></a></td>
            <tr>
              <th scope="row">3</th>
              <td >Larry the Bird</td>
              <td>@twitter</td>
              <td><a href="#"class="text-decoration-none">Detail</a></td>
              <td><a href=""><i class="bi bi-pencil-fill"></i></a></td>
              <td><a href=""><i class="bi bi-basket"></i></a></td>
            </tr>
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <?php
//Kết nối DB server
    $conn = mysqli_connect (hostname: 'localhost', username:'', password:'', database:'');
    if(!$conn){
        die ('cannot connect');
    }
    //Thực hiện truy vấn
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);

    //xử lí kết quả
    $users= mysqli_fetch_all($result);
  ?>
</body>
</html>