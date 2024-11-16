<?php
session_start();
require('admin/inc/db_config.php');

if (isset($_POST['pay_now'])) {
    // Check if user is logged in
    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        $frm_data = filteration($_POST);

        // Insert the booking details into the database
        $booking_status = 'new';
        $order_id = uniqid('order_');  // Generate a unique order ID
        $trans_status = 'pending';     // Default transaction status
        $trans_amt = $_SESSION['room']['price'];  // Example for transaction amount
        $trans_resp_msg = NULL;  // Set this to an appropriate response message if needed
        $refund = NULL;  // Set refund if applicable
        $rate_review = NULL;  // Set review if needed
        $datentime = date('Y-m-d');  // Current timestamp for the booking

        // Insert the booking details into the database
        $query = "INSERT INTO booking_order 
                  (user_id, room_id, check_in, check_out, trans_amt, booking_status, order_id, trans_id, trans_status, trans_resp_msg, refund, rate_review, datentime) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $values = array(
            $_SESSION['uId'],               // user_id
            $_SESSION['room']['id'],        // room_id
            $frm_data['checkin'],           // check_in
            $frm_data['checkout'],          // check_out
            $trans_amt,                     // trans_amt
            $booking_status,                // booking_status
            $order_id,                      // order_id
            NULL,                           // trans_id (nullable)
            $trans_status,                  // trans_status
            $trans_resp_msg,                // trans_resp_msg
            $refund,                        // refund
            $rate_review,                   // rate_review
            $datentime                       // datentime
        );

        // The correct data type string: 
        $datatypes = 'iiddisssssssd';  // 13 placeholders, so we need 13 types
        
        $result = insert($query, $values, $datatypes);


        if ($result) {
			// Update the room status to indicate it's no longer available
			$update_query = "UPDATE rooms SET status = ? WHERE id = ?";
			$update_values = [0, $_SESSION['room']['id']];
			update($update_query, $update_values, 'ii');
		
			// Update the booking details with check-in and check-out dates
			$update_booking_query = "UPDATE booking_order SET check_in = ?, check_out = ? WHERE order_id = ?";
			$update_booking_values = [$frm_data['checkin'], $frm_data['checkout'], $order_id]; // Make sure to replace $order_id with your actual order ID
			$update_booking_result = update($update_booking_query, $update_booking_values, 'sss');
		
			if ($update_booking_result) {
				// Redirect to the booking success page
				header('Location: booking_success.php');
				exit; // Stop further script execution after the redirect
			} else {
				echo "Error updating booking details!";
			}
		} else {
			echo "Error adding the booking information!";
		}
		
		
    } else {
        echo "You need to log in to book a room!";
    }
}
?>
