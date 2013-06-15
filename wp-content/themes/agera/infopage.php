<?php

/*
 * Template Name: Info
 * Description: A Page Template with a darker design.
 */
 
get_header();	
$mp_option = agera_get_global_options();
$page_id = get_the_ID();
	
$post_values = get_post_custom($page_id);
if( isset($post_values['page_background'][0]) )
	$page_data['background'] = $post_values['page_background'][0];
else
	$page_data['background'] = '';

?>

<style>
	#content {
		background: url(http://my-yacht-charter.com/wp-content/uploads/2013/06/background-about-us-resized.jpg);
		background-size: cover;
    background-position: bottom center;
	}
	
	.infopage{
	  opacity:0.9;
	}
	
	.l-menu {
  float: left;
  height: 70%;
  position: fixed;
  border-right: 1px solid  #ccc;
  padding-right: 30px;
  }
  
	.infopage h6 a{
    color:#2e3971;
    line-height:25px;
    font-weight:bold;
  }

  .r-content {
  float: right;
  width: 70%;
  margin-top: -30px;
  }

  .dom {
  padding: 32px 0 50px 0;
  color: 
  black;
  }

  .dom h4 {
  font-size: 18px;
  color:#ec9b00 !important;
  }
	
</style>

<div id="content" role="main">
	<div class="page-container">
		<div class="page-content infopage">

    		  <div class="l-menu">
    		    <h6><a href="#1">CHARTER TERMS</a></h6>
    		    <h6><a href="#2">A.P.A.</a></h6>
    		    <h6><a href="#3">PREFERENCE SHEET</a></h6>
    		    <h6><a href="#4">SECURITY DEPOSIT</a></h6>
    		    <h6><a href="#5">CHARTER RATES</a></h6>
    		    <h6><a href="#6">V.A.T.</a></h6>
    		    <h6><a href="#7">FEES</a></h6>
    		    <h6><a href="#8">PAYMENT TERMS</a></h6>
    		    <h6><a href="#9">INSURANCE</a></h6>
    		    <h6><a href="#10">GRATUITIES</a></h6>
    		    <h6><a href="#11">SMOKING</a></h6>
    		    <h6><a href="#11">MORE INFO</a></h6>
    		  </div>

    		  <div class="r-content">
    		    <div class="dom" id="1">
    		      <h4>WHAT IS INCLUDED OR NOT WHITIN THE CHARTER FEE</h4>
    		      <p>Please note that most of the above yachts operate on Mediterranean Yacht Brokers Association (MYBA) terms. The charter fee includes the hire cost of yacht and the crew only. That means that the yacht will be provided to the charterer with all necessary equipment, properly insured for marine risks and managed by a professional crew, whose cost is totally for the owner’s account. All other costs such as fuel and lubricating oils for the yacht, her tenders and motorized water toys; local taxes; ports dues (including water and electricity); custom clearance; personal laundry; all food and drinks provisions  and consumables for the charterer’s party; board telecommunication costs are at the Charterer's expense. Please note that, sometime, a yacht should be offered at different terms as described above. Our staff will provide full details of any charter terms that vary from standard MYBA Terms. 
              </p>
    		    </div>

    		    <div class="dom" id="2">
    		      <h4>ADVANCE PROVISIONING ALLOWANCE</h4>
    		      <p>APA is a cash found that the client establish on the hands of the Captain, so that he can provide to pay all the expenses that by contract are on charge of the client (fuel, harbour fees, yacht provisioning, …). At the end of the charter, the captain will produce full accounts of all expenditure. Before to leave the yacht, you will either be refunded any money not used or asked to pay any additional costs not covered by the APA.  It is due at the time of the final charter payment. This sum is usually equivalent to 20/30% of the total charter fee, but may be different in some cases.
              </p>
    		    </div>

    		    <div class="dom" id="3">
    		      <h4>HOW SPECIFY THE FOOD AND DRINKS TO FIND ABOARD</h4>
    		      <p>Several weeks before you will board, we will ask you to complete a detailed questionnaire describing the preferences and special needs of all the members of your party, such as dietary or medial requirements, details of any allergies, and your sporting or entertainment requests. This will enable us and the crew of your chosen yacht to ensure that everything possible is done to make your charter an unforgettable experience. 
              </p>
    		    </div>

    		    <div class="dom" id="4">
    		      <h4>SECURITY DEPOSIT</h4>
    		      <p>Some yachts or in some particular occasions, the charterer should be asked to pour to the owner a refundable security deposit to guarantee some little damages that the party should  procure on board. This amount is due at the time of the final charter payment and will be returned to the charterer, if any damages is done, at the end of the charter. 
              </p>
    		    </div>

    		    <div class="dom" id="5">
    		      <h4>CHARTER RATES</h4>
    		      <p>Charter rates are quoted per week and one week is the minimum charter period accepted. Is possible sometime, that charters of less than seven days should be consider, in this case the charter fee will be calculated pro-rata against the weekly rate divided by six and multiplied by the number of charter days. Charters normally commence and terminate at the same hour on the first and last day. High season rates apply to the most requested charter periods, i.e.: July/August and Christmas/New Year, and are also normally applicable to all major events. Low season rates apply to all other periods.Please note that charter rates quoted on this site are believed to be correct but may be subject to change.
              </p>
    		    </div>

    		    <div class="dom" id="6">
    		      <h4>V.A.T.</h4>
    		      <p>In European territorial waters VAT (Value Added Tax) is normally charged on the Charter Fee and rates can vary according to the place of embarkation and the chosen itinerary. Our staff will be able to advise you on the latest tax situation for any country you wish to visit.
              </p>
    		    </div>

    		    <div class="dom" id="7">
    		      <h4>DELIVERY AND REDELIVERY FEE</h4>
    		      <p>If your chosen cruising itinerary necessitates embarking or disembarking from a point other than the yacht’s home port, positioning charges (delivery/redelivery fees) may be required. These charges, if applicable, will be confirmed in advance and affirmed in the Charter Agreement, together with any taxes that may apply. 
              </p>
    		    </div>

    		    <div class="dom" id="8">
    		      <h4>PAYMENT TERMS</h4>
    		      <p>A down payment of 50% of the total charter fee is to be paid  by bank transfer on signature of the Charter Agreement. This confirms your booking. The remaining 50%, plus an Advance Provisioning Allowance, the Security Deposit (if requested) together with any taxes, delivery/redelivery fees and any additionally agreed charges, is payable by bank transfer five weeks before the charter commences. 
              </p>
    		    </div>

    		    <div class="dom" id="9">
    		      <h4>PRIVATE AND PERSONAL INSURANCE</h4>
    		      <p>We recommend that charterers take out Cancellation and Curtailment Insurance. Additionally, all members of the charter party should be covered by Personal Accident and Medical Insurance, and their personal effects should be insured against theft, loss or damage. Other forms of insurance, such as Charterer’s Liability may also be prudent. Our staff will be pleased to assist with arranging any policy not covered by the basic Charter Agreement.
              </p>
    		    </div>

    		    <div class="dom" id="10">
    		      <h4>CREW GRATUITIES</h4>
    		      <p>Crew gratuities are discretionary, although it is customary for a charterer who has enjoyed  the service of the crew to extend them a gratuity. Crew gratuities are normally in the region of 10% of the charter fee, but can be adjusted up or down according to your level of satisfaction.
              The best way to ensure that all crew members receive equal recognition is to entrust the distribution of gratuities to the captain. In this way, inconspicuous crew members such as engineers and culinary staff, who make an important contribution to your safety and enjoyment, will not be overlooked. 
              </p>
    		    </div>

    		    <div class="dom" id="11">
    		      <h4>SMOKING ON BOARD THE YACHT</h4>
    		      <p>Smoking is not permitted inside most yachts. However please consult us for verification, as this policy may vary on certain yachts. For safety reasons, smoking in cabins and staterooms is prohibited on all yachts. 
              </p>
    		    </div>
    		    
    		    <div class="dom" id="12">
    		    <h4>PLEASE CONTACT US FOR ANY ADDITIONAL INFO</h4>
    		    <form action="http://my-yacht-charter.com/portfolio/info" id="contact_form" method="post">
            <div class="comment-from-who">
            <p class="mpc-name"><input style="border:1px solid #ff8e24;" type="text" name="author_cf" id="author_cf" value="Name *" class="requiredField comments_form author_cf" tabindex="1" onfocus="if(this.value=='Name *') this.value='';" onblur="if(this.value=='')this.value='Name *';"></p>
            <p class="email"><input style="border:1px solid #ff8e24;" type="text" name="email_cf" id="email_cf" value="Email *" class="requiredField comments_form email email_cf" tabindex="2" onfocus="if(this.value=='Email *') this.value='';" onblur="if(this.value=='')this.value='Email *';"></p>
            </div>
            <div class="comments_form_text">
            <p class="mess"><textarea style="border:1px solid #ff8e24;width:90%;"name="message_cf" id="message_cf" rows="1" cols="1" class="requiredField comments_form text_f message_cf" tabindex="3" onfocus="if(this.value=='Message *') this.value='';" onblur="if(this.value=='')this.value='Message *';">Message *</textarea></p>
            <p class="form_btns"><input name="submit" type="submit" id="submit" tabindex="6" value="Send" class="read_more send"><input type="hidden" name="submitted" id="submitted" value="true"></p>
            <p class="checking"><input type="text" name="checking" id="checking" class="checking" value="" style="display: none;"></p>
            </div>
            <div class="clear"></div>
            </form>
            </div>

    		  </div>



    		</div>
    
  </div> <!-- end page-content -->
</div><!-- end content -->
<?php get_footer(); ?>
</body>
</html>
