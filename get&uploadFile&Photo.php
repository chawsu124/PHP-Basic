<!-------------- upload or get (File or Photo) ------------->


<!-- For Single File/Photo
<?php
    // if(isset($_POST['submit'])){

     //    $file_tmp =  $_FILES['file']['tmp_name'];
    //     $file_name = $_FILES['file']['name'];

    //     // Upload file and show
    //     echo $file_tmp . "<br>";
    //     echo $file_name . "<br>";
    //     echo $_FILES['file']['size'] . "<br>";
    //     echo $_FILES['file']['type'] . "<br>";

    //     // Get file which upload
    //     move_uploaded_file($file_tmp,
    //                     'img/' . $file_name);
    //     echo "upload success";
    // }
?> -->

<!------------- Hilight Point ----------->
<!-- If you upload file, you must use enctype = "multipart/form-data" in form -->

<!-- <form action="<?php //$_PHP_SELF ?>" method = "post" enctype = "multipart/form-data">
    <h2>File Upload</h2>
    <input type="file" name = "file">
    <button type = "submit" name = "submit">Submit</button>
</form> -->

<!-- --------------------------------------------------- -->

<!-- For Multiple File/Photo -->
<?php
    if(isset($_POST['submit'])){

        // Upload file and show
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];

        // cause multiple file , use foreach
        foreach($file_tmp as $key => $value){
            echo $file_name[$key] . "<br>";// file name
            echo $file_tmp[$key] . "<br>"; // file temporary name

            // Get file which upload
            move_uploaded_file($file_tmp[$key],
            'img/' . $file_name[$key]);
            echo "upload success";
        }

    }
?>

<!------------- Hilight Point ----------->
<form action="<?php $_PHP_SELF ?>" method = "post" enctype = "multipart/form-data">
    <h2>File Upload</h2>
    <!-- use multiple in input -->
    <input type="file" name = "file[]" multiple> 
    <button type = "submit" name = "submit">Submit</button>
</form>

<!-- -------------------------------------------------------- -->