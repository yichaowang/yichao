<?php include('layout/head.php') ?>
<div id="main">
	<div id="main-mask">
		<article id="site-intro">
			<div class="container_12">
				<section>
					<hgroup class="prefix_2 grid_9">
					   	<h1>Hello.<br>My Name is Yichao.</h1>
						<h2>I am a web developer. <br/>I trade my time for users joy.</h2>
						<a class="to_portfolio" href="#">
							Please Check Out Some of My Works.
						</a>
						<img class="arrow" src="/images/icon_arrow_bluecircle_solid.png"/>
					</hgroup>
				</section>
			</div>
		</article>      
		
		<article id="rbc" class="portfolio">
			<div class="container_16">
				<section class="intro">
					<header class="grid_6">
						<h1>Modern. Personal. Self-manageable. <em>Delivered.</em></h1>
						<p>Renewal Body Bootcamp is a boutique gym with customer mainly from the city. The new business has a series of specialty classes with specific measurement.</p>
					</header>
					<figure class="grid_10">
						<img src="/images/graphic_rbc_intro.png" alt="graphic"/>
					</figure>
					<div class="clear"></div>
					<!-- <img class='divider' src='/images/bg_section_divider.png'> -->
				</section>  
				
				<section class="features">
					<div id="rbc-backend">
                		<header class="grid_16">
	                		<h1>User Friendly Back End.</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>Class, Measurement, and Client Enrollment Management</h1>
							<p>Task: Jen (client) needed a way to create fitness classes and enroll members to the classes. Each class will have its unique list of measurements. The members that enrolled in the class will be measured before and after the class for the same measurements listed under that class. Each measurement contains name and unit two attributes. These measurements will be displayed in the members Progress panel when they log in.</p>   
							<h1>Click & Edit Updating </h1>
							<p>From adding new program to changing program content, Jen will able to update all information by click and edit. No separate page. No confusion. The detail button after each class will load all information about that class on the same page through AJAX/JSON. All information will be autosaved. No spending 30 minutes filling out huge form and accidentally hit back button.</p> 
							<a class="zoom" href="#fullsortable"><img src="/images/graphic_rbc_backend_asyjson.png" alt="graphic"></a>
							<div id="fullsortable"><img src="/images/graphic_rbc_backend_asyjson_full.png" alt="graphic"></div>
							
						</div>
					
						<div class="prefix_1 grid_5 feature-detail">
							<h1>Drag &amp Drop, Click &amp Edit Class Measurements List</h1>
							<p>Jen needed a way to manage each class's measurements sequence and attributes that will be showed on the client's progress tab when they login. Each measurement have name, value, and unit attribute. A drag and drop sortable list made changing sequence a piece of cake on her end.</p>
							<h1>Enrollment & Individual Measurements: Finder Style & Auto Complete</h1>
							<p>The process is simple and intuitive. The first column contains all existing classes. Selecting the class will display all students that are enrolled in that classes in the second column. Selecting individual student to update their measurements in the third column. Typing the student name in the second column autocomplete box will enroll that student to the class. Autocomplete makes the process much faster. No looking up 5 pages of client names to find that last name.</p> 
							<a class="zoom" href="#fullenrollment"><img src="/images/graphic_rbc_backend_enrollment.png" alt="graphic"></a>
							<div id="fullenrollment"><img src="/images/graphic_rbc_backend_enrollment_full.png" alt="graphic"></div>
						</div>    
						<div class="clear"></div>
					</div>
				</section>      
				
				<section class="features">
                	<header class="grid_16">
                		<h1>User Friendly Back End.</h1>
                	</header>
					<div class="clear"></div>
					<div class="grid_5 feature-detail">
						<h1>Everything Asynchronous/JSON Nicely</h1>
						<p>Jen needed a way to manage each class's measurements sequence and attributes that will be showed on the client's progress tab when they login. Each measurement have name, value, and unit attribute. A drag and drop sortable list made changing sequence a piece of cake on her end. She is able to edit measurement attribute simply by click the text. In addition, each action she performs will also recursively update all the exist student that currently is enrolled in the program.</p>
						<img src="/images/graphic_rbc_backend_asyjson.png" alt="graphic">
					</div>
					<div class="clear"></div>
				</section> 
				
				<section class="features">
                	<header class="grid_16">
                		<h1>User Friendly Back End.</h1>
                	</header>
					<div class="clear"></div>
					<div class="grid_5 feature-detail">
						<h1>Everything Asynchronous/JSON Nicely</h1>
						<p>Jen needed a way to manage each class's measurements sequence and attributes that will be showed on the client's progress tab when they login. Each measurement have name, value, and unit attribute. A drag and drop sortable list made changing sequence a piece of cake on her end. She is able to edit measurement attribute simply by click the text. In addition, each action she performs will also recursively update all the exist student that currently is enrolled in the program.</p>
						<img src="/images/graphic_rbc_backend_asyjson.png" alt="graphic">
					</div>
					<div class="clear"></div>
				</section>
			</div>
		</article>
		
		<article id="msuasa" class="portfolio">
			<div class="container_16">
				<section class="intro">
					<header class="grid_6">
						<h1>Clean. Simple. Professional.<br><em>Delivered.</em></h1>
						<p>Michigan State University Accounting Student Association is the biggest student organization in the Eli Broad Business College. The student organization need a clean and simple website that reflect its professional nature.</p>
					</header>
					<figure class="grid_10">
						<img src="/images/graphic_rbc_intro.png" alt="rbc image"/>
					</figure>
					<div class="clear"></div>
				</section>
			</div>
		</article>
		
		<article id="about" class="about">
			<div class="container_16">
				<section class="intro">
					<header class="grid_6">
						<h1>About <em>Me.</em></h1>
						<p>This is the section about me.</p>
					</header>
					<div class="clear"></div>
				</section>
				<section class="detail grid_16">

				</section>
			</div>
		</article>
	</div>
	<div id="blink-slider-activator">
		<div id="blink-slider-wrapper">
		   	<div id="blink-slider"></div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<?php include('layout/footer.php') ?>
