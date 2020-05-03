
<!DOCTYPE html>
<html>
<head>
  <title>Command Center report upload page</title>
</head>
<body>
  <form enctype="multipart/form-data" action="command-upload.php" method="POST">
    <p>Command Center report upload page</p>
    <input style= "color:red" type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>

<!-- Start php -->
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "command/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again! | خطأ";
    }
  }
?>
<!-- End php -->