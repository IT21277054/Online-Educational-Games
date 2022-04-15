console.clear();
console.log('Hello');

let imageArray = ['../Images/Slideshow/img1.jpg', '../Images/Slideshow/img2.jpg', '../Images/Slideshow/img3.jpg'];
let i = 0;

function slideShow() {
    document.getElementById('slider-image').className = 'trans';

    setTimeout(function () {
        document.getElementById('slider-image').src = imageArray[i];
        document.getElementById('slider-image').className = "";
    }, 1000);

    i++
    console.log(i);
    if (i == imageArray.length) { i = 0; }

    setTimeout('slideShow()', 5000);
}
slideShow();