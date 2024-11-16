function add_room() {
  let data = new FormData();
  data.append('add_room', '');
  data.append('name', add_room_form.elements['name'].value);
  data.append('area', add_room_form.elements['area'].value);
  data.append('price', add_room_form.elements['price'].value);
  data.append('quantity', add_room_form.elements['quantity'].value);
  data.append('adult', add_room_form.elements['adult'].value);
  data.append('children', add_room_form.elements['children'].value);
  data.append('desc', add_room_form.elements['desc'].value);

  let features = [];
  add_room_form.elements['features'].forEach(el => {
    if (el.checked) {
      features.push(el.value);
    }
  });

  let facilities = [];
  add_room_form.elements['facilities'].forEach(el => {
    if (el.checked) {
      facilities.push(el.value);
    }
  });

  data.append('features', JSON.stringify(features));
  data.append('facilities', JSON.stringify(facilities));

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);

  xhr.onload = function () {
    var myModal = document.getElementById('add-room');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if (this.responseText == 1) {
      alert('Thành công', 'Phòng mới đã được thêm!');
      add_room_form.reset();
      get_all_rooms();
    } else {
      alert('Lỗi', 'Máy chủ gặp sự cố!');
    }
  }

  xhr.send(data);
}

function get_all_rooms() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function () {
    document.getElementById('room-data').innerHTML = this.responseText;
  }

  xhr.send('get_all_rooms');
}

// Tất cả các hàm alert còn lại được chuyển sang tiếng Việt
function toggle_status(id, val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert('Thành công', 'Trạng thái đã được thay đổi!');
      get_all_rooms();
    } else {
      alert('Lỗi', 'Máy chủ gặp sự cố!');
    }
  }

  xhr.send('toggle_status=' + id + '&value=' + val);
}

function room_images(id, rname) {
  document.querySelector("#room-images .modal-title").innerText = rname;
  add_image_form.elements['room_id'].value = id;
  add_image_form.elements['image'].value = '';

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function () {
    document.getElementById('room-image-data').innerHTML = this.responseText;
  }

  xhr.send('get_room_images=' + id);
}

function rem_image(img_id, room_id) {
  let data = new FormData();
  data.append('image_id', img_id);
  data.append('room_id', room_id);
  data.append('rem_image', '');

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert('Thành công', 'Hình ảnh đã được xóa!');
      room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
    } else {
      alert('Lỗi', 'Xóa hình ảnh thất bại!');
    }
  }
  xhr.send(data);
}

function remove_room(room_id) {
  if (confirm("Bạn có chắc chắn muốn xóa phòng này không?")) {
    let data = new FormData();
    data.append('room_id', room_id);
    data.append('remove_room', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
      if (this.responseText == 1) {
        alert('Thành công', 'Phòng đã được xóa!');
        get_all_rooms();
      } else {
        alert('Lỗi', 'Xóa phòng thất bại!');
      }
    }
    xhr.send(data);
  }
}
function toggle_status(id,val)
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/rooms.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    if(this.responseText==1){
      alert('Thành công','Trạng thái đã được thay đổi!');
      get_all_rooms();
    }
    else{
      alert('Lỗi','Máy chủ gặp sự cố!');
    }
  }

  xhr.send('toggle_status='+id+'&value='+val);
}

let add_image_form = document.getElementById('add_image_form');

add_image_form.addEventListener('submit',function(e){
  e.preventDefault();
  add_image();
});

function add_image()
{
  let data = new FormData();
  data.append('image',add_image_form.elements['image'].files[0]);
  data.append('room_id',add_image_form.elements['room_id'].value);
  data.append('add_image','');

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/rooms.php",true);

  xhr.onload = function()
  {
    if(this.responseText == 'inv_img'){
      alert('Lỗi','Chỉ cho phép hình ảnh định dạng JPG, WEBP hoặc PNG!','image-alert');
    }
    else if(this.responseText == 'inv_size'){
      alert('Lỗi','Kích thước ảnh phải nhỏ hơn 2MB!','image-alert');
    }
    else if(this.responseText == 'upd_failed'){
      alert('Lỗi','Tải ảnh lên thất bại. Máy chủ gặp sự cố!','image-alert');
    }
    else{
      alert('Thành công','Ảnh mới đã được thêm vào!','image-alert');
      room_images(add_image_form.elements['room_id'].value,document.querySelector("#room-images .modal-title").innerText);
      add_image_form.reset();
    }
  }
  xhr.send(data);
}

function room_images(id,rname)
{
  document.querySelector("#room-images .modal-title").innerText = rname;
  add_image_form.elements['room_id'].value = id;
  add_image_form.elements['image'].value = '';

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/rooms.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    document.getElementById('room-image-data').innerHTML = this.responseText;
  }

  xhr.send('get_room_images='+id);
}

function rem_image(img_id,room_id)
{
  let data = new FormData();
  data.append('image_id',img_id);
  data.append('room_id',room_id);
  data.append('rem_image','');

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/rooms.php",true);

  xhr.onload = function()
  {
    if(this.responseText == 1){
      alert('Thành công','Ảnh đã được xóa!','image-alert');
      room_images(room_id,document.querySelector("#room-images .modal-title").innerText);
    }
    else{
      alert('Lỗi','Xóa ảnh thất bại!','image-alert');
    }
  }
  xhr.send(data);  
}

function thumb_image(img_id,room_id)
{
  let data = new FormData();
  data.append('image_id',img_id);
  data.append('room_id',room_id);
  data.append('thumb_image','');

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/rooms.php",true);

  xhr.onload = function()
  {
    if(this.responseText == 1){
      alert('Thành công','Ảnh đại diện đã được thay đổi!','image-alert');
      room_images(room_id,document.querySelector("#room-images .modal-title").innerText);
    }
    else{
      alert('Lỗi','Cập nhật ảnh đại diện thất bại!','image-alert');
    }
  }
  xhr.send(data);  
}

function remove_room(room_id)
{
  if(confirm("Bạn có chắc chắn muốn xóa phòng này không?"))
  {
    let data = new FormData();
    data.append('room_id',room_id);
    data.append('remove_room','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rooms.php",true);

    xhr.onload = function()
    {
      if(this.responseText == 1){
        alert('Thành công','Phòng đã được xóa!');
        get_all_rooms();
      }
      else{
        alert('Lỗi','Xóa phòng thất bại!');
      }
    }
    xhr.send(data);
  }

}

window.onload = function(){
  get_all_rooms();
}
