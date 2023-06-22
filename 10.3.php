<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // File upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
}
?>

<!-- HTML form -->
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>

<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>