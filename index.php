<?php include('header.php'); ?>
	<main>

		<section class="intro window">
			<div class="florida">
				<?php include('img/florida.svg'); ?>
			</div>
			<div>
				<h1 id="intro-heading">Welcome to Floriduh</h1>
				<h3>more than beaches and retirees</h3>
				<h2>important true stories about florida</h2>
				<h4>scroll on down fo' mo'</h4>
			</div>
			<i><a href="#scene">&#10163;</a></i>
		</section>

		<section class="window" id="scene">
			<h1>Select A Story</h1>
			<div class="scene">
				<article class="landscape">
					<div class="cloud-wrap">
				  		<div class="cloud"></div>
			  		  	<div class="cloudalt"></div>
					</div>
					<div class="cloud-wrap">
				  		<div class="cloud"></div>
				  		<div class="cloudalt"></div>
					</div>
				</article>
				
				<article class="land"></article>
				<article class="land-wrap" id="land-wrap">
					
					<div class="drag" id="drag">
						
						<a href="gopher/" class="gopherTortoise">
							<div class="tortoise" class="tortoise">
						    	<div class="head"></div>
							</div>
						</a>
						
						<a href="mangroves/" class="mangrove">
							<div class="tree">
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
								<div class="leaf"></div>
							    <div class="trunk">
							    	<div class="leftbranch"></div>
							    	<div class="rightbranch"></div>
							    	<div class="leftbranch"></div>
							    	<div class="rightbranch"></div>
							    </div>
							</div>
						</a>
						
						<a href="narvaez/" class="narvaez">
							<div class="teepees">
					    		<div class="teepee"></div>
					    		<div class="teepee2"></div>
					    		<div class="teepee3"></div>
					  		</div>
					  	</a>

					  	<a href="panther/" class="cougar">
					  		<div class="face">
							    <div class="eye"></div>
							    <div class="eye"></div>
							    <div class="mouth"></div>
							    <div class="teeth"></div>
							    <div class="fang"></div>
							    <div class="fang"></div>
							</div>
					  	</a>

					  	<a href="titanis/" class="titanis">
					  		<div class="head"></div>
							<div class="beak"></div>
					  	</a>

					</div>

					<i id="arrow-left">&#10163;</i>
					<i id="arrow-right">&#10163;</i>

				</article>
			</div>
		</section>

		<section class="quickfacts window">
			<div>
				<h1>Quick Facts</h1>
				<p>Invasive species make up 26% of animal population and 33% of flora population</p>
				<p>Manatees are dying at a rate higher than their reproduction</p>
				<p>There are no Flamingos in Florida</p>
				<p>The Everglades water system starts in Orlando</p>
				<p>North America's only coral reef system is in the keys</p>
				<p>Average age, IQ, and temperature of 70</p>
			</div>
		</section>

		<section class="mail window">
			<div>
				<?php include('mail.php'); ?>
			</div>
		</section>

		<section class="credits window">
			<div>
				<?php include('credits.php'); ?>
			</div>
		</section>

		<section class="window allStories">
			<div>
				<h1>All Stories</h1>
				<a href="panther/">Florida Panther</a>
				<a href="gopher/">Gopher Tortoise</a>
				<a href="mangroves/">Mangroves</a>
				<a href="narvaez/">Panfilo de Narvaez</a>
				<a href="titanis/">Titanis Walleri</a>
			</div>
		</section>
		
	</main>
<?php include('footer.php'); ?>