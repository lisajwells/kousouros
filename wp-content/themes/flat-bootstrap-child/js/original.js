/*
	@title	KousourosLaw.com JS File
	@author	John Paul Barbagallo
*/

var KOUSOUROS = function($){
	var self = this;
	var toTopOpened = false;
	
	self.init = function() {

	}
	
	self.initHome = function() {
		if(!$.cookie('kousouroslaw')) {
			// create the cookie
			$.cookie('kousouroslaw', 'jklaw_cookie', { expires: 1 });
			
			// do the home init with the splash screen
			self.doHomeInit(true);
		} else {
			self.doHomeInit(false);
		}
	}
	
	self.maxlength = function(t){
		t.keypress(function(event){
			var key = event.which;
	
			//all keys including return.
			if(key >= 33 || key == 13) {
				var maxLength = t.attr("maxlength");
				var length = this.value.length;
				if(length >= maxLength) {
	
					event.preventDefault();
				}
			}
		});
	}

	
	self.doHomeInit = function(splashScreen) {
		if(!splashScreen || splashScreen == false) {
			$("img.splash-logo, #intro-splash").css('display', 'none');
			
			$('.hp-slider1').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
			$('.hp-slider2').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
			$('.hp-slider3').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
		} else {
			$("img.splash-logo").animate({
					opacity: 1
				}, 1200, "swing", function(){
					setTimeout(function(){$("#intro-splash").fadeOut(800,
						function(){}
					);}, 2000);
				});
				
			$('.hp-slider1').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
			$('.hp-slider2').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
			$('.hp-slider3').cycle({fx: 'fade', speed: 1100, timeout: (1900 + (Math.floor(Math.random() * 550)))});
		}
		
		$('#ticker').newsTicker();
	}
	
	self.addToTopLinkListeners = function() {
		$("#content-sidebar ul li").each(function(){
			$(this).click(function(){
				self.openToTop();
			});
		});
		
		$("div#to-top a").click(function() {
			self.doToTop();
		});
	}
	
	self.openToTop = function() {
		if(toTopOpened == false) {
			// animate it up
			$("div#to-top").animate({
				top: "0px"		
			}, 1400, "swing");
			
			toTopOpened = true;
		}
	}
	
	self.doToTop = function() {
			if(toTopOpened == true) {
				$("div#to-top").animate({
					top: "-35px"		
				}, 700);
				
				$.scrollTo('body', 800);
				
				toTopOpened = false;
			}
	}
	
	self.sendContactForm = function(aFormId) {
		if($("#" + aFormId).validate().form()) {
			// hide the form
			$("#" + aFormId).slideToggle("350");
			
			// set variables to use for the ajax data
			var fullname = $("#" + aFormId + " fieldset ol>li input#fullname").attr('value');
			var email = $("#" + aFormId + " fieldset ol>li input#email").attr('value');
			var themessage = $("#" + aFormId + " fieldset ol>li textarea#themessage").val();
			
			//submit it
			$.post("utils/submit.php",{fullname: fullname, email: email, themessage: themessage}, function(data){
					if(data == "success"){
						//show success msg
						$("div#contact-form-wrap h3.success").fadeIn("400");
					} else if(data == "error"){
						$("div#contact-form-wrap h3.error").fadeIn("400").fadeOut("3000");
						$("#" + aFormId).slideToggle("350");
					}					
				}
			);
		}
	}
	
	
	
	return self;
}