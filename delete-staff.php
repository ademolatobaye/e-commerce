<?php
include("db_conn.php");
if(isset($_REQUEST['id'])){
    $sql="SELECT * FROM stafftable WHERE id= '$_REQUEST[id]'";
    $result= mysqli_query($conn, $sql);
    $rows= mysqli_fetch_array($result);

?>
<?php
$sql="DELETE FROM stafftable WHERE id='$_REQUEST[id]'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Participant successfully deleted.');
    window.location.href='view-staff.php'</script>";
}
else{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
}

?>