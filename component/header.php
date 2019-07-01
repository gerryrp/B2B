<div  class="container max-w-full">
                <div  class=" mb-4 h-32 sm:h-32 md:h-16 lg:h-16 xl:h-16">

                <nav class="flex md-4 "> 

                    <div class="w-full sm:w-full md:w-full ml-5">
                        <ul>                     
                           <li><a href = "<?=root_path?>/pages/home.php";>Home</a></li>
                           <li><a href=#>Archives<i class="fas fa-angle-down ml-1 my-auto"></i></a>
                                <!-- First Tier Drop Down -->
                                <ul>
                                    <li><a href="<?=root_path?>/pages/reservation/reservation.php">Reservation List</a></li>
                                    <li><a href="<?=root_path?>/pages/ireservation/intreservation.php">Int Reservation List</a></li>
                                    <li><a href="<?=root_path?>/pages/alreservation/alreservation.php">Airline Reservation List</a></li>
                                    <li><a href="<?=root_path?>/pages/invoice/invoice.php">Invoice List</a></li>
                                    <li><a href="<?=root_path?>/pages/intinvoice/intinvoice.php">Int. Htl. List</a></li>
                                    <li><a href="<?=root_path?>/pages/alinvoice/alinvoice.php">Airline Invoice List</a></li>
                                    <li><a href="<?=root_path?>/pages/credit/creditlimit.php">Credit Limit List</a></li>
                                    <li><a href="<?=root_path?>/pages/topup/transfer.php">Top Up List</a></li>
                                    <li><a href="<?=root_path?>/pages/session/userSession_list.php">User Session List</a></li>
                                    <li><a href="<?=root_path?>/pages/signup/signup_list.php">Sign Up List</a></li>
                                    <li><a href="#">Search Flight</a></li>
                                </ul>        
                            </li>
                            <li><a href="#">Report<i class="fas fa-angle-down ml-1 my-auto"></i></a>
                                <!-- First Tier Drop Down -->
                                <ul>
                                    <li><a href="<?=root_path?>/pages/reporth/reservation_report.php">Haryono Sales</a></li>
                                
                                    <li><a href="#">Operation Production</a></li>

                                    <li><a href="#">Customer Production<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                        <ul>
                                        <li><a href="#">Booker Incentive</a></li>                            
                                        </ul>
                                    </li>

                                    <li><a href="#">Hotel Production<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                        <ul>
                                        <li><a href="#">Hotel Check-in</a></li>
                                        <li><a href="#">Hotel Allotment</a></li>                            
                                        </ul>
                                    </li>

                                    <li><a href="<?=root_path?>/pages/bincentive/bincentive_list.php">Incentives Claim</a></li>

                                    <li><a href="#">Analytics<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                        <ul>
                                        <li><a href="#">Issued</a></li>
                                        <li><a href="#">Confirmation Speed</a></li>
                                        <li><a href="#">Activity</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">User Booking Statistic</a></li>
                                        <li><a href="#">Customers Sales</a></li>
                                        <li><a href="#">Hotel Sales </a></li>
                                        <li><a href="#">All Sales</a></li>                            
                                        </ul>                          
                                    </li>

                                    <li><a href="#">Log<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                        <ul>
                                        <li><a href="<?=root_path?>/pages/log/emaillog_list.php">Email Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/sessionlog_list.php">Session Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/allotmentlog_list.php">Allogment Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/hotelratelog_list.php">Hotel RateLog</a></li>
                                        <li><a href="<?=root_path?>/pages/log/creditlog_list.php">Credit Limit Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/depositlog_list.php">Deposit Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/publiclinklog_list.php">Public Link Log</a></li>
                                        <li><a href="<?=root_path?>/pages/log/mandrillmanager_list.php">Mandrill</a></li>                            
                                        </ul>
                                    </li>

                                    <li><a href="<?=root_path?>/pages/pricelist/price_list.php">Price List</a></li>
                                </ul>
                            </li>


                            <li><a href="#">Master<i class="fas fa-angle-down ml-1 my-auto"></i></a>
                             <!-- First Tier Drop Down -->
                             <ul>
                                 <li><a href="<?=root_path?>/pages/hotel/hotel.php">Hotel<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/hotel/hotelGroup.php">Hotel Group</a></li>
                                        <li><a href="<?=root_path?>/pages/hotel/roomType.php">Room Type</a></li>
                                        <li><a href="<?=root_path?>/pages/hotel/roomFacility.php">Room Facility</a></li>                            
                                    </ul>
                                 </li>
                                 <li><a href="<?=root_path?>/pages/rate/hotelRate.php">Rate<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/rate/rateType.php">Rate Type</a></li>
                                    </ul>  
                                 </li>
                                 <li><a href="<?=root_path?>/pages/allotment/hotelAllotment.php">Allotment<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/allotment/roomTypeGroup.php">Rate Type Group</a></li>
                                    </ul> 
                                 </li>
                                 <li><a href="<?=root_path?>/pages/customers/customer.php">Customers</a></li>
                                 <li><a href="<?=root_path?>/pages/users/user.php">User</a></li>
                                 <li><a href="<?=root_path?>/pages/apiusers/apiuser.php">API User </a></li>
                                 <li><a href="<?=root_path?>/pages/branch/branch.php">Branch</a></li>
                                 <li><a href="<?=root_path?>/pages/location/city.php">Location<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/location/city.php">City</a></li>
                                        <li><a href="<?=root_path?>/pages/location/state.php">State</a></li>
                                        <li><a href="<?=root_path?>/pages/location/country.php">Country</a></li>                            
                                    </ul>
                                 </li>
                             </ul>        
                             </li>
                            <li><a href="#">Setting<i class="fas fa-angle-down ml-1 my-auto"></i></a>
                             <ul>
                               <li><a href="<?=root_path?>/pages/setting/system.php">System</a></li>
                               <li><a href="<?=root_path?>/pages/setting/arlsetting.php">Airlines System</a></li>
                               <li><a href="<?=root_path?>/pages/setting/intsetting.php">Int Hotel</a></li>
                               <li><a href="<?=root_path?>/pages/setting/imarksetting.php">Int Htl Mark Up</a></li>
                               <li><a href="<?=root_path?>/pages/setting/apisetting.php">API</a></li>
                               <li><a href="<?=root_path?>/pages/setting/role.php">User Role</a></li>
                               <li><a href="<?=root_path?>/pages/setting/emailtemplate.php">Reservation<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/setting/emailtemplate.php">Email Template</a></li>
                                        <li><a href="<?=root_path?>/pages/setting/bookingstatus.php">Booking Status</a></li>
                                    </ul>
                               </li>
                               <li><a href="<?=root_path?>/pages/setting/news.php">News<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/setting/frontpage.php">Front Page</a></li>                    
                                    </ul>
                               </li>
                               <li><a href="<?=root_path?>/pages/menu/menu_list.php">Menu<i class="fas fa-angle-right ml-1 my-auto"></i></a>
                                    <ul>
                                        <li><a href="<?=root_path?>/pages/page/page_list.php">Page</a></li>
                                    </ul>
                               </li>
                            </ul>
                            </li>
                            <li><a href="#">Profile<i class="fas fa-angle-down ml-1 my-auto"></i></a>
                              <ul>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Switch User Role</a></li>
                                <li><a href="#">Log In As(Do Not Book)</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="flex w-1/3">
                        
                     </div>

                    <ul class="logout">
                        <li>
                            <a href="<?=root_path?>/pages/login.php">
                                <span class="nav-text">
                                    Logout
                                </span>
                            </a>
                        </li>  
                    </ul>

                </nav>
                           
                    
                </div>
            </div>
