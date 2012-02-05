<?php include('layout/head.php') ?>
<div id="main">
	<div id="main-mask">
		<div class="preloading">
			<img src="/images/icon_tooltip.png">
			<img src="/images/icon_tooltip_detail.png">
		</div>
		<article id="site-intro">
			<div class="container_12">
				<section>
					<hgroup class="prefix_2 grid_9">
					   	<h1>Hello.<br>My Name is Yichao.</h1>
						<h2>I am a web developer. <br/>I build cool stuff on the web.</h2>
						<a class="to_portfolio" href="#">
							Please Check Out Some of My Works.
						</a>
						<img class="arrow mcontent" src="/images/icon_arrow_bluecircle_solid.png"/>
					</hgroup>
				</section>
			</div>
		</article>      
		
		 <article id="clep" class="portfolio">
				<div class="container_16">
			  	  	<section class="intro">
						<header class="grid_6">
							<h1><em>Clepsydra.<br></em>Online Timesheet.</h1>
							<p>The State News managers need a more efficient way to track student employees' time. The challenge of making a online timesheet was given to the web team at The State News. </p>
							<div class="clear"></div>
							<div class="grid_2 alpha omega">
								<img class="arrow detail" src="/images/icon_arrow_bluecircle_solid_down.png"/>
							</div>     
							<div class="grid_2 alpha omega">
								<a target="_target" href="http://clepsydra-demo.yichaowang.com"><img class="arrow leave" src="/images/icon_arrow_bluecircle_solid_leave.png"/></a>
							</div>
							<div class="clear"></div>            
							<div class="grid_5 alpha omega">
								<div class="tooltip-scroll"></div>
							</div>
						</header>
						<figure class="grid_10">
							<img src="/images/graphic_clep_intro.png" alt="graphic"/>
						</figure>
						<div class="clear"></div>
						<!-- <img class='divider' src='/images/bg_section_divider.png'> -->
					</section>
					<section class="features">
						<header class="grid_16">
							<h1>Summary</h1>
						</header>
						<div class="clear"></div>
						<div class="grid_6 feature-detail">
							<h1 class="clep">Clep•sy•dra.</h1>
							<p class="defination">noun. <i>klep-si-druh</i><br>1. An ancient device for measuring time by the regulated flow of water or mercury through a small aperture.</p>
							<p>As part of the web team at <a href="http://statenews.com/">The State News</a>, I was responsible for programming and co-designing the project.</p>
							<p>On the backend side, a in-house php framework, <a href="http://thesnews.github.com/Gryphon/api/foundry/index/General.html">Foundry 6</a>, was used for MVC, and a intensive amount of PHP date and time related functions were used for time calculation and conversion.</p> <p>On the front side, the application uses <a href="http://twig.sensiolabs.org/">Twig</a> as the tempting engine, and utilized <a href="http://mootools.net/">MooTool</a> javascript framework for clock, Ajax, and other user friendly interface.</p>   
						</div>                                                           
						<div class="prefix_1 grid_9 feature-detail">
							<img class="illustration" src="/images/graphic_clep_summary.png" alt="graphic">
						</div>
						<div class="clear"></div>
					</section>  
					<section class="features">
						<header class="grid_16">
	                		<h1>Employee Panel</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>The information central of your work life.</h1>
							<p>The main page of the employee panel give you every single one of your time card in one glance. Hovering the specific card will give you the start and end time of that card. The page accumulates as your work life in the organization increase. All timecard was stored in the database as the format of (id, timestamp_in, timestamp_out, user_id). eg.(5, 1306108680, 1306108680, 2). All calculations was made when the application load using php and javascript.</p>   
						</div>
						<div class="prefix_1 grid_10 feature-detail">
							<img class="illustration" src="/images/graphic_clep_front_main.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>Say hi to your co-workers.</h1>
							<p>Other Users panel giving you the knowledge of who is currently working and how long they have been here for. No more yelling or building searching.</p>   
						</div>
						<div class="prefix_1 grid_10 feature-detail">
							<img class="illustration" src="/images/graphic_clep_front_other.png" alt="graphic">
						</div>
						<div class="clear"></div>
					</section>      
					<section class="features">
						<header class="grid_16">
	                		<h1>Administration Panel</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<h1>All-in-one at a Glance.</h1>
							<p>The admin panel gives administrator the ultimate power all in one place. </p>
							<p>The panel provides two viewing modes:<br> Under the Observing Mode, person with highlighted name are currently clocked in. Most common total hours are listed in columns after the name.</p>
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_clep_back_obtable.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<p>New user can be added by start typing in the bottom right "ADD NEW" box. A form will loaded through Ajax attach at the bottom of the table providing all the input for the new profile. </p> 
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_clep_back_addnew.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<p>Under the Editing Mode, after click on employee's name, his or her detail time will be loaded into a table with search options on the bottom right corner through ajax, along with the profile on the left ready for editing. All the time duration was calculated on the fly using the basic timestamp that stored in the mySQL database, which is (id, timestamp_in, timestamp_out, user_id). eg.(5, 1306108680, 1306108680, 2).</p> 
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_clep_back_editing.png" alt="graphic">
						</div>
						<div class="clear"></div>
					</section> 
				</div>
			</article>
		
		<article id="rbc" class="portfolio">
			<div class="container_16">
				<section class="intro">
					<header class="grid_6">
						<h1><em>Renewal </em>Body Bootcamp.</h1>
						<p>Renewal Body Bootcamp is a boutique gym with customer mainly from the city. The new business needed a website to attract potential customers as well as managing a series of specialty classes with specific measurement.</p>
						<div class="clear"></div>
						<div class="grid_2 alpha omega">
							<img class="arrow detail" src="/images/icon_arrow_bluecircle_solid_down.png"/>
						</div>
						<div class="grid_2 alpha omega">
							<a target="_target" href="http://www.renewalbodybootcamp.com"><img class="arrow leave" src="/images/icon_arrow_bluecircle_solid_leave.png"/></a>
						</div>
						<div class="clear"></div>            
						<div class="grid_5 alpha omega">
							<div class="tooltip-scroll"></div>
						</div>
					</header>
					<figure class="grid_10">
						<img src="/images/graphic_rbc_intro.png" alt="graphic"/>
					</figure>
					<div class="clear"></div>
				</section>  
				
				<section class="features">
					<div id="rbc-backend">
                		<header class="grid_16">
	                		<h1>Highlights: User Friendly Back End.</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>Class, Measurement, and Client Enrollment Management</h1>
							<p><em>Task:</em> The client needed a way to create fitness classes and enroll members to the classes. Each class will have its unique list of measurements. The members that enrolled in the class will be measured before and after the class for the same measurements listed under that class. Each measurement contains name and unit two attributes. These measurements will be displayed in the members Progress panel when they log in.</p>   
							<h1>Click &amp Edit Updating </h1>
							<p>From adding new program to changing program content, the client will able to update all information by click and edit. No separate page. No confusion. The detail button after each class will load all information about that class on the same page through AJAX/JSON. All information will be autosaved. No spending 30 minutes filling out huge form and accidentally hit back button.</p> 
							<a class="zoom" href="#fullsortable"><img src="/images/graphic_rbc_backend_asyjson.png" alt="graphic"></a>
							<div id="fullsortable"><img src="/images/graphic_rbc_backend_asyjson_full.png" alt="graphic"></div>
							
						</div>
					
						<div class="prefix_1 grid_5 feature-detail">
							<h1>Drag &amp Drop, Click &amp Edit Class Measurements List</h1>
							<p>The client needed a way to manage each class's measurements sequence and attributes that will be showed on the client's progress tab when they login. Each measurement have name, value, and unit attribute. A drag and drop sortable list made changing sequence a piece of cake on her end.</p>
							<h1>Enrollment &amp Individual Measurements: Finder Style &amp Auto Complete</h1>
							<p>The process is simple and intuitive. The first column contains all existing classes. Selecting the class will display all students that are enrolled in that classes in the second column. Selecting individual student to update their measurements in the third column. Typing the student name in the second column autocomplete box will enroll that student to the class. Autocomplete makes the process much faster. No looking up 5 pages of client names to find that last name.</p> 
							<a class="zoom" href="#fullenrollment"><img src="/images/graphic_rbc_backend_enrollment.png" alt="graphic"></a>
							<div id="fullenrollment"><img src="/images/graphic_rbc_backend_enrollment_full.png" alt="graphic"></div>
						</div>    
						<div class="clear"></div>
					</div>
				</section> 
				
				<section class="features">
					<div id="rbc-gallery">
						<header class="grid_10">
							<h1>Interactive Gallery and Sliding Box for Easy Navigation.</h1>
						</header>
						<div class="clear"></div>
							<div class="grid_11">
								<div class="grid_5 alpha feature-detail">
									<h1>Interactive Gallery for Graphical Highlights</h1>
									<p>An interactive gallery is designed from scratch with jQuery. Unlike most of the Flash interactives, the gallery is fully integrated with the backend, making uploading new picture, changing caption, and alter sequence very easy for the client. Viewer is able to cycle through slides with intuitive interface. The gallery will also cycles itself to expose more content within the limited area. The progress bar type timer also giving the viewers more sense control on top of the interface.</p>                            
									<a class="zoom" href="#fullgalleryback"><img src="/images/graphic_rbc_gallery_backend_thumb.png" alt="graphic"></a>
									<div id="fullgalleryback"><img src="/images/graphic_rbc_gallery_backend_full.png" alt="graphic"></div>
								</div> 
								<div class="prefix_1 grid_5 omega feature-detail">
									<h1>Sliding Box for Class Detail &amp Online Payment.</h1>
									<p>Every class' detail including price and online payment was able to presented in the home page using a sliding box. This implementation avoided a 5 screens plus big table for all the class detail or a multi-page clicking navigation that adds confusion and frustration. The viewer is able to find clear and precise information on the classes that they are interested and finish the transaction process all in one place. All the contents including Paypal is also self-manageable from the backend.</p>
									<a class="zoom" href="#fullgalleryslide"><img src="/images/graphic_rbc_gallery_slidebox_thumb.png" alt="graphic"></a>
									<div id="fullgalleryslide"><img src="/images/graphic_rbc_gallery_slidebox_full.png" alt="graphic"></div>	
								</div>
								<div class="clear"></div>
								<div class="grid_11 alpha omega feature-detail">
									<!-- <img class="illustration" src="/images/graphic_rbc_gallery_slidebox_drawing.png" alt="graphic"> -->
								</div>
							</div>
							<div class="grid_5">
								<!-- <img src="/images/graphic_rbc_gallery_bg.png" alt="graphic"> -->
							</div>
						<div class="clear"></div>
					</div>
				</section>     
				
				<section class="features">
					<div id="rbc-others">
						<header class="grid_16">
							<h1>Paypal, IE support, Google Calendar &amp Map, Word Press Blog, and Others.
							</h1>
						</header>
						<div class="clear"></div>
						<div class="feature-detail">
							<div class="grid_7">
								<h1>Paypal Support</h1>
								<p>The client is able to setup Paypal for each class through the back end. The client generates the button code on paypal website and then copy &amp paste into the popup box to save the update.</p>
								<a class="zoom" href="#fullRbcOthersPaypal"><img src="/images/graphic_rbc_others_paypal_thumb.png" alt="graphic"></a>
								<div id="fullRbcOthersPaypal"><img src="/images/graphic_rbc_others_paypal_full.png" alt="graphic"></div>
							</div> 
							<div class="prefix_1 grid_7">
								<h1>IE Compatibility</h1>
								<p>IE 7,8, and 9 is fully tested and supported by the site. Html, css, and javascript hacks &amp tricks was utilized to support some of the animations and html5 elements.</p>
								<a class="zoom" href="#fullRbcOthersIe"><img src="/images/graphic_rbc_others_ie_thumb.png" alt="graphic"></a>
								<div id="fullRbcOthersIe"><img src="/images/graphic_rbc_others_ie_full.png" alt="graphic"></div>
							</div>
							<div class="clear"></div>
							<div class="grid_7">
								<h1>Google Calendar &amp Maps</h1>
								<p>The site is integrated with google calendar and maps. The client is able to update the content through google's API.</p>
								<a class="zoom" href="#fullRbcOthersGoogle"><img src="/images/graphic_rbc_others_google_thumb.png" alt="graphic"></a>
								<div id="fullRbcOthersGoogle"><img src="/images/graphic_rbc_others_google_full.png" alt="graphic"></div>
							</div>
							<div class="prefix_1 grid_7">
								<h1>Wordpress Blog</h1>
								<p>The site's blog section is power by Wordpress.</p>
								<a class="zoom" href="#fullRbcOthersBlog"><img src="/images/graphic_rbc_others_blog_thumb.png" alt="graphic"></a>
								<div id="fullRbcOthersBlog"><img src="/images/graphic_rbc_others_blog_full.png" alt="graphic"></div>
							</div>
							<div class="clear"></div>
							<div class="grid_7">
								<h1>Fully Customizable Content</h1>
								<p>The site's backend is created from scratch and almost every content of the site can be modified through it. The client who had basic computer skill was able to maintain the site all by herself.</p>
								<a class="zoom" href="#fullRbcOthersContent"><img src="/images/graphic_rbc_others_content_thumb.png" alt="graphic"></a>
								<div id="fullRbcOthersContent"><img src="/images/graphic_rbc_others_content_full.png" alt="graphic"></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>    
					</div>
				</section>
			</div>
		</article>
		
		<article id="asa" class="portfolio">
			<div class="container_16">
				<section class="intro">
					<header class="grid_6">
						<h1>Michigan State University<br><em>Accounting Student Association.</em></h1>
						<p>Michigan State University Accounting Student Association is the biggest student organization in the Eli Broad Business College. The student organization need a clean and simple website that represents its professional nature.</p>  
						<div class="clear"></div>
						<div class="grid_2 alpha omega">
							<img class="arrow detail" src="/images/icon_arrow_bluecircle_solid_down.png"/>
						</div>
						<div class="grid_2 alpha omega">
							<a target="_target" href="http://www.msuasa.com"><img class="arrow leave" src="/images/icon_arrow_bluecircle_solid_leave.png"/></a>
						</div>
						<div class="clear"></div>            
						<div class="grid_5 alpha omega">
							<div class="tooltip-scroll"></div>
						</div>
					</header>
					<figure class="grid_10">
						<img src="/images/graphic_asa_intro.png" alt="rbc image"/>
					</figure>
					<div class="clear"></div>
				</section> 
				<section class="features">
					<div id="asa_summary">
                		<header class="grid_16">
	                		<h1>Summary</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>Clean. Simple. Professional. <em>Delivered.</em></h1>
							<p>The Accounting Student Association is the biggest student organization in the Eli Broad Business College of Michigan State University. With over 150 active members attending around 10 meetings per semester, the organization need a clean, professional looking, and highly functional website. As a member of the executive board, I designed and programed the website from scratch.</p>
							<p>As the business nature of the organization, the design was focused on simple, clean, and informative. White space, gradient, and multi-column was used to achieve the goal. The site is powered by <a href="http://en.wikipedia.org/wiki/LAMP_(software_bundle)">LAMP</a>.&nbsp;&nbsp;<a href="http://960.gs/">960 grid system</a> for CSS was used for clean markup. SQL query such as table joint was used to solve some of the business logic.</p>    
						    <p>After maintaining and communicating about the website for two years, I was very honored to received the Outstanding Member of the Year award. Only one person of the organization is award every year and is presented by the MSU accounting department.</p>   
						</div>
						<div class="prefix_1 grid_10 feature-detail">
							<img class="illustration" src="/images/graphic_asa_summary_award.png" alt="graphic">
						</div>
						<div class="clear"></div>
					</div>
				</section>
				
				<section class="features">
					<div id="asa_front">
                		<header class="grid_16">
	                		<h1>Clean &amp Professional Front End</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<h1>Informative Home Page</h1>
							<p>The home page is a quick capture of all the latest contents of the site. It keeps the members up to date as well as provides a quick access to individual section with full and older information and documents. The three closest events that are later then the current date is automatically picked and summarized on the left. Viewers can also apply, downloading meeting documents, and R.S.V.P certain events.</p>   
						</div>
						<div class="prefix_1 grid_10 feature-detail">
							<img class="illustration" src="/images/graphic_asa_front_home.png" alt="graphic">
						</div>
						<div class="clear"></div>   
						
						<div class="grid_5 feature-detail">
							<h1>Content Organization and Highlights</h1>
							<p>The rest of the site categories its content and presents its information in a chronological ordered list for easy navigation. Here are some of the highlights from each section:</p>
						</div>            
						<div class="clear"></div>
						<div class="grid_5 feature-detail">
							<a class="zoom" href="#fullAsaFrontEvent"><img src="/images/graphic_asa_front_event_thumb.png" alt="graphic"></a>
							<div id="fullAsaFrontEvent"><img src="/images/graphic_asa_front_event_full.png" alt="graphic"></div>
							<h2>Events</h2>
								<p>Under the Events tab, a colored tag is added by the site to separate passed and upcoming events so it maintains the chronological order of the entire semester's events as well as inform the upcoming events. PHP date & time function was used.</p> 
						</div>              
						<div class="grid_5 feature-detail">
							<a class="zoom" href="#fullAsaFrontPopup"><img src="/images/graphic_asa_front_popup_thumb.png" alt="graphic"></a>
							<div id="fullAsaFrontPopup"><img src="/images/graphic_asa_front_popup_full.png" alt="graphic"></div>
							<h2>Pop-up Event R.S.V.P</h2>
							<p>R.S.V.P events can be registered through a pop-up event on the homepage. The red ticker update the number of people that have signed up in real-time.</p>
						</div>
						<div class="grid_5 feature-detail">
							<a class="zoom" href="#fullAsaFrontBio"><img src="/images/graphic_asa_front_bio_thumb.png" alt="graphic"></a>
							<div id="fullAsaFrontBio"><img src="/images/graphic_asa_front_bio_full.png" alt="graphic"></div>
							<h2>Officer Biography</h2>
							<p>E-board members are able to update their own bio on the back end. Positions can be picked through the drop down menu. Once the position is picked, the sequence on the front end will be displayed according to the predefined SQL table through a table joint.</p>  
						</div>
						<div class="clear"></div>
						<div class="grid_5 feature-detail"> 
							<a class="zoom" href="#fullAsaFrontPhoto"><img src="/images/graphic_asa_front_photo_thumb.png" alt="graphic"></a>
							<div id="fullAsaFrontPhoto"><img src="/images/graphic_asa_front_photo_full.png" alt="graphic"></div>
							<h2>Photo</h2>
							<p>A javascript gallery plugin was used for displaying pictures.</p>   
						</div>
						<div class="grid_5 feature-detail">
							<a class="zoom" href="#fullAsaFrontFile"><img src="/images/graphic_asa_front_files_thumb.png" alt="graphic"></a>
							<div id="fullAsaFrontFile"><img src="/images/graphic_asa_front_files_full.png" alt="graphic"></div>
							<h2>Downloads</h2>
							<p>Presentation and minutes download.</p> 
						</div>
						<div class="clear"></div>
					</div>
				</section>     
				
				<section class="features">
					<header class="grid_16">
                		<h1>Functional Back End</h1>
                	</header>
					<div class="clear"></div>
					<div class="grid_5 feature-detail">
						<h1>The backend that gets the work done.</h1>
						<p>The backend was wrote from scratch with each interface and functionality specifically designed towards each part of the front end. It made creating and updating contents fast and easy with minimum technical knowledge. The broad members can basically modifying every content on the site on their own.</p>   
					</div>
					<div class="prefix_1 grid_10 feature-detail">
						<img class="illustration" src="/images/graphic_asa_back_all.png" alt="graphic">
					</div>
					<div class="clear"></div>
					
					<div class="grid_5 feature-detail">
						<a class="zoom" href="#fullAsaBackEvent"><img src="/images/graphic_asa_back_events_thumb.png" alt="graphic"></a>
						<div id="fullAsaBackEvent"><img src="/images/graphic_asa_back_events_full.png" alt="graphic"></div>
						<h2>Managing Events</h2>
							<p>Under the Events tab, a colored tag is added by the site to separate passed and upcoming events so it maintains the chronological order of the entire semester's events as well as inform the upcoming events. PHP date & time function was used.</p> 
					</div>  
					            
					<div class="grid_5 feature-detail">
						<a class="zoom" href="#fullAsaBackBio"><img src="/images/graphic_asa_back_bio_thumb.png" alt="graphic"></a>
						<div id="fullAsaBackBio"><img src="/images/graphic_asa_back_bio_full.png" alt="graphic"></div>
						<h2>Updating Officer Biography</h2>
						<p>E-Board members are able to update their own bio on the back end. Positions can be picked through the drop down menu. Once the position is picked, the sequence on the front end will be displayed according to a predefined table through table joint.</p>
					</div>
					<div class="grid_5 feature-detail">
						<a class="zoom" href="#fullAsaBackFile"><img src="/images/graphic_asa_back_file_thumb.png" alt="graphic"></a>
						<div id="fullAsaBackFile"><img src="/images/graphic_asa_back_file_full.png" alt="graphic"></div>
						<h2>Uploading file</h2>
						<p>Presentations and meeting minutes can be upload from the backend. File's icon is added based on the file extension.</p>  
					</div>
					<div class="clear"></div>
				</section>
			</div>
		</article>
		
		<article id="sia" class="portfolio">
			<div class="container_16">
		  	  	<section class="intro">
					<header class="grid_6">
						<h1>Michigan State University</br><em>Student Investment Association</em></h1>
						<p>Michigan State University Student Investment Association is the biggest student organization in the Finance Department of Eli Broad Business College. The organization needed a website to be the one-stop shop of all the recent updates about the organization. Online payment and member registration &amp management can also be overseen through the website.</p>
						<div class="clear"></div>
						<div class="grid_2 alpha omega">
							<img class="arrow detail" src="/images/icon_arrow_bluecircle_solid_down.png"/>
						</div>
						<div class="grid_2 alpha omega">
							<a target="_target" href="http://msusia-demo.yichaowang.com"><img class="arrow leave" src="/images/icon_arrow_bluecircle_solid_leave.png"/></a>
						</div>
						<div class="clear"></div>            
						<div class="grid_5 alpha omega">
							<div class="tooltip-scroll"></div>
						</div>
					</header>
					<figure class="grid_10">
						<img src="/images/graphic_sia_intro.png" alt="graphic"/>
					</figure>
					<div class="clear"></div>
				</section>
				<section class="features">
					<div id="sia_highlights">
                		<header class="grid_16">
	                		<h1>Highlights</h1>
	                	</header>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<h1><em>One-stop-shop</em> home page.</h1>
							<p>Contains all the most recent information of the organization.</p>
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_sia_index.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<h1><em>Clean</em> form design.</h1>
							<p>Prospect members can register online and pay membership due through Paypal. All information were saved into database, which saved all the paper application and the hassles. Relevant information were grouped together for easy input. Drop down and checkbox was utilized as well.</p>
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_sia_form.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<h1><em>Awards</em> and the about page.</h1>
							<p></p>
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_sia_about.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="grid_4 feature-detail">
							<h1>Events List</h1>
							<p>that come with a back end to edit it.</p>
						</div>
						<div class="prefix_1 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_sia_event_front.png" alt="graphic">
						</div>
						<div class="clear"></div>
						<div class="prefix_5 grid_11 feature-detail">
							<img class="illustration" src="/images/graphic_sia_event_back.png" alt="graphic">
						</div>
					</div>
				</section> 
			</div>
		</article>
		
		<article id="resume" class="resume">
			<div class="container_16">
				<section>
					<header class="prefix_1 grid_6">
						<h1>R&eacute;su<em>m&eacute;.</em></h1>
					</header>
					<div class="prefix_4 grid_4 resume_pdf">
						<a href="/resume.pdf">Download PDF Version</a>
					</div>
					<div class="clear"></div>
				</section>
				<div id="resume-container">
					<div class="prefix_1 grid_3 left">
						<header>
							<h1>Yichao Wang</h1>
							<h2>http://www.yichaowang.com</h2>
							<h3>yichao@yichaowang.com</h3>
							<h3>github.com/yichaowang</h3>
						</header>                    
						<section class="award">
                        	<img src="/images/award_resume_mid.png">
							<p class="award">Outstanding<br/>Member of the Year<br/>2010-2011</p>
							<aside> &ndash; Michigan State University Accounting Student Association<br/>
							One person out of 250+ active members is awarded</aside>
						</section>
						<section class="testimonial">
                            <p>
								&ldquo;I am speechless! It is absolutely amazing! You totally exceeded my expectations on getting so much done in a small time frame... Absolutely blown away!!!&rdquo;
                            </p> 
							<aside> &ndash; Jennifer Malinowski,<br/>Founder of Renewal Body Bootcamp
							</aside>                      
						</section>
						<section class="education">
                        	B.A Information <br>System and Accounting,<br>Michigan State University (2007-2011)<br><br>GPA: Available upon request.<br>Reference: Available upon request<br>(517) 775-****
						</section>
					</div>
					<div class="prefix_1 grid_9 right">
						<section>
							<h1 class="first">OBJECTIVE</h1>
							<p>
								<b>Front-End Engineer</b> where 4+ years experience of building pixel- perfection UI with responsive/high performance AJAX technology will add value.
							</p>
						</section>
						<section>
							<h1>SELECT ACCOMPLISHMENTS</h1>
							<ul>
								<li>Utilizing cutting-edge technology designed and developed 6+ online applications/websites from MySQL/PHP framework to jQuery/HTML/CSS and resulted in 100% happy clients.</li>
								<li>Developed cross-browser website/application for start-up gym that generated over $10,000 online sale during the 3-day opening weekend.</li>
								<li>Created websites/applications for multiple student organizations which tripled their membership and dues, and greatly improved operating efficiency and communication.</li>
							</ul>
						</section>
						<section>
							<h1>CAREER DRIVER</h1>
							<p>
								Taking <b>great passion</b> for enjoyable user experience and understanding of server-side technology to bring irresistible and high performance UI to reality.
							</p>
						</section>
						<section>
							<h1>TECHNICAL SKILLS</h1>
							<ul>
								<li>Expert (#years): OOP JavaScript(3 years), jQuery(3 years), Git/github(3), JSON(2), HTML/CSS(6), HTML5/CSS3(2), Photoshop(5), TextMate(3), Twig-Tempting(2)</li>
								<li>Advanced (#years): MySQL(4 years), PHP(4 years), Linux(3), CodeIgniter(1), Zend-Framework(2), Cross-Browser Development(2).</li>
							</ul>
						</section>
						<section>
							<h1>EXPERIENCE</h1>
							<ul>
								<li>
									<b>Frontend developer/UI Designer</b> (2008-2011): The State News, East Lansing, MI. <a href="http://www.statenews.com">[http://www.statenews.com]</a> <a href="http://clepsydra-demo.yichaowang.com">[http://clepsydra-demo.yichaowang.com]</a>
								</li>
								<li>
									<b>Freelancer</b> (2012): Personal Portfolio <a href="http://www.yichaowang.com">[http://www.yichaowang.com]</a>
								</li>
								<li>
									<b>Freelancer</b> (2012): Renewal Body Bootcamp <a href="http://www.renewalbodybootcamp.com">[www.renewalbodybootcamp.com]</a>
								</li>
								<li>
									<b>Vice President of IT</b> (2009-2011): Michigan State University Account Student Association <a href="http://www.msuasa.com">[http://www.msuasa.com]</a>
								</li>
								<li>
									<b>Vice President of IT</b> (2008-2011): Michigan State University Student Investment Association <a href="http://www.msusia.com">[http://www.msusia.com]</a>
								</li>
								<li>
									<b>Computer Science 101 Teaching Assistant</b> Michigan State University. (2008-2009)
								</li>
								<li>
									<b>Interests</b> (#years): Tennis(4), Soccer(4), Ski(2), Basketball(3), Swim(2)
								</li>
							</ul>
						</section>
					</div>
					<div class="clear"></div>    
				</div>
			</div>
		</article> 
		
		<article id="about" class="about">
			<div class="container_16">
				<section class="about">
					<header class="grid_10">
						<h1>About <em>Me.</em></h1>
						<img src="/images/graphic_about_me.png"></img>
					</header>
					<div class="clear"></div>
					<div class="grid_10">
						<h1>Life,</h1>
						<p>I continue to find my greatest pleasure in the work of creating than replicating, thus I code, design, and breath with passion everyday.</p>
                        <p>"I never did a day's work in my life. It was all fun." - Thomas A. Edison</p>
					</div> 
					<div class="clear"></div>
				</section>
				<section class="detail grid_16">

				</section>
			</div>
		</article>
	</div>
	<div id="blink-slider-activator">
		<div id="blink-slider-wrapper">
			<div id="blink-tooltip"></div>
		   	<div id="blink-slider"></div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<?php include('layout/footer.php') ?>