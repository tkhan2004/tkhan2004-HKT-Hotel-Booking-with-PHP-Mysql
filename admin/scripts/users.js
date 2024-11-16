function get_users()
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/users.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    document.getElementById('users-data').innerHTML = this.responseText;
  }

  xhr.send('get_users');
}


function toggle_status(id,val)
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/users.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    if(this.responseText==1){
      alert('Thành công','Trạng thái đã được làm mới!');
      get_users();
    }
    else{
      alert('Thành công','Server sập rồi!');
    }
  }

  xhr.send('toggle_status='+id+'&value='+val);
}

function remove_user(user_id)
{
  if(confirm("Bạn có chắc là bạn muốn xóa người dùng này không?"))
  {
    let data = new FormData();
    data.append('user_id',user_id);
    data.append('remove_user','');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/users.php",true);

    xhr.onload = function()
    {
      if(this.responseText == 1){
        alert('Thành công','Xóa người dùng!');
        get_users();
      }
      else{
        alert('Lỗi','Loại bỏ người dùng thất bại!');
      }
    }
    xhr.send(data);
  }
}

function search_user(username){
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/users.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function(){
    document.getElementById('users-data').innerHTML = this.responseText;
  }

  xhr.send('search_user&name='+username);
}

window.onload = function(){
  get_users();
}