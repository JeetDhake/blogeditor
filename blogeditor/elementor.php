<?php
include('connect.php');
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

    <div class="sidebar close-sb">
        <div class="links">
            <a href="landingpage.php">
                <i class="fa-solid fa-house"></i>
                <p>Dashboard</p>
            </a>
            <a href="post.php">
                <i class="fa-regular fa-compass"></i>
                <p>Posts</p>
            </a>
            <a href="addpost.php">
                <i class="fa-regular fa-square-plus"></i>
                <p>AddPost</p>
            </a>
            <a href="category.php">
                <i class="fa-solid fa-layer-group"></i>
                <p>Category</p>
            </a>
            <a href="media.php">
                <i class="fa-solid fa-clapperboard"></i>
                <p>Media</p>
            </a>
            <a href="pages.php">
                <i class="fa-regular fa-file-lines"></i>
                <p>Pages</p>
            </a>
            <a href="elementor.php">
                <i class="fa-brands fa-elementor"></i>
                <p>Elementor</p>
            </a>
            <a href="user.php">
                <i class="fa-solid fa-user"></i>
                <p>User</p>
            </a>
            <a href="editor.php">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>Editor</p>
            </a>
            <a href="settings.php">
                <i class="fa-solid fa-gear"></i>
                <p>Settings</p>
            </a>
            <hr>
        </div>
    </div>


    <div class="bxp container">
        <div class="editor">
            <form action="">
                <div class="xbtn" id="xbtn">
                    <button><i class="fa-solid fa-heading"></i><br>Heading</button>
                    <button><i class="fa-solid fa-paragraph"></i><br>Paragraph</button>
                    <button><i class="fa-regular fa-image"></i><br>Image</button>
                    <button><i class="fa-solid fa-video"></i><br>Video</button>
                    <button><i class="fa-solid fa-list-ul"></i><br>List</button>

                    <button id="htmlbtn"><i class="fa-solid fa-code"></i><br>Html</button>
                    <button><i class="fa-solid fa-grip"></i><br>Gallery</button>
                    <button><i class="fa-solid fa-tablet-screen-button"></i><br>Button</button>
                    <button><i class="fa-regular fa-message"></i><br>Messages</button>
                    <button><i class="fa-solid fa-link"></i><br>Links</button>

                </div>
                <div class="sv">
                    <button type="submit"><i class="fa-regular fa-floppy-disk"></i> Upload Blog</button>
                </div>

                <div class="htmle inputfld" id="htmled">
                    <label for="">HTML</label>
                    <textarea id=htmle onkeyup="run()" name="htmle" cols="30" rows="10" class="textarea" placeholder="add tags"></textarea>
                    <button id="back"><i class="fa-regular fa-share-from-square"></i>Save</button>
                </div>
            </form>
        </div>
        <div class="console">
            <iframe id="output"></iframe>
        </div>
    </div>



    <script src="landingpage.js"></script>
    <script>
        function run(){
            let htmlcd = document.getElementById("htmle").value;
            let output = document.getElementById("output");

            output.contentDocument.body.innerHTML = htmlcd;
        }


        
var htmlbtn = document.getElementById("htmlbtn");
var bns = document.getElementById("xbtn");
var htmled = document.getElementById("htmled");
var back = document.getElementById("back");

htmlbtn.addEventListener("click", (e)=>{
    e.preventDefault();
    bns.style.display="none";
    htmled.style.display="block";
});
back.addEventListener("click", (e)=>{
    e.preventDefault();
    bns.style.display="block";
    htmled.style.display="none";
});
        
        

    </script>
</body>