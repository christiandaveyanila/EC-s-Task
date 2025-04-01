let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{

    menu.classList.toggle('fa-times'); 
    navbar.classList.toggle('active');
    
}

window.onscroll = () =>{
    
    menu.classList.remove('fa-times'); 
    navbar.classList.remove('active');
    
    if(window.scrollY > 60){
        document.querySelector('#scroll').classList.add('active');
    }else{
        document.querySelector('#scroll').classList.remove('active');

    }

}


window.onload = function() {
    // Display the loader container
    document.querySelector('.loader-container');
    
    // Hide the loader after a delay (3 seconds in this example)
    setTimeout(function() {
        document.querySelector('.loader-container').style.display = 'none';
    }, 1000);
};

