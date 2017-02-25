<?php
if ( isset( $_FILES['file'] ) ) {
    echo "name: ".     $_FILES['file']['name']."<br />";
    echo "size: ".     $_FILES['file']['size']." bytes<br />";
    echo "temp name: ".$_FILES['file']['tmp_name']."<br />";
    echo "type: ".     $_FILES['file']['type']."<br />";
    echo "error: ".    $_FILES['file']['error']."<br />";

    if ( $_FILES['file']['type'] == "image/jpeg" ) {
        $source = $_FILES['file']['tmp_name'];
        $target = "./upload/".$_FILES['file']['name'];
        move_uploaded_file( $source, $target );
        $size = getImageSize( $target );

        $imageupload = "<p><img width=\"$size[0]\" height=\"$size[1]\" " . "src=\"$target\" alt=\"uploaded image\" /></p>";

        echo $imageupload;
    }
}
?>