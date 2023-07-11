<?php
if(isset($_POST["submit"])){
 
    $conn = new mysqli("localhost", "root", "", "myblogdata");

    $names = $_POST["names"];
    $images = $_FILES["images"];
    $titles = trim(htmlspecialchars($_POST["titles"]));
    $contents = trim(htmlspecialchars($_POST["contents"]));

    if (isset($_FILES["images"])) {

        $image_name = $images["name"];
        $image_type = $images["type"];
        $image_tmp_name = $images["tmp_name"];
        $image_size = $images["size"];
  
        // Check if the file is an image
        $image_check = getimagesize($image_tmp_name);
        if ($image_check !== false) {
          // Move the file to the images folder
          $target_dir = "move_uploaded_file/";
          $target_file = $target_dir . basename($image_name);
          move_uploaded_file($image_tmp_name, $target_file);
          $images = serialize($images);
        } else {
          echo "File is not an image.";
        }
      } else {
        $image_name = "";
      }

    // Save the data to the database
    $sql = "INSERT INTO alldata(`Names`,`Images`,`Title`,`Content`) VALUES ('$names', '$images','$titles', '$contents')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "data successfully";
    } else {
        echo "Error saving data: " . mysqli_error($conn);
    }
}
?>
