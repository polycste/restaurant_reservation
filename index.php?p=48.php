<?php require_once('header.php') ?>

<div class="slider">
</div>

</div>		


<div id="main-wrapper " class="container">

    <div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><span class="trail-begin"><a href="index.php" title="sevenhillrestaurant" rel="home" class="trail-begin">Home</a></span> <span class="sep">&raquo;</span> <span class="trail-end">Online Reservation</span></div><div class="tc-hot-crumble container" role="navigation"><div class="row"><div class="span12"></div></div></div>    
    <div class="container" role="main">
        <div class="row">
         
        
         
                   
      <div class="span3 left tc-sidebar">
         <div id="left" class="widget-area" role="complementary">
                       </div><!-- #left -->
      </div><!--.tc-sidebar -->

                      
                <div id="content" class="span12 article-container">
                    
                    
                        
                                                                                    
                                                                    <article id="page-48" class="post-48 page type-page status-publish hentry row-fluid">
                                        
        <header class="entry-header">
          
          <h1 class="entry-title format-icon">Online Reservation  </h1><hr class="featurette-divider __before_content">
        </header><!-- .entry-header -->

              
        <div class="entry-content">
            <p>We would like to inform you that your reservation request has been accepted and its primary confirm.<br />
For final confirmation Sevenhill will contact with you by your cell or email<br />
For more details please call = 9614855, 9632221</p>
<!-- ReDi restaurant reservation plugin version 14.0630 -->
<div id="cancel-reservation-div" style="display: none">

	<h2 style="float:left;"> Cancel reservation</h2><a href="index.php%3Fp=48.php#cancel" id="back-to-reservation" class="cancel-reservation">Back to reservation page</a>

	<br clear="both"/>
	<div id="cancel-reservation-form">
		<label for="redi-restaurant-cancelID">Reservation number:<span class="redi_required">*</span></label>
		<br clear="both"/>
		<input type="text" name="cancelID" id="redi-restaurant-cancelID"/>
		<br clear="both"/>
		<br clear="both"/>
		<label for="redi-restaurant-cancelEmail">Email:<span class="redi_required">*</span></label>
		<br clear="both"/>
		<input type="text" name="cancelEmail" id="redi-restaurant-cancelEmail"/>
		<br clear="both"/>
		<br clear="both"/>
		<label for="redi-restaurant-cancelReason">Reason:<span class="redi_required">*</span></label>
		<br clear="both"/>
		<textarea maxlength="250" rows="2" name="cancelEmail" id="redi-restaurant-cancelReason" cols="20"></textarea>
		<br clear="both"/><br clear="both"/>
		<input class="redi-restaurant-button" type="submit" id="redi-restaurant-cancel" name="Action" value="Cancel a reservation">
		<img id="cancel-load" style="display: none;" src="wp-content/plugins/redi-restaurant-reservation/img/ajax-loader.gif" alt=""/>
	</div>
	<br clear="both"/>
	<br clear="both"/>
	<div id="cancel-errors" style="display: none;" class="redi-reservation-alert-error redi-reservation-alert"></div>
	<div id="cancel-success" style="display: none;" class="redi-reservation-alert-success redi-reservation-alert">
		<strong>
			Reservation has been successfully canceled.<br clear="both"/>
		</strong>
	</div>
