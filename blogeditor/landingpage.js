var menui = document.querySelector(".fa-bars");
var sb = document.querySelector(".sidebar");
var container = document.querySelector(".container");

menui.onclick = function(){
    sb.classList.toggle("close-sb");
    container.classList.toggle("lg-container");
}

const activepage = window.location.pathname;
const link = document.querySelectorAll('.links a').
forEach(link => {
    if(link.href.includes(`${activepage}`)){
        link.classList.add('activelink');
    }
});


const drop = document.getElementById("drop");
const inputf = document.getElementById("img");
const imgview = document.getElementById("img-view");

inputf.addEventListener("change", uploadImage);

function uploadImage(){
    inputf.files[0];
    let imgLink = URL.createObjectURL(inputf.files[0]);
    imgview.style.backgroundImage = `url(${imgLink})`;
    imgview.textContent = "";
    
}

drop.addEventListener("dragover", function(e){
    e.preventDefault();
});
drop.addEventListener("drop", function(e){
    e.preventDefault();
    inputf.files = e.dataTransfer.files;
    uploadImage();
});





