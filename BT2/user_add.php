<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <form action="process.php" method ="POST"  >
    <div class="mb-3 mt-3 col-6">
      <label class="form-label">Name: </label>
      <input type="text" class="form-control" id="" placeholder="Nhập họ tên">
    </div>
    <div class="mb-3 col-6 mt-5">
      <label class="form-label">username: </label>
      <input type="text" class="form-control " id="" placeholder="tên đăng nhập">
    </div>
    <div class="mb-3 mt-3 col-6">
    <label class="form-label">password: </label>
      <input type="text" class="form-control" id="" placeholder="mật khẩu">
    </div>
    
    <div class="mb-3 col-6 mt-3">
      <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <button type="submit">Add</button>
  </form>
</body>
</html>