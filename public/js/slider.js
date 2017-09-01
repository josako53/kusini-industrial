jQuery(document).ready(function(){
	//configuration
	var width = 720;
	var pause = 3000;
	var animationSpeed = 1000;

	
	//if it's last slide, go to position 1 (0px)

	//listen for mouseenter and pause
	//resume on mouseleave

	//cache the dom
	var $slider = $('#sliderWrapper');
	var $slideContainer = $slider.find('.slideContainer');
	var $slides = $slideContainer.find('.innerSlide');
	var currentSlide = 1;

	//setInterval
	//animate margin-left

	var interval;

	function startSlider(){

		interval = setInterval(function(){
		$slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function(){
			currentSlide++;
			if(currentSlide === $slides.length){
				currentSlide = 1;
				$slideContainer.css('margin-left', 0);
			}
		});
	}, pause);

	}

	function stopSlider(){
		clearInterval(interval);
	}


	$slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);

	startSlider();


});