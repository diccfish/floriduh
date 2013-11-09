	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/jquery.windows.js"></script>
	<script src="js/jquery.lettering.js"></script>
	<script src="js/circletype.js"></script>
	<script src="js/draggabilly.js"></script>
	<script>
		$('.window').windows({
            snapping: true,
            snapSpeed: 500,
            snapInterval: 1100,
            onScroll: function(scrollPos){},
            onSnapComplete: function($el){},
            onWindowEnter: function($el){}
        });
		
		$('#intro-heading').circleType({fluid:true});
	</script>
	<script>
		var elem = document.querySelector('#drag');
		var draggie = new Draggabilly( elem );
	</script>
	<script src="js/arrow.js"></script>
</body>
</html>