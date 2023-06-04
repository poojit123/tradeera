 <!-- footer section -->
 <footer class="footer position-relative secondary-bg">
     <div class="footer-top py-85">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-4 col-12">
                     <div class="footer-logo">
                         <a href="<?php echo BASE_URL ?>/index.php"><img src="<?php echo IMAGES_URL ?>/footer-logo.png"
                                 alt="logo"></a>
                     </div>
                     <ul class="address-info mt-2">
                         <li><i class="fas fa-map-marker-alt"></i>838
                             Andy Street, Madison, NJ 08003</li>
                         <li><i class="fas fa-envelope"></i>Email
                             -&nbsp; <a href="mailto:demo@gmail.com" class="link-hover">
                             support@tradeera.in</a></li>
                         <li><i class="fas fa-headphones"></i>Support
                             -&nbsp;<a href="tel:01005200369" class="link-hover"> 0100 5200 369</a></li>
                     </ul>
                     <ul class="social-links">
                         <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                         <li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                     </ul>
                     <div class="gwc-logo">
                         <a href="https://www.gwcindia.in/" target="_blank"><img
                                 src="<?php echo IMAGES_URL ?>/gwcindia.png" alt="gwcindia"></a>
                         <p>Goodwill Wealth Management Pvt Ltd | MCX : 11095 | ICEX : 2035 | SEBI Regn. No :
                             INZ000177036 MSEI : 11240 | NSE : 90097 | BSE : 6648 </p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-6">
                     <div class="footer-title">
                         <h3>Company</h3>
                     </div>
                     <ul class="footer-link">
                         <li><a href="<?php echo BASE_URL ?>/products.php" class="link-hover">Products</a></li>
                         <li><a href="<?php echo BASE_URL?>/pricing.php" class="link-hover">Pricing</a></li>
                         <li><a target="_blank" href="https://spanmargin.gwcindia.in:10121/calculator#/marginCalculator" class="link-hover">Futures Margin Calculator</a></li>
                         <li><a target="_blank" href="https://www.gwcindia.in/VarMarginCalc.aspx" class="link-hover">Equity Margin Calculator</a></li>
                         <li><a target="_blank" href="https://smartpayz.gwcindia.in/smartpayz/" class="link-hover">Fund Transfer</a></li>
                         <li><a href="<?php echo BASE_URL?>/bank-details.php" class="link-hover">Bank Details</a></li>
                         <li><a href="javascript:void(0)" class="link-hover">Refer & Earn</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-md-4 col-6">
                     <div class="footer-title">
                         <h3>Account</h3>
                     </div>
                     <ul class="footer-link">
                         <li><a href="https://gudwil.in/GB3YE" target="_blank" class="link-hover">Open an Account</a></li>
                         <li><a href="https://trade.gwcindia.in/base/login" target="_blank" class="link-hover">Trading Login</a></li>
                         <li><a href="https://backoffice.gwcindia.in:8080/WebLogin/index.cfm?Logintype=SUBBRANCH" target="_blank" class="link-hover">Partner Login</a></li>
                         <li><a href="javascript:void(0)" class="link-hover">Downloads</a></li>
                         <li><a href="https://rekyc.gwcindia.in/rekyc/index.php" target="_blank" class="link-hover">Re KYC</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="footer-title">
                         <h3>Newsletter</h3>
                     </div>
                     <p>Get in your inbox the latest News</p>
                     <div class="footer-form">
                         <form>
                             <div class="form-group">
                                 <i class="far fa-user"></i>
                                 <input type="text" class="form-control" name="name" placeholder="Your Name"
                                     required="">
                             </div>
                             <div class="form-group">
                                 <i class="far fa-envelope"></i>
                                 <input type="email" class="form-control" name="email" placeholder="Email address"
                                     required="">
                             </div>
                             <div class="form-group mt-3 mb-0">
                                 <button type="submit" class="btn
                                                btn-primary ripple-effect
                                                text-uppercase submit">subscribe</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom">
         <div class="container">
             <p>Issued in the interest of investors: Prevent Unauthorised transactions in your trading and Demat
                 account. Update your mobile numbers/email IDs with Tradingbells. Receive alerts and information of all
                 debit and other important transactions in your trading and Demat account directly from
                 Exchange/Depository on your mobile/email at the end of the day. KYC is a onetime exercise while dealing
                 in securities markets. Once KYC is done through a SEBI registered intermediary (broker, DP, Mutual Fund
                 etc.), you need not undergo the same process again when you approach another intermediary.</p>
             <p>No need to issue cheques by investors while subscribing to IPO. Just write the bank account number and
                 sign in the application form to authorise your bank to make payment in case of allotment. No worries of
                 refund as money remains in investor's account.</p>
             <div class="copyright">© <?= date('Y'); ?> <a href="javascript:void(0)" class="link-hover">TradeEra</a>
                 - Business &amp; Consulting. All rights reserved.</div>
         </div>
     </div>
 </footer>
 <!-- searcch modal -->
 <div id="search-modal" class="search-modal">
     <div class="close-search"><span>Close</span></div>
     <div class="search-form">
         <form>
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="What do you want to search">
                 <div class="input-group-append">
                     <button class="btn btn-primary ripple-effect" type="button">
                         Search Now!
                     </button>
                 </div>
             </div>
         </form>
     </div>
 </div>