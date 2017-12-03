<?php

include("mainConfig.php");



$name = $_POST["name"];

echo $name;

$about = $_POST["about"];

echo $about;

$cal = $_POST["cal"];

echo $cal;

$data = "INSERT INTO fire_ice (Food Name, About, Calories)
VALUES ('$name', '$about', '$cal')";

if ($conn->query($data) === TRUE) {
    $lastID = $conn->insert_id;

    function GetImageExtension($imagetype) {
        if (empty($imagetype))
            return false;

        switch ($imagetype) {
            case 'image/bmp': return '.bmp';
            case 'image/gif': return '.gif';
            case 'image/jpeg': return '.jpg';
            case 'image/png': return '.png';
            default: return false;
        }
    }

    if (count($_FILES['pics']['name']) > 0) {

           echo "File Count:" . count($_FILES['pics']['name']); 
        for ($i = 0; $i < count($_FILES['pics']['name']); $i++) {

            $ext = GetImageExtension($_FILES['pics']['name'][$i]);
            $tmpFilePath = $_FILES['pics']['tmp_name'][$i];
            echo $i;
            if ($tmpFilePath != "") {

                //save the filename
                $shortname = $_FILES['pics']['name'][$i];

                //save the url and the file
                $filePath = "images/" . date('d-m-Y-H-i-s') . '-' . $_FILES['pics']['name'][$i] . $ext;

                //Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    $sql = "INSERT into images (houseID,Image_Path,submission_date) VALUES 

                        ('" . $lastID . "','" . $filePath . "','" . date("Y-m-d") . "')";

                    if ($conn->query($sql) === TRUE) {
                       
                       header('location:entrySuccess.php');
                    } else if ($conn->query($sql) === FALSE) {
                             echo "Error: " . $sql . "<br>" . $conn->error;
                            
                    } else {
                        exit("Error While uploading image on the server");
                    }
                }
            }
        }
    } else {
        echo "Error: " . $data . "<br>" . $conn->error;
    }




    echo "<h1>Uploaded:</h1>";
    if (is_array($files)) {
        echo "<ul>";
        foreach ($files as $file) {
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
}
$conn->close();
?>

