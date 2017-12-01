<?php
$image_dir = "../images-2/"; // specific upload directory
$upload_file = $image_dir . basename($_FILES["image"]["name"]); // captures data from image field

$uploadOK = 1; // default true value for successful upload

$imageFileType = pathinfo($upload_file,PATHINFO_EXTENSION); // defining file type

echo $upload_file;
echo $imageFileType;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) // seeing if there is actually a file in the upload

{
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOK = 1;
    } else {
        echo "File is not an image.";
        $uploadOK = 0;
    }
}

// Check if $uploadOK is set to 0 by an error
if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<article>
<h1> You have successfully uploaded the following image: </h1>
<img src="<?php echo $upload_file; ?>" width="300px" height="400px">

</article>