//forget-password
$(document).ready(function() {            
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
// Stellar Nav Js
jQuery(document).ready(function($) {
	jQuery('.stellarnav').stellarNav({
		theme: '',
		breakpoint: 1200,
		position: 'left',
		phoneBtn: '',
		locationBtn: ''
	});
});
// Index Sec1 Slider
$('.index-sec1-slider').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
})
// Counter JS
$('.counting').each(function() {
	var $this = $(this),
	countTo = $this.attr('data-count');

	$({ countNum: $this.text()}).animate({
		countNum: countTo
	},
	{
		duration: 3000,
		easing:'linear',
		step: function() {
			$this.text(Math.floor(this.countNum));
		},
		complete: function() {
			$this.text(this.countNum);
            //alert('finished');
        }
    });  
});

// Index Testimonial Slider JS
$('.index-testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3,
            margin:30
        }
    }
})

//label-js-start
$('#other-field').focus(function() {
	$('#other').prop("checked", true);
  });

// CART SIDEBAR
const cartOpen = document.getElementById('cart-side-toggle');
const cartSidebar = document.getElementById('cart-sidebar');
const cartclose = document.getElementById('close-cart-sidebar');
const cartOverlay = document.querySelector('.card-sidebar-overlay');
cartOpen.addEventListener('click', function(){
  cartSidebar.classList.add('active');
  cartOverlay.classList.add('active');
});
cartclose.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
});
cartOverlay.addEventListener('click', function(){
 cartSidebar.classList.remove('active');
 cartOverlay.classList.remove('active');
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', true);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});
//courses-logo-slider
var owl = $('.courses-slider-sec1');
owl.owlCarousel({
    items:5,
	margin: 40,
	center:true,
    loop:true,
	autoWidth:true,
    autoplay:true,
    autoplayTimeout:2000

});

