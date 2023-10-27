document.addEventListener("DOMContentLoaded", function () {
    let images = document.querySelectorAll(".slider img");
    let currentImage = 0;
    let name = document.querySelectorAll(".slider name");

    function showImage(index) {
        images[currentImage].style.display = "none";
        images[index].style.display = "block";
        currentImage = index;
    }
    function showName(index) {
        name[currentName].style.display = "none";
        name[index].style.display = "block";
        currentName = index;
    }

    function nextImage() {
        let next = (currentImage + 1) % images.length;
        showImage(next);
    }
    function nextName() {
        let next = (currentName + 1) % names.length;
        showName(next);
    }

    setInterval(nextImage, 12000); 
    setInterval(nextName, 12000); // Change image every 3 seconds
});
