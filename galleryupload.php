<html>
<head>

<meta charset="utf-8">
<meta name="abstract" content="onion, image, host, upload, images, free, image, hosting, png, gif, jpg, download, site">
<meta name="author" content="ImageFileHost">
<meta name="classification" content="onion, image, host, upload, images, free, image, hosting, png, gif, jpg, download, site">
<meta name="copyright" content="Copyright - ImageFileHosting">
<meta name="designer" content="ImageFileHost">
<meta name="distribution" content="Global">
<meta name="language" content="en_EN">
<meta name="publisher" content="ImageFileHost">
<meta name="rating" content="General">
<meta name="resource-type" content="Document">
<meta name="revisit-after" content="1">
<meta name="subject" content="">
<meta name="template" content="ImageFileHost">
<meta name="robots" content="index,follow">
<meta name="description" content="Image-File-Hosting" />
<meta  name="keywords" content="onion, image, host, upload, images, free, image, hosting, png, gif, jpg, download, site" />



<link rel='index' title='ImageHost' href='http://imagenhmmsideych3xr3remhmav2lsex5n4moyw5mukmphvnapwrngqd.onion/' />
<link rel="shortcut icon" href="image-host.jpg" />
<title>Image/FileHost</title>
</head>
<body>
<center>
<br/>
<div class="w3-container w3-center">
<h1>Image Gallery Upload</h1>
<a href="galleryupload.php">Reload Page</a> <a href="index.php"> Single File Upload</a>
<br/>
Image Gallery Upload, allowed extensions: jpg,jpeg,png,gif MAX 500MB
<br>
<pre>
<font class="ascii">
***********
   ****** ***********
 ** ****** *** ********
****  ******  ** *******
***     ******* ** ******
***       **        *  **
 *|/------  -------\ ** *
  |       |=|       :===**
   |  O  |   | O   |  }|*
    |     |         |  |*
    |    |___       |\/ *
    |              | ****
    \   -___-     | ****
     \           | *****
       -__ -- -/ ******
</font>
</pre>
<br/>
   
    <form method='post' action='' enctype='multipart/form-data'>
      <br><input type="file" name="file[]" required id="file" multiple>
      <br>Your folder name.
      <br><input type="text" name="foldername" maxlength = "30">
      <br><input type='submit' name='submit' value='Upload'>
    </form>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><input type="submit" name="Reset Page" value="reset">
    </form>
<?php

function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
chdir('gallery');
$newfoldername = "Gallery-".$_POST['foldername']."";
$myuuid = guidv4();
$newfoldername1 = ($newfoldername.'-'.$myuuid);
#echo $myuuid;
    if(isset($_POST['submit'])){
         #chdir('/gallery');
         mkdir($newfoldername1);
         #copy("bak-index.php","".$newfoldername1."/index.php");
         chdir($newfoldername1);
        
         $countfiles = count($_FILES['file']['name']);

         $totalFileUploaded = 0;
         for($i=0;$i<$countfiles;$i++){
              $filename = $_FILES['file']['name'][$i];

              ## Location
              $location = "".$filename;
              $extension = pathinfo($location,PATHINFO_EXTENSION);
              $extension = strtolower($extension);

              ## File upload allowed extensions
              $valid_extensions = array("jpg","jpeg","png","gif");

              $response = 0;
              ## Check file extension
              if(in_array(strtolower($extension), $valid_extensions)) {
                   ## Upload file
                   if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$location)){

                   echo "Go to Folder >>> <a href=http://imagenhmmsideych3xr3remhmav2lsex5n4moyw5mukmphvnapwrngqd.onion/gallery/".$newfoldername1."/ target=\"_blank\" >".$newfoldername1."</a><br>";
                   
                   echo "File Name : ".$filename."<br>";
                   
                         $totalFileUploaded++;
                   
  
	                            
                   
                   
                   
                   
                   
                   }
              }

         }
         
 
    
    }
?>

    
</body>
</html>