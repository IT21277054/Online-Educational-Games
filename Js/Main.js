window.addEventListener('scroll',function navigation (){

    const scrolled = window.scrollY;
    
    if(scrolled <= 22 || scrolled == 0){
        const scroll = document.getElementById('Nav-bar-id').className = "Nav-bar"; 
    }
    if(scrolled>=20){;        
        const scroll = document.getElementById('Nav-bar-id').className = "Nav-bar-scroll";
    }
})