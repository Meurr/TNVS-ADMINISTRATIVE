<?php
include '../database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['docu_id'])) {
  $docu_id = $_POST['docu_id'];

  // Update the document status to "Archived"
  $sql = "UPDATE admin_document_info SET docu_status='Archived' WHERE docu_id=$docu_id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    // Move the archived document to the archive table
    $sql = "INSERT INTO admin_document_archive SELECT * FROM admin_document_info WHERE docu_id=$docu_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
      // Delete the document from the original table
      $sql = "DELETE FROM admin_document_info WHERE docu_id=$docu_id";
      $result = mysqli_query($con, $sql);

      if ($result) {
        header('Location: ../modules/document-list.php');
        exit();
      } else {
        die(mysqli_error($con));
      }
    } else {
      die(mysqli_error($con));
    }
  } else {
    die(mysqli_error($con));
  }
}
?>