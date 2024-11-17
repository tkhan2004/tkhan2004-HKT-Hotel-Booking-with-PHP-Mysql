<?php
require('../inc/essentials.php');
require('../inc/db_config.php');
date_default_timezone_set("Asia/Ho_Chi_Minh");
adminLogin();

if (isset($_POST['get_bookings'])) {
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    
    // Sửa lại JOIN giữa `booking_order` và `user_cred` theo yêu cầu
    $query = "SELECT bo.*, uc.name AS user_name, uc.phonenum, uc.address, uc.email 
              FROM booking_order bo
              LEFT JOIN user_cred uc ON bo.user_id = uc.id
              WHERE uc.name LIKE ? OR bo.room_id LIKE ?
              ORDER BY bo.datentime DESC";
    $res = select($query, ["%$search%", "%$search%"], 'ss');
    
    $output = '';
    $i = 1;

    while ($row = $res->fetch_assoc()) {
        $output .= "
        <tr>
            <td>$i</td>
            <td>
                <strong>Name:</strong> {$row['user_name']}<br>
                <strong>Email:</strong> {$row['email']}<br>
                <strong>Phone:</strong> " . (isset($row['phonenum']) ? $row['phonenum'] : 'N/A') . "<br>
                <strong>Address:</strong> " . (isset($row['address']) ? $row['address'] : 'N/A') . "
            </td>
            <td>
                <strong>Room:</strong> {$row['room_id']}<br>
                <strong>Price:</strong> " . (isset($row['price']) ? number_format($row['price'], 0, ',', '.') : 'N/A') . " VND
            </td>
            <td>
                <strong>Check-in:</strong> {$row['check_in']}<br>
                <strong>Check-out:</strong> {$row['check_out']}
            </td>
        </tr>";
        $i++;
    }

    // Return no bookings found if no results
    echo $output ?: '<tr><td colspan="4" class="text-center">No bookings found.</td></tr>';
}

?>
