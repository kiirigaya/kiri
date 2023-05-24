const commentButtons = document.querySelectorAll(".c");
const commentbs = document.querySelectorAll(".cc");
const commentSections = document.querySelectorAll(".comment");
const articleSections = document.querySelectorAll(".art");


commentButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        commentSections[index].classList.toggle('show');
        articleSections[index].classList.toggle('show');
        commentbs[index].classList.toggle('show');
    });
});



const menuHamburger = document.querySelector(".hb")
const navLinks = document.querySelector(".navlinks")
menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile-menu')
})



var x = 0 ;

function next() {
    
    var element = document.getElementById("topics");
    x=x+260;
    if(x =='260'){
        element.style.transform = "translateX(-520px)";
        x=-520;
        
    }else
    element.style.transform = "translateX("+x+"px)";
    console.log(x);
    
}


  
var button = document.getElementById("nextBtn");
button.addEventListener("click", next);

function prev() {
    var element = document.getElementById("topics");
    x=x-260;
    if(x =='-780'){
        element.style.transform = "translateX(0px)";   
        x=0; 
    }else
        element.style.transform = "translateX("+x+"px)";

    
   
}
  
var button = document.getElementById("prevBtn");
button.addEventListener("click", prev);



