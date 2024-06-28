let sliderInner = document.querySelector(".slider--inner");

let image = sliderInner.querySelectorAll("img");

let index = 1;

setInterval(function(){
    let percentage = index * -100;
    sliderInner.style.transform = "translateX(" + percentage + "%)";
    index ++;
        if(index > image.length -1){
            index = 0;
        }
    
},5000);