<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP upload file</title>
</head>
<body>
    
<form action="./upload_script.php" method="post" enctype="multipart/form-data" >
    Select Image to Upload:
    <input type="file" name="file_upload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>
</body>
</html>