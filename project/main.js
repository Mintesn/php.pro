// 'js/mian.js'

var slider_img = document.querySelector('.slider-img');
var images = ['10.jpg', '11.jpg', '12.jpg', '13.jpg', '14.jpg'];
var i = 0;

function prev(){
	if(i <= 0) i = images.length;	
	i--;
	return setImg();			 
}

function next(){
	if(i >= images.length-1) i = -1;
	i++;
	return setImg();			 
}

function setImg(){
	return slider_img.setAttribute('src', "img/"+images[i]);
	
}