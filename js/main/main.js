$("#menu-primary").append('<a href="#contato" class="btn btn--primary">contato</a>');

$(function(){
	$('.portfolio--item').eq(0).addClass('active')
	var total = $('.portfolio--item').length
	var current = 0
	$('#move--right').on('click', function(e){
		e.preventDefault()
		var next=current
		current= current+1
		setSlide(next, current)
	})
	$('#move--left').on('click', function(e){
		e.preventDefault()
		var prev=current
		current = current- 1
		setSlide(prev, current)
	})
	function setSlide(prev, next){
		var slide= current
		if(next>total-1){
			slide=0;
			current=0;
		}
		if(next<0){
			slide=total - 1;
			current=total - 1;
		}
		$('.portfolio--item').eq(prev).removeClass('active');
		$('.portfolio--item').eq(slide).addClass('active');
		setTimeout(function(){
			
		},800)
	}
})

const menuOne = document.querySelector('.menuOne')
const menu = document.querySelector('.menu')
const menuItem = document.querySelectorAll('.menu-item')
function addClassFunOne() {
	this.classList.toggle("clickMenuOne")
	menu.classList.toggle("active")	
}

menuOne.addEventListener('click', addClassFunOne)
for(let i = 0; i < menuItem.length; i++) {
	menuItem[i].addEventListener('click', () => {
		menuOne.classList.remove('clickMenuOne')
		menu.classList.remove('active')
	})
}
