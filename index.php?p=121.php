<?php require_once ('header.php')?>

              
        <div class="entry-content">
            <div class="row contener">
<div class="span6" style="padding-left: 40px;"><span style="color: #cb4d00; font-size: 18px;">SEVENHILL RESTAURANT</span><br />
Dk Tower,Level &#8211; 7,<br />
94 Bir Uttam C.R. Datta Road<br />
(Old Sonargaon Road),Banglamotor,<br />
Dhaka – 1205, Bangladesh<br />
Mob : 01834063413, 01751703569<br />
Tel : 9614855<br />
E-mail: info@sevenhillrestaurant.net<br>
              polycste@gmail.com</div>
<div class="span6" style="padding-left: 40px;"><span style="color: #cb4d00; font-size: 18px;">OUR LOCATIONS</span><br />
BANGLAMOTOR, DHANMONDI, DHAKA, BANGLADESH<br />
Located at the eighth floor of Dk Tower,<br />
Sevenhill has the most elegant panoramic<br />
view of vibrant Dhaka city. Either it&#8217;s a<br />
business lunch, or a romantic dinner,<br />
Sevenhill is the number one restaurant<br />
in Dhaka.</p>
<p><span style="color: #cb4d00; font-size: 18px;">Opening Time</span><br />
Lunch Buffet &#8211; 13.00Pm to 16.00Pm<br />
Dinner Buffet &#8211; 19.00pm to 22.30pm<br />
A-la carte &#8211; 12.30pm to 10.30 pm</div>
</div>
<p><form method="post" id="cntctfrm_contact_form" action="index.php%3Fp=121.php" enctype="multipart/form-data"><div style="text-align: left; padding-top: 5px;">
						<label for="cntctfrm_contact_name">Name: <span class="required">*</span></label>
					</div><div style="text-align: left;">
						<input class="text" type="text" size="40" value="" name="cntctfrm_contact_name" id="cntctfrm_contact_name" style="text-align: left; margin: 0;" />
					</div><div style="text-align: left;">
					<label for="cntctfrm_contact_email">Email Address: <span class="required">*</span></label>
				</div><div style="text-align: left;">
					<input class="text" type="text" size="40" value="" name="cntctfrm_contact_email" id="cntctfrm_contact_email" style="text-align: left; margin: 0;" />
				</div>
			<div style="text-align: left;">
					<label for="cntctfrm_contact_subject">Subject: <span class="required">*</span></label>
				</div><div style="text-align: left;">
					<input class="text" type="text" size="40" value="" name="cntctfrm_contact_subject" id="cntctfrm_contact_subject" style="text-align: left; margin: 0;" />
				</div>

				<div style="text-align: left;">
					<label for="cntctfrm_contact_message">Message: <span class="required">*</span></label>
				</div><div style="text-align: left;">
					<textarea rows="5" cols="30" name="cntctfrm_contact_message" id="cntctfrm_contact_message"></textarea>
				</div><div style="text-align: left; padding-top: 8px;">
					<input type="hidden" value="send" name="cntctfrm_contact_action"><input type="hidden" value="Version: 3.30" />
					<input type="hidden" value="en" name="cntctfrm_language">
					<input type="submit" value="Submit" style="cursor: pointer; margin: 0pt; text-align: center;margin-bottom:10px;" /> 
				</div>
				</form><br />
	<!-- INCLUDE GOOGLE MAP API (can't be enqueue'd by WP) -->	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	
	<!-- RUN gMap() -->
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#tb_gmap_459127855").gMap({
			maptype: "ROADMAP",
			zoom: 14,
			markers: [
				{
					address: "Seven Hill Sonargaon R0ad, Dhaka, Bangladesh",
					popup: true,
					html: "Seven Hill Sonargaon R0ad, Dhaka, Bangladesh"
				}
			],
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: false,
				overviewMapControl: false
			}
		});
	});
	</script>
	<div id="tb_gmap_459127855" class="themeblvd-gmap" style="height:500px"></div>
	</p>
        </div>

                                            </article>
                                
                            
                        
                                        
                    

                </div><!--.article-container -->

           
        </div><!--.row -->
    </div><!-- .container role: main -->

    
</div><!--#main-wrapper"-->

	<?php require_once ('footer.php')?>