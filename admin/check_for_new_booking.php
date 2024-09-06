<?php
// Your PHP code to handle database connection and check for new bookings

// Perform your database queries and logic to check for new bookings
// For testing purposes, let's assume there is a new booking when the status is 0
$status = 0; // Replace this with the actual status value from your database query

// Check if there is a new booking
$newBookingFlag = ($status == 0);

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode(array("newBooking" => $newBookingFlag));
?>
