<script>
	$("main").onepage_scroll({
	   sectionContainer: "article", // sectionContainer accepts any kind of selector in case you don't want to use section
	   easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	   animationTime: 1000, // AnimationTime let you define how long each section takes to animate
	   pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
	   updateURL: false // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
	});
</script>
<script src="js/raphael-min.js"></script>
<script src="js/lazylinepainter-1.4.1.min.js"></script>
<script>
	var mangrove = {
	    "redMangrove": {
	        "strokepath": [
	            {
	                "path": "M37.462,44.138c0,0-46.117-50.857-34.535-44.138",
	                "duration": 600
	            },
	            {
	                "path": "M83.363,91.042c0,0-24.422-33.351-45.901-46.904  C32.676,59.81,24.286,87.286,24.286,87.286l-30.714,69.286",
	                "duration": 600
	            },
	            {
	                "path": "M186.193,196.119  c-6.193-13.833-55.488-56.7-55.488-56.7S89.442,84.408,83.363,91.042c-6.079,6.634,10.923,73.387,10.923,73.387l47.857,167.857  L125.857,342l-20.143,46.714L121.429,400",
	                "duration": 600
	            },
	            {
	                "path": "M400,400l-53.619-50.97  c0,0-47.151-23.887-61.381-37.403c-11.533-10.955-98.807-115.507-98.807-115.507l-34.016,52.834l39.966,49.107V306l17.143,56.571",
	                "duration": 600
	            },
	            {
	                "path": "M 192.143,298.05 L 267.857,355.143 321.429,400 ",
	                "duration": 600
	            },
	            {
	                "path": "M 8.571 400 L 152.177 248.952",
	                "duration": 600
	            },
	            {
	                "path": "M 94.286,164.42 L 74.286,303 64.286,375.143   94.286,402.286 ",
	                "duration": 600
	            },
	            {
	                "path": "M 24.286,87.28 L 36.429,185.857 15,325.143   0,400 ",
	                "duration": 600
	            },
	            {
	                "path": "M 346.381 349.03 L 204.286 408.714",
	                "duration": 600
	            },
	            {
	                "path": "M 53.571 400 L 15 325.143",
	                "duration": 600
	            },
	            {
	                "path": "M 34.286 400 L 64.286 375.143",
	                "duration": 600
	            },
	            {
	                "path": "M 257.143 400 L 267.857 355.143",
	                "duration": 600
	            },
	            {
	                "path": "M 179.286 400 L 175 388.714",
	                "duration": 600
	            },
	            {
	                "path": "M 142.143,332.28 L 175,388.714 147.857,400   ",
	                "duration": 600
	            },
	            {
	                "path": "M 102.143 400 L 105.714 388.714",
	                "duration": 600
	            }
	        ],
	        "dimensions": {
	            "width": 400,
	            "height": 400
	        }
	    }
	}; 
$('.redMangroves').on("mouseover", function(){
	// Setup and Paint your lazyline! 
	$('#redMangrove').lazylinepainter( 
	{
	    "svgData": mangrove,
	    "strokeWidth": 4,
	    "strokeColor": "#a65757"
	}).lazylinepainter('paint');
});
</script>
</body>
</html>