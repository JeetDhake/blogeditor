<?php
include('connect.php');



if (isset($_POST['Add-Category'])) {

    $category = $_POST['category'];
    $slug = $_POST['slug'];
    

    if ($category == '' or $slug == '') {
        echo "<script>
                alert('enter all fields mf')
              </script>";
        exit();
    } else {


        $insert_cat = "INSERT INTO `category` (category,slug) VALUES ('$category','$slug')";

        $result_query = mysqli_query($con, $insert_cat);
        if ($result_query) {
            echo "<script>
                alert('category added successfully')
              </script>";
            header("location: category.php");
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b9323f08fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="landingpage.css">
    <title>blog editor</title>
</head>

<body>
    <?php require_once("navbar.html") ?>
    <?php require_once("sidebar.html") ?>

<div class="container">
<div class="actg">


        <div class="wrapperone">
            <section class="pst">
                <header>
                    Add New Category
                </header>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="pdetail">

                        <div class="fld">
                            <label for="">Category</label>
                            <input type="text" name="category" id="category" placeholder="Enter category" required>
                            <i class="fa-solid fa-feather"></i>

                        </div>


                        <div class="fld">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" placeholder="Meta data" required>

                            <i class="fa-solid fa-signature"></i>
                        </div>
                    </div>

                    <div class="fld btn">
                        <input type="submit" value="Add-Category" name="Add-Category" id="Add-Category">
                    </div>
        
                </form>

            </section>
        </div>


        <div class="stbl">
            <div class="tb">
                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Slugs</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    $select_query = "SELECT * FROM `category`";
                    $result_query = mysqli_query($con, $select_query);


                    while ($row = mysqli_fetch_assoc($result_query)) {

                        
                        $category = $row['category'];
                        $slug = $row['slug'];



                        echo "
        
            <tr>
                <td><p class='p-g'>$category</p></td>
                <td>$slug</td>
                
            </tr>
";
                    }

                    ?>
                    </tbody>

                </table>
            </div>
        </div>

</div>   
</div>
    

    <script src="landingpage.js"></script>
</body>

</html>