const menuIcon = document.getElementById("menu-icon");
const slideoutmenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchbox = document.getElementById("searchbox");

searchIcon.addEventListener('click',function(){
    if(searchbox.style.top=='720px'){
        searchbox.style.top='24px';
        searchbox.style.pointerEvents ='none';
    }else{
        searchbox.style.top='72px';
        searchbox.style.pointerEvents='auto';
    }
});

menuIcon.addEventListener('click', function(){
    if (slideoutmenu.style.opacity=="1"){
        slideoutmenu.style.opacity='0';
        slideoutmenu.style.pointerEvents='none';
    }else{
        slideoutmenu.style.opacity='0';
        slideoutmenu.style.pointerEvents='auto';
    }
});
searchbox.addEventListener('click', function(){
    if (slideoutmenu.style.opacity=="1"){
        slideoutmenu.style.opacity='0';
        slideoutmenu.style.pointerEvents='none';
    }else{
        slideoutmenu.style.opacity='0';
        slideoutmenu.style.pointerEvents='auto';
    }
});