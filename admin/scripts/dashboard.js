// Hàm load số liệu tổng quan
function loadUserAnalytics(period=1){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/dashboard.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        let data = JSON.parse(this.responseText);
        document.getElementById('total_queries').textContent = data.total_queries;
        document.getElementById('total_reviews').textContent = data.total_reviews;
        document.getElementById('total_new_reg').textContent = data.total_new_reg;
        document.getElementById('total_bookings').textContent = data.total_bookings;
    }

    xhr.send('user_analytics&period='+period);
}

// Hàm load số đơn mới
function loadNewBookings(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/dashboard.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        let data = JSON.parse(this.responseText);
        document.getElementById('new_bookings').textContent = data.new_bookings;
    }

    xhr.send('get_new_bookings');
}

// Hàm load chi tiết trạng thái đơn
function loadBookingsStatus(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/dashboard.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        let data = JSON.parse(this.responseText);
        document.getElementById('new_bookings').textContent = data.new_bookings;
        document.getElementById('cancelled_bookings').textContent = data.cancelled_bookings;
        document.getElementById('completed_bookings').textContent = data.completed_bookings;
        document.getElementById('total_bookings').textContent = data.total_bookings;
    }

    xhr.send('get_bookings_status');
}

// Hàm load doanh thu
function loadEarnings(period='month'){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/dashboard.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        let data = JSON.parse(this.responseText);
        document.getElementById('total_earnings').textContent = 
            new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' })
            .format(data.total_earnings);
        document.getElementById('total_bookings').textContent = data.total_bookings;
        document.getElementById('avg_payment').textContent = 
            new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' })
            .format(data.avg_payment);
    }

    xhr.send('get_earnings&period='+period);
}

// Load dữ liệu khi trang tải xong
window.onload = function(){
    loadUserAnalytics();
    loadNewBookings();
    loadBookingsStatus();
    loadEarnings();
}

// Cập nhật định kỳ
setInterval(function(){
    loadNewBookings();
    loadBookingsStatus();
}, 30000); // Cập nhật mỗi 30 giây