const letfbtn = document.querySelector('.left');
const rightbtn = document.querySelector('.rigth');
const image = document.querySelector('.image');

var images = [
    "https://cdn.trendhunterstatic.com/thumbs/colorful-photoshoot.jpeg",
    "https://i.pinimg.com/originals/5b/13/b4/5b13b4fdec08dd3942d176535caa9c83.jpg",
    "https://cdn.trendhunterstatic.com/thumbs/colorful-fashion-photographs.jpeg"


];
console.log(images.length);
var i=0 ;


rightbtn.addEventListener('click',function(){
    i++;
    if(i===0 || i<(images.length) ){
        image.src = images[i];
    }else{
        i--;
    }

});


letfbtn.addEventListener('click',function(){
    i--;
    if(i<=images.length && i>=0){
        image.src = images[i];
    
    }
    else{
        i++;
    }
})    
        
            