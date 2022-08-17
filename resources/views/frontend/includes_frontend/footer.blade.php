 <footer class="main-footer">
     <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/foot.png')">
     </div>
     <div class="auto-container">
         <div>
             <div class="row" style="padding-top:30px;">
                 <div class="col-md-4">
                     <div class="footer-widget logo-widget">
                         <div class="widget-content">
                             <h3>About Us</h3>
                             <div class="text">
                             Precious Child Development Centre is an organization based in a rural
                                 area and its major aim is helping the vulnerable children and the community at large
                                 (in poverty stricken households) so as to enhance development and to improve
                                 livelihoods. 
                                 </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="footer-widget links-widget">
                         <div class="widget-content">
                             <div class="inner">
                             {{-- German --}}
                                 <h3>German Contacts</h3>
                                 <ul class="info">
                                <br> 
                                <li><span class="fa fa-user"></span>    Assy Kanya Nakiyingi Bahner </li>
                                <li><span class="fa fa-map-marker-alt"></span>
                                    Friedrich-Heller str. 15
                                </li>
                                <li><span class="fa fa-phone-alt"></span> 
                                <a href="tel:+49 (0) 15210172509">Phone :+49 (0) 15210172509 </a></li>
                                 <li><span class="fa fa-envelope-open"></span>
                                     Nakiyingiassybahner@gmail.com
                                </li>
                            </ul>
                            {{-- Uganda --}}
                           
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="footer-widget links-widget">
                         <div class="widget-content">
                             <div class="inner">
                                 
                                 {{-- Uganda --}}
                                 <h3>Uganda Contacts</h3>
                                 <ul class="info">


                                     <li><span class="fa fa-map-marker-alt"></span>P.O Box 180027 Mityana , Uganda </li>
                                     <li><span class="fa fa-map-marker-alt"></span>
                                         Bulera, Mityana Uganda
                                     </li>
                                     <li><span class="fa fa-phone-alt"></span>
                                         <a href="tel:+256 (0) 706-897541">Phone :+256(0) 706-897541 </a>
                                     </li>
                                     <li><a href="tel:+256 (0) 706-897541">Fax : +256 (0) 706-897541</a></li>
                                      <li><span class="fa fa-envelope-open"></span>
                                     info@precious-gifts.org
                                </li>


                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3" style="visibility:hidden;"></div>
             <div class="col-md-6">
                 <div class="footer-widget info-widget">
                     <div class="widget-content">
                         <h3>Subscribe Our Newsletter</h3>
                         <div class="newsletter-form">
                             {{-- success or failre msg --}}
                             @if (\Session::has('success'))
                                 <div class="alert alert-success">
                                     <p>{{ \Session::get('success') }}</p>
                                 </div><br />
                             @endif
                             @if (\Session::has('failure'))
                                 <div class="alert alert-danger">
                                     <p>{{ \Session::get('failure') }}</p>
                                 </div><br />
                             @endif
                             <form method="post" action="{{ url('newsletter/store') }}">
                                 @csrf
                                 <div class="form-group clearfix">
                                     <input type="email" name="email" value="" placeholder="Enter Your Email"
                                         required="">
                                     <button type="submit" class="theme-btn newsletter-btn"
                                         style="background-color:red;">Subscribe</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-3" style="visibility:hidden;"></div>
         </div>
         <br>
     </div>
     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="inner">
                 <!--Copyright-->
                 <div class="copyright">Copyrights (c) 2022 <a href="#">Precious Gift : </a>
                     Design by : Wanran Inc.</div>
             </div>
         </div>
     </div>
 </footer>
