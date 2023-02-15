$( document ).ready(function() {


	
function nav(){
	
	$('.nav-toggle').click(function(){
		
		$('.nav').toggleClass('open');
		
	});
	
}

function scrollToElement(){
	const menuItems = document.querySelectorAll('.nav li a');
	menuItems.forEach(element => {
		element.addEventListener('click', () => {
			id = document.getElementById(element.className);
			id.scrollIntoView({behavior: "smooth", block: "end", inline: "end"});
			})
		
	});
}

function slider(){
	const imgs = document.querySelectorAll('.banner li');
	const btns = [document.querySelector('.prev'),document.querySelector('.next')];
	let ind = 0;

	function process(element){
		imgs.forEach(element => {
			element.classList.remove("active")
		});
		imgs[ind].classList.toggle("active")
	}
	btns.forEach(element => {
		element.addEventListener('click', () => {
			if (element === btns[0]){
				if (imgs[0].classList.contains('active')){
					ind = imgs.length-1;				
				}else{
					ind--;
				}	
			}else {
				if (imgs[imgs.length-1].classList.contains('active')){
					ind = 0;			
				}else{
					ind++;
				}
			}
			process(element);
		})
	});	
}



nav();
scrollToElement();
slider();

});
