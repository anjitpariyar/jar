$(document).ready(function(){


	const currentLocation = location.href;
	const menuItem = $('footer .nav .nav__item ');
	console.log(menuItem)
	const menuLength = menuItem.length;
	for (let i = 0; i < menuLength; i++) {
		if (menuItem[i].children[0].href === currentLocation) {
			console.log(menuItem[menuItem[i].children[0].href]);
			menuItem[i].classList.add('active')
		}
	}

	$('a.cart').click(function(e){
		e.preventDefault();
		setTimeout(()=>{
			$(this).removeClass('shake');
		}, 1000)
		$(this).addClass('active');
		$(this).addClass('shake');
	});
	$('button.cart').click(function(e){
		e.preventDefault();
		$(this).addClass('active');
		$(this).text('Added to cart')
	});
	$('button.label').click(function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).text('+ your stock')
		}
		else{
			$(this).addClass('active');
			$(this).text('added')

		}
		
	});
	
	$('.inc').click(function() {
		var qtyNode =$(this).prev();
		var max= qtyNode.attr('max');
		max = parseInt(max)
		var qty =qtyNode.val();
		if (qty<max) {
			qtyNode.val(++qty);
		}
	});
	$('.dec').click(function() {
		var qtyNode =$(this).prev().prev();
		var qty =qtyNode.val();
		qtyNext=$(this).next();
		qtyV=$(this).next().val();

		if (qty > 1) {
			qtyNode.val(--qty);
		}
		else if(qtyV > 1){
			qtyNext.val(--qtyV);
		}
	});

	

	$('.nav-item.form-inline input[type=search]').focusin(function() {
		$(this).keydown(function() {
			$('.search').addClass('active');
		});	
	});
	$('.nav-item.form-inline input[type=search]').focusout(function() {
		setTimeout(()=>{
			$('.search').removeClass('active');
		}, 300)
	});


// mobinput
if($(window).width()<769){
	$('input:not([type="checkbox"]):not([type="radio"])').focusin(  
		function(){  
			$('footer').addClass('relative');  
		}).focusout(  
		function(){  
			$('footer').removeClass('relative');  
		});

	}

	// goback

	$('.goback').click(function() {
		if (document.referrer == "") {
			window.location.href='./index.php';
		}
		else {
			window.history.back();
		}
	})

	



	$('.hamburger').click(function(e){
		if(!($('.main-menu').hasClass('active'))){
			$('.main-menu').addClass('active')
			$(this).find('span').text('close')
		}
		else{
			$('.main-menu').removeClass('active')
			$(this).find('span').text('menu')
		}
	})

	delete Hammer.defaults.cssProps.userSelect;


	// var myElement = document.querySelector('body');
	// var mc = new Hammer(myElement);

	// mc.on("panleft panright", function(ev) {
	// 	if(ev.type==='panright' ){
	// 		$('.main-menu').addClass('active')
	// 		$('.hamburger span').text('close')
	// 	}
	// 	else{
	// 		$('.main-menu').removeClass('active')
	// 		$('.hamburger span').text('menu')
	// 	}
	// });

	// var item=document.querySelector('.main__carousel')
	// var itemc = new Hammer(item);


	// itemc.on("panleft panright", function(ev) {
	// 	$('.main-menu').removeClass('active')
	// 	$('.hamburger span').text('menu')

	// });



});

