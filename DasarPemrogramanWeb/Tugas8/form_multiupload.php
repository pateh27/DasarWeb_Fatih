<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah" name="submit">
        </form>
    </form>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .gif, .png">
        <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .gif, .png">
            <input type="submit" value="Unggah" name="submit">
        </form>
    </form>
</body>
</html>