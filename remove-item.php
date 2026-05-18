<?php
include('customer-session-check.php');
include('db_conn.php');
if(isset($_REQUEST['product_id'])){
    $sql="SELECT * FROM invoiceorder WHERE product_id= '$_REQUEST[product_id]'";
    $result= mysqli_query($conn, $sql);
    $rows= mysqli_fetch_array($result);

?>
<?php
$sql="DELETE FROM invoiceorder WHERE product_id='$_REQUEST[product_id]'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Cart item successfully removed.');
    window.location.href='cart.php'</script>";
}
else{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
}


?>