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
