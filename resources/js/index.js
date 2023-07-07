

$(document).ready(function () {
document.read
const burger = document.querySelector("#burger");
const navigation = document.querySelector("#navigation");
const sidebar = document.querySelector('#sidebar');

const orderProcess = document.querySelector('#orderProcess');
const orderDropdown = document.querySelector('#orderDropdown');
const svgRotate = document.querySelector('#arrow');


//  burger.addEventListener('click',()=>{   
    // navigation?.classList.contains('hidden') ? navigation?.classList.remove('hidden') : navigation?.classList.add('hidden');
    // navigation?.classList.toggle('hidden');
    // sidebar.classList.toggle('sidebar'); 
// });


// orderProcess.addEventListener ('click', ()=>{
//     // orderDropdown.classList.contains('hidden') ? orderDropdown.classList.remove('hidden') : orderDropdown.classList.add('hidden' );
//     orderDropdown.classList.toggle('hidden');
//     svgRotate.classList.toggle('rotate-180');
// });

$('#orderProcess').click(function (e) { 
    e.preventDefault();
    $('#orderDropdown').toggleClass('hidden');
    $('#arrow').toggleClass('rotate-180');
    
});

$('#burger').click(function (e) {  
    e.preventDefault();
    $('#navigation').toggleClass('hidden');
    $('#sidebar').toggleClass('sidebar');
});

$('#search').on('keyup', function () {
    const search = $(this).val().toLowerCase(); 
    $('#table tbody tr').each(function () {
        console.log($(this).text());
        const result = $(this).text().toLowerCase();
        // const result = $(this).find('td:nth-child(n+1)').text().toLowerCase();
        // if(result.indexOf(search) > -1){
        if(result.includes(search)){
            $(this).show();
        }else{
            $(this).hide();
        }
     });
   });
});

$(document).scroll(function () { 
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
       $('#to-top').removeClass('hidden');
    }else{
        $('#to-top').addClass('hidden');
    }
});

$('#to-top').click(function (e) { 
    window.scrollTo({top:0});
    e.preventDefault();
    
});

// $('.logos-slide').mousemove(function (e) { 
//     // values: e.clientX, e.clientY, e.pageX, e.pageY
//     $(this).scrollLeft(e.pageX);
// });
/// Skill Icon Carousel

const carousel = document.querySelector('.logos');
const arrowBtn = document.querySelectorAll(".logo-wrapper svg");
const firstIcon = carousel.querySelector(".logos-slide img").offsetWidth;
const carouselChildren = [... carousel.children];
const wrapper = document.querySelector('.logo-wrapper');
let isDragging = false , startX,  startScrollLeft, timeOutId;

// Get number of icons that can fit  in the carousel
let iconPreview = Math.round(carousel.offsetWidth / firstIcon);

carouselChildren.slice(-iconPreview).reverse().forEach(icon =>{
    carousel.insertAdjacentHTML("afterbegin", icon.outerHTML);
});

carouselChildren.slice(0, iconPreview).reverse().forEach(icon =>{
    carousel.insertAdjacentHTML("beforeend", icon.outerHTML);
});

const dragStart = (e)=> {
    isDragging = true;
    carousel.classList.add ("dragging");

    startX =e.pageX;
    startScrollLeft = carousel.scrollLeft;

}
const dragging = (e)=> {
    if(!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

    const dragStop = ()=>{
    isDragging = false;
    carousel.classList.remove("dragging");
}

// add event listener to arrow buttons
arrowBtn.forEach(btn => {
    btn.addEventListener("click", () =>{
        
        carousel.scrollLeft += btn.id === "left" ? -firstIcon : firstIcon;
    })
});

const infiniteScroll = ()=> {
    if(carousel.scrollLeft === 0){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2* carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }else if(Math.ceil(carousel.scrollLeft) == carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition");
       carousel.scrollLeft = carousel.offsetWidth;
       carousel.classList.remove("no-transition");

    }
    clearTimeout(timeOutId);
    if(!wrapper.matches(':hover')) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 200) return; // return if with is less than 800
    timeOutId = setTimeout(()=> carousel.scrollLeft += firstIcon, 2500);
}

autoPlay();
carousel.addEventListener("mousemove",dragging);
carousel.addEventListener("mousedown",dragStart);
document.addEventListener("mouseup",dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", ()=> clearTimeout(timeOutId));
wrapper.addEventListener("mouseleave",autoPlay);


