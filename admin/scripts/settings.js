function upd_general(site_title_val, site_about_val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    var myModal = document.getElementById("general-s");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == 1) {
      alert("Thành công", "Đã lưu những thay đổi!");
      get_general();
    } else {
      alert("Lỗi", "Không có sự thay đổi nào!");
    }
  };

  xhr.send(
    "site_title=" + site_title_val + "&site_about=" + site_about_val + "&upd_general"
  );
}

function upd_shutdown(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1 && general_data.shutdown == 0) {
      alert("Thành công", "Tên miền đã bị ngắt!");
    } else {
      alert("Thành công", "Chế độ tắt đã được hủy!");
    }
    get_general();
  };

  xhr.send("upd_shutdown=" + val);
}

function upd_contacts() {
  let index = ["address", "gmap", "pn1", "pn2", "email", "fb", "insta", "tw", "iframe"];
  let contacts_inp_id = [
    "address_inp",
    "gmap_inp",
    "pn1_inp",
    "pn2_inp",
    "email_inp",
    "fb_inp",
    "insta_inp",
    "tw_inp",
    "iframe_inp",
  ];

  let data_str = "";

  for (i = 0; i < index.length; i++) {
    data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
  }
  data_str += "upd_contacts";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    var myModal = document.getElementById("contacts-s");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();
    if (this.responseText == 1) {
      alert("Thành công", "Đã lưu những thay đổi!");
      get_contacts();
    } else {
      alert("Lỗi", "Không có thay đổi nào!");
    }
  };

  xhr.send(data_str);
}

function add_member() {
  let data = new FormData();
  data.append("name", member_name_inp.value);
  data.append("picture", member_picture_inp.files[0]);
  data.append("add_member", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);

  xhr.onload = function () {
    var myModal = document.getElementById("team-s");
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == "inv_img") {
      alert("Lỗi", "Chỉ chấp nhận ảnh JPG và PNG!");
    } else if (this.responseText == "inv_size") {
      alert("Lỗi", "Ảnh phải nhỏ hơn 2MB!");
    } else if (this.responseText == "upd_failed") {
      alert("Lỗi", "Tải lên ảnh thất bại. Máy chủ đang gặp vấn đề!");
    } else {
      alert("Thành công", "Thành viên mới đã được thêm!");
      member_name_inp.value = "";
      member_picture_inp.value = "";
      get_members();
    }
  };

  xhr.send(data);
}

function rem_member(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("Thành công", "Thành viên đã bị xóa!");
      get_members();
    } else {
      alert("Lỗi", "Máy chủ đang gặp vấn đề!");
    }
  };

  xhr.send("rem_member=" + val);
}
