<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.onepage-scroll.js"></script>
<script>
	$("main").onepage_scroll({
	   sectionContainer: "article", // sectionContainer accepts any kind of selector in case you don't want to use section
	   easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	   animationTime: 1000, // AnimationTime let you define how long each section takes to animate
	   pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
	   updateURL: false // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
	});

	// FAQs
	$(".q").click(function(){

	    $(this).next().slideToggle("fast");
	});  
</script>
</body>
</html>