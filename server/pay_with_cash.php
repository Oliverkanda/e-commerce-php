<?php
include('connection.php'); // Include your database connection file

if (isset($_POST['pay_with_cash_btn'])) {
    $order_id = $_POST['order_id'];

    $query = "UPDATE orders SET order_status = 'paid' WHERE order_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $order_id);

    if ($stmt->execute()) {
        // Redirect to a success page
        header("Location: ../order_success.php");
    } else {
        // Handle errors
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
