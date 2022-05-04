<!DOCTYPE html>
<html>
<body>

<form action="UploadAadhar.php" method="post" enctype="multipart/form-data">
  Select File to upload:
  <input type="file" name="fileU" id="fileU">
  <input type="submit" value="Upload Image" name="submit">
</form>


<input class="button button2" type="submit" name="Back" value="Back" onclick="history.back()">
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
</style>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileU"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



if($imageFileType != "pdf") {
  echo "Sorry, only pdf files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
if (move_uploaded_file($_FILES["fileU"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( basename( $_FILES["fileU"]["name"])). " has been uploaded.";
}
}
}
?>