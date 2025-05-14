<?php
include '../db.php'; // This includes your DB connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize id

    // Optional: fetch file path to delete the uploaded file
    $result = $conn->query("SELECT file FROM contactus WHERE id = $id");
    $row = $result->fetch_assoc();
    if ($row && !empty($row['file']) && file_exists($row['file'])) {
        unlink($row['file']); // delete the uploaded file
    }

    // Delete from DB
    $stmt = $conn->prepare("DELETE FROM contactus WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: ./contacts.php');
        // Optionally redirect
        // header("Location: contacts.php");
        // exit;
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>