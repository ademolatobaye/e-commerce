<?php
include("db_conn.php");
if(isset($_REQUEST['id'])){
    $sql="SELECT * FROM product_table WHERE id= '$_REQUEST[id]'";
    $result= mysqli_query($conn, $sql);
    $rows= mysqli_fetch_array($result);

?>
<?php
$sql="DELETE FROM product_table WHERE id='$_REQUEST[id]'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Product successfully deleted.');
    window.location.href='product.php'</script>";
}
else{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
}

?>