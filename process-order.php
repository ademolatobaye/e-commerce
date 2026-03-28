<?php
session_start();
include('db_conn.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $invoice = "INV-" . time();

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];
    $delivery = $_POST['delivery'];
    $note = $_POST['note'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO invoice_orders 
    (invoicenumber, customername, customerphone, customeremail, customeraddress, amount, customerpaymentmethod, deliverymethod, ordernote, quantity, paymentstatus) 
    
    VALUES 
    ('$invoice', '$name', '$phone', '$email', '$address', '$amount', '$payment_method', '$delivery', '$note', '$quantity', 'pending')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['invoice'] = $invoice;

        echo "<script>alert('Order Created Successfully.')</script>";

    } else {
        echo "Error creating order";
    }
}
?>