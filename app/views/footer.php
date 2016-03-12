<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">taxijoker.dev</h5>
                <ul>
                    <li><a class="white-text" href="tel:828">call 828 (callback)</a></li>
                    <li><a class="white-text" href="tel:0352401401">call (0352) 401-401 ternopil</a></li>
                    <li><a class="white-text" href="tel:0332285285">call (0332) 285-285 lutsk</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Localizations</h5>
                 <ul>
                    <li><a class="white-text" href="http://taxijoker.dev/language.php?local=te"><?php echo $data['local_te']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.dev/language.php?local=lu"><?php echo $data['local_lu']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.dev/language.php?lang=eng"><?php echo $data['lang_en']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.dev/language.php?lang=ua"><?php echo $data['lang_ua']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.dev/language.php?lang=ru"><?php echo $data['lang_ru']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            by Pavlenko Andriy for Taxi Joker
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="http://taxijoker.dev/min/plugin.js"></script>
    <script src="http://taxijoker.dev/min/preloader.js"></script>
    <script src="http://taxijoker.dev/min/custom.js"></script>
    <script src="http://taxijoker.dev/min/geo.js"></script>
	
	<?php foreach($includes as $includes_entry): ?>
    
		<?php if ($includes_entry=="callform") : ?>
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
			<script src="http://taxijoker.dev/min/typeahead.js"></script>
			<script src="http://taxijoker.dev/min/addresspicker.js"></script>
			<script src="http://taxijoker.dev/jquery/formprocess.js"></script>
		<?php endif; ?>
		
		<?php if ($includes_entry=="joinform") : ?>
			<script src="http://taxijoker.dev/jquery/jquery.validate.js"></script>
			<script src="http://taxijoker.dev/jquery/jquery.validate.additional-methods.js"></script>
			<script src="http://taxijoker.dev/jquery/jquery.ui.widget.js"></script>
			<script src="http://taxijoker.dev/jquery/jquery.iframe-transport.js"></script>
			<script src="http://taxijoker.dev/jquery/jquery.fileupload.js"></script>
			<script src="http://taxijoker.dev/jquery/jquery.fileupload-image.js"></script>
		<?php endif; ?>
		
		<?php if ($includes_entry=="driver") : ?>
			<script src="http://taxijoker.dev/min/typeahead.js"></script>
			<script src="http://taxijoker.dev/jquery/carvendors.bloodhound.js"></script>
			<script src="http://taxijoker.dev/jquery/tinycolor.js"></script>
			<script src="http://taxijoker.dev/jquery/colorengine.js"></script>
			<script src="http://taxijoker.dev/jquery/driverprocess.js"></script>
		<?php endif; ?>
		
		<?php if ($includes_entry=="dispatcher") : ?>
			<script src="http://taxijoker.dev/jquery/dispatcherprocess.js"></script>
		<?php endif; ?>
		
	<?php endforeach; ?>
    

    
    </body>
</html>
