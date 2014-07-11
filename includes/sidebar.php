 <aside id="leftCol1" class="clearfix">
            <nav id="sideNav1">
            
                <?php if($parentNav=="home"){
                echo'
                <h3>Main Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="index.php">Home</a></li>
                     <li><a href="pages/php/php.php">PHP</a></li>
                    <li><a href="pages/css/css.php">CSS</a></li>
                    <li><a href="pages/javascript/javascript.php">Javascript</a></li>
					<li><a href="pages/jquery/jquery.php">JQuery</a></li>
					<li><a href="pages/jquery-ui/jquery-ui.php">JQuery UI</a></li>
					<li><a href="pages/ajax/ajax.php">Ajax</a></li>
                </ul>
                ';
                }elseif($parentNav=="php-home"){
                echo'
                <h3>PHP Home</h3>	
                <ul class="sideNav1">
                    <li><a href="php.php">Home</a></li>
                    <li><a href="tr-php1.php">PHP</a></li>
                    <li><a href="tr-php2.php">PHP Forms</a></li>
                    <li><a href="tr-php3.php">PHP Conditional statements</a></li>
                    <li><a href="tr-php4.php">PHP Functions</a></li>
                    <li><a href="tr-php5.php">PHP Loops</a></li>
                    <li><a href="tr-php6.php">PHP Custom Functions</a></li>
                    <li><a href="tr-php7.php">PHP Sessions</a></li>
                    <li><a href="tr-php8.php">MVC - autoloading classes</a></li>
                    <li><a href="tr-php9.php">MVC - Magic methods</a></li>
                    <li><a href="tr-php10.php">MVC - HTaccess</a></li>
                    <li><a href="tr-php10.php">MVC - Controllers</a></li>
                </ul>
                ';
                }elseif($parentNav=="social-home"){
                echo'
                <h3>Main Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="social.php">Home</a></li>
                    <li><a href="ex-1-twitter.php">Twitter</a></li>
                </ul>
                ';
                }elseif($parentNav=="css-home"){
                echo'
                <h3>CSS Menu</h3>	
                <ul class="sideNav1">
                     <li><a href="css.php">Home</a></li>
					 <li><a href="tr-animation-basic.php">Animations - Basic</a></li>
					 <li><a href="tr-animation-delay.php">Animations - Delay</a></li>
					 <li><a href="tr-animation-fillMode.php">Animations - Fill Mode</a></li>
					 <li><a href="tr-animation-direction.php">Animations - Direction</a></li>
					 <li><a href="tr-animation-timing.php">Animations - Timing</a></li>
					 <li><a href="tr-animation-multiDirections.php">Animations - Movement</a></li>
					 <li><a href="tr-canvas1.php">Canvas-1</a></li>
					 <li><a href="tr-canvas2.php">Canvas-2 colour</a></li>
					 <li><a href="tr-canvas3.php">Canvas-3 drawings</a></li>
					 <li><a href="tr-canvas4.php">Canvas-4 shapes</a></li>
					 <li><a href="tr-canvas5.php">Canvas-5 lines</a></li>
					 <li><a href="tr-canvas6.php">Canvas-6 states</a></li>
					 <li><a href="tr-canvas7.php">Canvas-7 Arcs & paths</a></li>
					 <li><a href="tr-canvas8.php">Canvas-8 Bezier & Quadratic</a></li>
					 <li><a href="tr-canvas9.php">Canvas-9 Rendering Text</a></li>
					 <li><a href="tr-canvas10.php">Canvas-10 Shadows</a></li>
					 <li><a href="tr-canvas11.php">Canvas-11 Patterns</a></li>
					 <li><a href="tr-canvas12.php">Canvas-12 Gradients</a></li>
					 <li><a href="tr-canvas13.php">Canvas-13 Images&Video</a></li>
					 <li><a href="ex-flipbook1.php">Flipbook 1</a></li>
					 
                </ul>
                ';
                }elseif($parentNav=="jquery-home"){
                echo'
                <h3>Jquery Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="jquery.php">JQuery Home</a></li>
                    <li><a href="tr-1-jquery.php">1 Intro</a></li>
                    <li><a href="tr-2-select-elements.php">2 Selecting</a></li>
                    <li><a href="tr-3-event-handlers.php">3 Event handlers</a></li>
                    <li><a href="tr-4-css.php">4 CSS</a></li>
                    <li><a href="tr-5-effects.php">5 Effects</a></li>
                    <li><a href="tr-6-dom.php">6 DOM manipulation</a></li>
                    <li><a href="tr-7-projects.php">7 Projects</a></li>
                    
                    <li><a href="tr-8-php-jquery-ajax-xml.php">8 Ajax load xml</a></li>
                    <li><a href="tr-8a-get-forum.php">8 Get XML</a></li>
                    
					<li><a href="ex-carousel.php">Carousel</a></li>
					<li><a href="ex-carousel2.php">Carousel 2</a></li>
					<li><a href="ex-flipbook1.php">Flipbook 1</a></li>
					<li><a href="ex-flipbook2.php">Flipbook 2</a></li>
					<li><a href="ex-flipbook3.php">Flipbook 3</a></li>
					<li><a href="ex-slider1.php">Slider 1</a></li>
					<li><a href="ex-slider1b.php">Slider 1b</a></li>
					<li><a href="ex-slider2.php">Slider 2</a></li>
                    <li><a href="ex-slider3.php">Slider 3</a></li>
					<li><a href="ex-select-pairs.php">Select-pairs</a></li>
					<li><a href="ex-select-divs.php">Select-divs</a></li>
				 </ul>
                ';
                }elseif($parentNav=="jquery-ui-home"){
                echo'
                <h3>Jquery UI Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="jquery-ui.php">JQuery UI Home</a></li>
					<li><a href="ex-draggable-handles.php">Draggable handles</a></li>
				 </ul>
                ';
                }elseif($parentNav=="javascript-home"){
                echo'
                <h3>Javascript Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="javascript.php">Javascript Home</a></li>
					<li><a href="tr-1-helloworld.php">1 Alert box</a></li>
					<li><a href="tr-2-eventhandlers.php">2 Event handlers</a></li>
					<li><a href="tr-2b-eventhandlers.php">2b Forms - onFocus & onBlur</a></li>
					<li><a href="tr-3-viewing-errors.php">3 Viewing Errors</a></li>
					<li><a href="tr-4-variables.php">4 Variables</a></li>
					<li><a href="tr-5-functions.php">5 Functions</a></li>
					<li><a href="tr-6-if-statement.php">6 If Statement</a></li>
					<li><a href="tr-7-if-else.php">7 If Else Statement</a></li>
					<li><a href="tr-8-loops.php">8 Loops</a></li>
					<li><a href="tr-9-javascript-oop.php">9 Javascript OOP</a></li>
					<li><a href="tr-10-arrays.php">10 Arrays</a></li>
					<li><a href="tr-11-functions.php">11 Functions</a></li>
					<li><a href="tr-12-conditions.php">12 Conditions</a></li>
					<li><a href="tr-13-operators.php">13 Operators</a></li>
					<li><a href="tr-14-dom.php">14 DOM</a></li>
					<li><a href="tr-15-forms.php">15 DOM - Forms</a></li>
						<li><a href="tr-15b-form-validation.php">15b Form Validation</a></li>
					<li><a href="tr-16-toggle.php">16 DOM - Toggle</a></li>
					<li><a href="tr-17-window-object.php">17 Window Object</a></li>
					<li><a href="tr-18-numbers.php">18 Numbers</a></li>
					<li><a href="tr-19-strings.php">19 Strings</a></li>
					<li><a href="tr-20-dates.php">20 Dates</a></li>
					<li><a href="tr-21-objects.php">21 Objects</a></li>
					<li><a href="tr-22-dom-nodes.php">22 DOM Nodes</a></li>
					<li><a href="tr-23-dom-changing-elements.php">23 Changing Dom Elements</a></li>
					<li><a href="tr-24-dom-creating-elements.php">24 Creating Dom Elements</a></li>
					<li><a href="tr-25-timers.php">25 Timers</a></li>
					
				 </ul>
                ';
                }elseif($parentNav=="ajax-home"){
                echo'
                <h3>AJAX Menu</h3>	
                <ul class="sideNav1">
                    <li><a href="ajax.php">Ajax Home</a></li>
					<li><a href="tr-1-ajax.php">Ajax</a></li>
					<li><a href="tr-2-ajax.php">Ajax 2</a></li>				
				 </ul>
                ';
                }
                ?>
            </nav>
            </aside><!-- END LEFTCOL-->