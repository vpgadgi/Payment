<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    // Retrieve other fields...
    
    // Simulate a successful or failed response from the payment gateway
    $simulate_success = true; // Set to false to simulate failure
    
    if ($simulate_success) {
        // Payment was successful
        $message = "Payment successful! Thank you for your purchase.";
    } else {
        // Payment failed
        $message = "Payment failed. Please try again or contact support.";
    }
    
    // Redirect back to the HTML page with the message as a parameter
    header("Location: payment_form.html?message=" . urlencode($message));
    exit();
}
?>