</div>
<script type="text/javascript">var date_format = 'dd/mm/yy';var time_format ="h:mm tt";var locale = "en_US";</script>
<form id="redi-reservation" action="tablebooking_process.php" name="redi-reservation" method="post">

	<div id="step1">
		
                 <h2 style="float:left;"> Step 1: Select date and time</h2><a href="index.php%3Fp=48.php#cancel" id="cancel-reservation" class="cancel-reservation">Cancel reservation</a>
            <input type="hidden" id="placeID" name="placeID" value="5506"/>
         		<br clear="both"/><label for="redi-restaurant-startDate">Start Date:<span class="redi_required">*</span></label><br clear="both"/>
		<input type="text" value="2015-06-05-01:00:00" name="startDate" id="redi-restaurant-startDate"/>
        <br clear="both"/>
        <br clear="both"/><label for="redi-restaurant-startHour">End Date:<span class="redi_required">*</span></label><br clear="both"/>
					<input id="redi-restaurant-startTime" type="text" value="2015-06-05-03:00:00" name="endDate"/><br clear="both"/>
				<input id="redi-restaurant-startDateISO" type="hidden" value="2015-05-10" name="startDateISO"/>
		<br clear="both"/><label for="persons">Persons:<span class="redi_required">*</span></label><br clear="both"/>

		<select name="persons" id="persons" class="redi-reservation-select">
			                <option value="1" >                    1                </option>
			                <option value="2" >                    2                </option>
			                <option value="3" >                    3                </option>
			                <option value="4" >                    4                </option>
			                <option value="5" >                    5                </option>
			                <option value="6" >                    6                </option>
			                <option value="7" >                    7                </option>
			                <option value="8" >                    8                </option>
			                <option value="9" >                    9                </option>
			                <option value="10" >                    10                </option>
			                <option value="11" >                    11                </option>
			                <option value="12" >                    12                </option>
			             
			            		</select>

        <div id="large_groups_message" style="display: none;margin-top: 30px;" class="redi-reservation-alert-info redi-reservation-alert"></div>
		<div style="margin-top: 30px;">
 <?php      if(isset($_SESSION['user_email'])) { ?>
			<input class="redi-restaurant-button" id="step1button" type="submit" value="Check available time and book" name="submit">
<?php
} else
  {
  echo 'You have to logged in to submit';
}
      ?>

			<img id="step1load" style="display: none;" src="wp-content/plugins/redi-restaurant-reservation/img/ajax-loader.gif" alt=""/>
		</div>
        <br clear="both"/>
        <div id="step1errors" style="display: none;" class="redi-reservation-alert-error redi-reservation-alert"></div>
	</div>
	<br clear="both"/>

	<div id="step2" style="display: none;">
		<h2>Step 2: Select available time</h2>
		<div id="buttons">
		</div>
		<input type="hidden" id="redi-restaurant-startTimeHidden" value=""/>
	</div>
	<br clear="both"/>

	<div id="step3" style="display: none;">
		<h2>Step 3: Provide reservation details</h2>
		<div>
			<br clear="both"/>
			<label for="UserName">Name:
				<span class="redi_required">*</span>
			</label>
			<br clear="both"/>
			<input type="text" value="" name="UserName" id="UserName">
		</div>
		<div>
			<br clear="both"/>
			<label for="UserPhone">Phone:
				<span class="redi_required">*</span>
			</label>
			<br clear="both"/>
			<input type="text" value="" name="UserPhone" id="UserPhone">
		</div>
		<div>
			<br clear="both"/>
			<label for="UserEmail">Email:
				<span class="redi_required">*</span>
			</label>
			<br clear="both"/>
			<input type="text" value="" name="UserEmail" id="UserEmail">
		</div>
		<!-- custom fields -->
														
																	
																	
																	
																	
							<div>
					<br clear="both"/>
					<label for="field_5">Message:
											</label>
					<br clear="both"/>

					<input type="textbox" value="" name="field_5" id="field_5" >
				</div>
							<!-- /custom fields -->
		<div>
			<br clear="both"/>
			<label for="UserComments">
				Comment:
			</label>
			<br clear="both"/>
			<textarea maxlength="250" rows="2" name="UserComments" id="UserComments" cols="20"></textarea>
		</div>
		<div>
			<br clear="both"/><br clear="both"/>
			<input class="redi-restaurant-button" type="submit" id="redi-restaurant-step3" name="Action" value="Make a reservation">
			<img id="step3load" style="display: none;" src="wp-content/plugins/redi-restaurant-reservation/img/ajax-loader.gif" alt=""/>
			<br clear="both"/>
		</div>
		<br clear="both"/>
        <br clear="both"/>
		<div id="step3errors" style="display: none;" class="redi-reservation-alert-error redi-reservation-alert"></div>
	</div>
	<div id="step4" style="display: none;" class="redi-reservation-alert-success redi-reservation-alert">
		<strong>
			Thank you for your reservation.<br clear="both"/>
		</strong>
		We will create a confirmation and email it to you at the email address you entered on the reservations form. You should receive your confirmation by email shortly.	</div>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
        </div>

                                            </article>
                                
                            
                        
                                        
                    

                </div><!--.article-container -->

           
        </div><!--.row -->
    </div><!-- .container role: main -->

    
</div><!--#main-wrapper"-->

<?php require_once('footer.php') ?>