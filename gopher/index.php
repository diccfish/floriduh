<?php include('header.php'); ?>
	<main>

		<article class="gopher-tortoise">
			<div>
				<h1>The Gopher Tortoise</h1>
			</div>
		</article>
		
		<article class="hole-enter">
			<div>
				<h1>Gopher Tortoise is a keystone species</h1>
				<h1>sharing its burrows with 350+ other species</h1>
				<section id="hole-entrance">
					<h1>Have a look</h1>
				</section>
			</div>
		</article>

		<article class="hole">
			<div class="img"><img src="img/gopher-tortoise-burrows.jpg" /></div>
		</article>

		<article>
			<div>
				<h1>A Lesson From Our Teacher</h1>
				<video class="video" controls preload poster="media/gopher-tortoise-poster.jpg">
					<source src="media/vernon.webm" type="video/webm">
					<source src="media/vernon.mp4" type="video/mp4">
					<source src="media/vernon.ogg" type="video/ogg">
					No Video Support. <a href="http://browser-update.org/" target="_blank">Update Your Browser!</a>
				</video>
		</article>

		<article class="map">
			<div>
				<h1>Gopher Tortoise Territory</h1>
				<?php 
					include('media/florida.svg'); 
					include('media/florida-gopher.svg');
				?>
				<h1 id="map-hover">Florida Gopher Territory</h1>
			</div>
		</article>

		<article class="info">
			<div>
				<p>Gopher Tortoise's like dry sandy land, which is provide by long leaf pine forests.</p>
				<p>Since European settlement in Florida, 96% of long leaf pine forests have been destroyed.</p>
			</div>
			<section>

			</section>
		</article>
		<article class="links">
			<div>
				<h1>Learn More About Florida and the Gopher Tortoise!</h1>
				<h1>Here Are Some Resources</h1>
				<a href="http://en.wikipedia.org/wiki/Gopher_tortoise" target="_blank">Wikipedia</a>
				<a href="http://myfwc.com/wildlifehabitats/profiles/reptiles-and-amphibians/reptiles/gopher-tortoise/" target="_blank">Florida Fish and Wildlife</a>
				<a href="http://naturetime.wordpress.com/2012/04/23/florida-gopher-tortoise/" target="_blank">Nature Time Blog</a>
			</div>
		</article>
		<article class="home">
			<div>
				<a href="/"><h1>Back Home</h1></a>
			</div>
		</article>
	</main>
<?php include('footer.php'); ?>