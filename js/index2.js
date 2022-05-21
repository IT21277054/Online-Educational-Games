window.addEventListener('scroll' , function navigation()
{
    const scrolled = window.scrollY;

    if(scrolled <= 22 || scrolled == 0){
        const scroll = document.getElementById('Nav-bar-id').className = "Nav-bar";    
    }

    if(scrolled >= 20){
        const scroll = document.getElementById('Nav-bar-id').className = "Nav-bar-scroll";
        
    }
})





const imageArray = ['../Images/Slideshow/img1.jpg', '../Images/Slideshow/img2.jpg', '../Images/Slideshow/img3.jpg'];
const img = document.querySelector('#slider-image');
let i = 0;


function slideShow() {
    img.classList.add('trans');

    setTimeout(function () {
        img.src = imageArray[i];
        img.classList.remove('trans');
    }, 1000);

    i++
    if (i == imageArray.length) { i = 0; }

    setTimeout('slideShow()', 5000);
}
slideShow();