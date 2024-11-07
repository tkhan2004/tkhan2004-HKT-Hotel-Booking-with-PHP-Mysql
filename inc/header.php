<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HKT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="room.php">Phòng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facilities.php"> Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Liên hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Mô tả</a>
        </li>
        
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                Đăng nhập
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                Đăng ký
        </button>
      </div>
    </div>
  </div>
</nav>
<!-- form đăng ký nè -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>Đăng ký tài khoản
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base ">
          Note : Thông tin khách hàng phải trùng khớp với thông tin trên thẻ căn cước hoặc hộ chiếu.
        </span>
        <div class="contenter-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Tên</label>
              <input type="text" class="form-control shadow-none" required>
          </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Số điện thoại</label>
              <input type="number" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Hình</label>
              <input type="file" class="form-control shadow-none" required>
            </div>
            <div class="col-md-12 ps-0 mb-3">
              <label class="form-label shadow-none">Địa chỉ</label>
              <textarea class="form-control"  rows="1"></textarea>
            </div>  
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Mã Pin</label>
              <input type="number" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Ngày sinh</label>
              <input type="date" class="form-control shadow-none" required>
            </div> 
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Mật khẩu</label>
              <input type="password" class="form-control shadow-none" required>
            </div> 
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Nhập lại mật khẩu</label>
              <input type="pasword" class="form-control shadow-none" required>
            </div> 
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none"> Đăng ký </button>
          </div>
        </div>
        <div class="contenter-fluid">  
        </div>
          <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark shadow-none">Submit</button>
            <a href="javascript:void(0)">Quên mật khẩu</a>
          </div> -->
        </div>
      </div>
    </form>
</div>
</div>
 <!-- form đăng nhập -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>Đăng ký tài khoản
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark shadow-none">Submit</button>
            <a href="javascript:void(0)">Quên mật khẩu</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>