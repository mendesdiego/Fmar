jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

jQuery(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $("#toposite").addClass("navbar-fixed-top animated fadeInDown");
			$('#bannersite').addClass("retira-banner");
      //$("#bartop").addClass("bartopscroll navbar-fixed-top bar-top");
			//$('#bannersite').addClass("retira-banner");
    } else {
			  $("#toposite").removeClass("navbar-fixed-top animated fadeInDown");
				$('#bannersite').removeClass("retira-banner");
      //$("#toposite").removeClass("navbar-fixed-top animated fadeInDown");
      //$("#bartop").removeClass("bartopscroll");
			//$('#bannersite').removeClass("retira-banner");
			//$("#bartop").removeClass("navbar-fixed-top");
    }
  });
});
