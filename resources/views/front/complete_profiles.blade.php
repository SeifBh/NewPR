

          <div class="container-fluid">
            <div  class="thumbnail">


    <div class="wrapper wrapper-640">

        <form action="/updateaccount" method="post"  class="j-forms j-multistep" id="j-forms" enctype="multipart/form-data" novalidate="novalidate" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="header">
                <p>Settings - Complete your profile</p>
            </div>
            <!-- end /.header-->

            <div class="content">

                <fieldset class="active-fieldset">

                    <div class="divider-text gap-top-20 gap-bottom-45">
                        <span>Your Personal Details</span>
                    </div>
                   <div class="unit check ">
                        <!--<label class="label">Clavien-Dindo Classification of Surgical Complications *</label>!-->
                        <div class="j-row">
                        <div class="inline-group" style="padding-right:12px">Title : </div>
                            <div class="inline-group">
            @if( Auth::user()->title_user == 'Mr.')
                <label class="radio">
                     <input type="radio" name="title_user"  value="Mr." checked>
                     <i></i> Mr.
                </label>
            @else
                <label class="radio">
                     <input type="radio" name="title_user"  value="Mr." >
                     <i></i> Mr.
                </label>
            @endif



            @if( Auth::user()->title_user == 'Miss')
                <label class="radio">
                     <input type="radio" name="title_user"  value="Miss" checked><i></i>
                     Miss
                </label>
            @else
                <label class="radio">
                     <input type="radio" name="title_user"  value="Miss"><i></i>
                     Miss
                </label>
            @endif


            @if( Auth::user()->title_user == 'Mrs')
                <label class="radio">
                     <input type="radio" name="title_user"  value="Mrs" checked> <i></i> Mrs
                </label>
            @else
                <label class="radio">
                     <input type="radio" name="title_user"  value="Mrs"> <i></i> Mrs
                </label>
            @endif


            @if( Auth::user()->title_user == 'Dr')
                <label class="radio">
                     <input type="radio" name="title_user"  value="Dr" checked ><i></i>Dr
                </label>
            @else
                <label class="radio">
                     <input type="radio" name="title_user"  value="Dr" > <i></i>Dr
                </label>
            @endif                
            @if( Auth::user()->title_user == 'Ms')
                <label class="radio">
                     <input type="radio" name="title_user"  value="Ms" checked> <i></i> Mr.
                </label>
            @else
                <label class="radio">
                    <input type="radio" name="title_user"  value="Ms"> <i></i> Ms
                      
                </label>
            @endif
                            </div>

                        </div>
                    </div>
               <div class="j-row">
                    <div class="span6 unit">
                        <div class="input">
                            <label class="icon-right" for="firstname">
                                <i class="espace87 fa fa-user"></i>
                            </label>
                            <input type="text" id="firstname" name="firstname" placeholder="First name" value="{{ Auth::user()->first_name}}" required>
                        </div>
                    </div>
                    <div class="span6 unit">
                        <div class="input">
                            <label class="icon-right" for="lastname">
                                <i class="espace87 fa fa-user"></i>
                            </label>
                            <input type="text" id="lastname" name="lastname" placeholder="Last name" value="{{ Auth::user()->last_name}}" required>
                        </div>
                    </div>
                </div>


                <div class="j-row">
                    <div class="span12 unit">
                        <div class="input">
                            <label class="icon-right" for="middlename">
                                <i class="espace87 fa fa-bookmark"></i>
                            </label>
                            <input type="text" placeholder="Middle Name" id="middlename" name="middlename" value="{{ Auth::user()->middle_name}}">
                        </div>
                    </div>
                </div>


                <div class="j-row">
              <label class="label">Date of birth *</label>

                    <div class="span4 unit"><!-- start service -->
                        <label class="input select success-view">
                            <select name="date_day" aria-required="true" aria-invalid="false" required>
                                <option value="{{ Auth::user()->date_day }}">{{ Auth::user()->date_day }}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>

                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>

                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>

                            </select>
                            <i></i>
                        </label>
                    </div><!-- end service -->
                    <div class="span4 unit"><!-- start budget -->
                        <label class="input select success-view">
                            <select name="date_month" aria-required="true" aria-invalid="false" required>

                                <option value="{{ Auth::user()->date_month }}">{{ Auth::user()->date_month }}</option>
                                <option value="January">January</option>
                                <option value=" February"> February</option>
                                <option value="March">March</option>
                                <option value="April ">April </option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value=" July"> July</option>
                                <option value="August ">August </option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>

                            </select>
                            <i></i>
                        </label>
                    </div>
                    <div class="span4 unit"><!-- start budget -->
                        <label class="input select success-view">
                            <select name="date_year" aria-required="true" aria-invalid="false" required>
                                <option value="{{ Auth::user()->date_year }}">{{ Auth::user()->date_year }}</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>

                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>


                            </select>
                            <i></i>
                        </label>
                    </div>
                    <!-- end budget -->
                </div>

               <div class="j-row">
                    <div class="span6 unit">
                        <div class="input">
                            <label class="icon-right" for="home_number">
                                <i class="espace87 fa fa-phone"></i>
                            </label>
                            <input type="text" id="home_number" name="home_number" placeholder="Home number" value="{{ Auth::user()->home_number}}" required>
                        </div>
                    </div>
                    <div class="span6 unit">
                        <div class="input">
                            <label class="icon-right" for="mobile_number">
                                <i class="espace87 fa fa-mobile"></i>
                            </label>
                            <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile number" value="{{ Auth::user()->mobile_number}}" required>
                        </div>
                    </div>
                </div>


                   <div class="unit check ">
                        <div class="j-row">
                        <div class="inline-group" style="padding-right:12px">Have you been previously know by any other Names?</div>
                            <div class="inline-group">
        @if( Auth::user()->seen_other_names  == 'Yes')
            <label class="radio">
                 <input type="radio" name="previsouly"  value="Yes" checked>
                 <i></i>Yes
            </label>
        @else
            <label class="radio">
                 <input type="radio" name="previsouly"  value="Yes" > <i></i> Yes
            </label>
        @endif                
        @if( Auth::user()->seen_other_names  == 'No')
            <label class="radio">
                 <input type="radio" name="previsouly"  value="No" checked><i></i> No
                                   

            </label>
        @else
            <label class="radio">
                <input type="radio" name="previsouly"  value="No"> <i></i>No
                  
            </label>
        @endif



                        </div>
                    </div>
                    </div>

<div class="unit check " id="testhere" >
@if (Auth::user()->seen_other_names == 'Yes')
<div class="unit check " id="appended">
    <div class="j-row">
        <div class="inline-group" style="padding-right:12px">
            State
        </div>
        <div class="inline-group" style="width:30%;">
            <label class="input select success-view">
                <input type="text" name="state"  value="{{ Auth::user()->yes_state }}" placeholder="Please enter State" required> <i></i>
            </label>
        </div>
    </div>
</div>
@endif


</div>


                   <div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">What country you born in</div>
                            <div class="inline-group">
                                <label class="input select success-view">
                                    <select name="born" aria-required="true" aria-invalid="false" required>
                                        <option value="{{ Auth::user()->country_born }}">{{ Auth::user()->country_born }}</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="French">French</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Spain">Spain</option>                            
                                    </select>
                                        <i></i>
                                </label>
                            </div>
                    </div>
                    </div>


                   <div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">How long have you been a resident of the UK</div>
                            <div class="inline-group" style="width:30%;">
                                <label class="input select success-view">
                                    <select name="resident" aria-required="true" aria-invalid="false" required>
                                        <option value="{{ Auth::user()->how_long_resident }}">{{ Auth::user()->how_long_resident }}</option>
                                        <option value="0-6 months">0-6 months</option>
                                        <option value="6-12 months">6-12 months</option>
                                        <option value="1-2 years">1-2 years</option>
                                        <option value="3 years+">3 years+</option>   

                     
                                    </select>
                                        <i></i>
                                </label>
                            </div>
                    </div>
                    </div>
                    <!-- end subject -->
                
                </fieldset>


                <fieldset>

                    <div class="divider-text gap-top-20 gap-bottom-45">
                        <span>Contact Adress</span>
                    </div>

                    <!-- start textarea -->
                <div class="j-row">
                    <div class="span6 unit">
                    <label>House Name</label>
                        <div class="input success-view">
                            <label class="icon-right" for="housename">
                                <i class="espace87 fa fa-home"></i>
                            </label>
                            <input type="text" id="housename" name="housename" placeholder="House name" value="{{ Auth::user()->house_name }}" aria-invalid="false" >
                        </div>
                    </div>
                    <div class="span6 unit">
                      <label>House / Flat Number</label>

                        <div class="input success-view">
                            <label class="icon-right" for="flatNumber">
                                <i class="espace87 fa fa-sort-numeric-asc"></i>
                            </label>
                            <input type="text" id="flatNumber" name="flatNumber" placeholder="House / Flat Number" value="{{ Auth::user()->house_flat_number }}"  >
                        </div>
                    </div>
                </div>


                <div class="j-row">
                    <div class="span6 unit">
                        <label>Street/Road Name</label>
                        <div class="input success-view">
                            <label class="icon-right" for="street">
                                <i class="espace87 fa fa-road"></i>
                            </label>
                            <input type="text" id="street" name="street"  placeholder="Street/Road Name" value="{{ Auth::user()->street_road_name }}" aria-invalid="false" >
                        </div>
                    </div>
                    <div class="span6 unit">
                        <label>Adress 2</label>

                        <div class="input success-view">
                            <label class="icon-right" for="adress2">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="adress2" name="adress2" placeholder="Adress 2" value="{{ Auth::user()->adress2 }}" >
                        </div>
                    </div>
                </div>



                <div class="j-row">
                    <div class="span6 unit">
                        <label>Town</label>
                        <div class="input success-view">
                            <label class="icon-right" for="town">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="town" name="town"  placeholder="Town" value="{{ Auth::user()->town }}"  aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                        <label>City</label>

                        <div class="input success-view">
                            <label class="icon-right" for="City">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="city" name="city" placeholder="City" value="{{ Auth::user()->city }}" >
                        </div>
                    </div>
                </div>



                <div class="j-row">
                    <div class="span6 unit">
                        <label>Country</label>
                        <div class="input success-view">
                            <label class="icon-right" for="country">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="country" name="country"  placeholder="Country" value="{{ Auth::user()->country }}"  aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                        <label>Post Code</label>

                        <div class="input success-view">
                            <label class="icon-right" for="postcode">
                                <i class="espace87 fa fa-pencil-square-o"></i>
                            </label>
                            <input type="text" id="postcode" name="postcode"  placeholder="Post Code" value="{{ Auth::user()->post_code }}" >
                        </div>
                    </div>
                </div>










                    <!-- end file -->

                    <!-- start response from server -->
                    <div id="response"></div>
                    <!-- end response from server -->

                </fieldset>




                <fieldset>

                    <div class="divider-text gap-top-20 gap-bottom-45">
                        <span>Additional Details & Identification</span>
                    </div>




<div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">Matrial Status</div>
                            <div class="inline-group" style="width:30%;">
                                <label class="input select success-view">
                                    <select  aria-required="true" aria-invalid="false" name="MatrialStatus">
                                        <option value="{{ Auth::user()->matrials_status }}">{{ Auth::user()->matrials_status }}</option>
                                        <option value="Single">Single </option>
                                        <option value="Married">Married</option>
                                        <option value="Living with Partner">Living with Partner</option>
                                        <option value="Divorced">Divorced</option>                          
                                        <option value="Widowed">Widowed</option>                          
                                    </select>
                                        <i></i>
                                </label>
                            </div>
                    </div>
</div>


<div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">Whats your current Employement status?</div>
                            <div class="inline-group" style="width:30%;">
                                <label class="input select success-view">
                                    <select name="currentStatus" aria-required="true" aria-invalid="false">
                                        <option value="{{ Auth::user()->current_employement_status }}">{{ Auth::user()->current_employement_status }}</option>
                                        <option value="Employed - Full time">Employed - Full time</option>
                                        <option value="Employed - Part Time">Employed - Part Time</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Unemployed">Unemployed</option>                        
                                        <option value="House Husband">House Husband</option>                        
                                        <option value="House Wife">House Wife</option>                        
                                        <option value="Full time Mum">Full time Mum</option>                        
                                        <option value="Retired">Retired</option>                        
                                        <option value="Student - Part Time">Student - Part Time</option>                        
                                        <option value="Student - Full time">Student - Full time</option>                        
                                        <option value="Other">Other</option>                         
                                    </select>
                                        <i></i>
                                </label>
                            </div>
                    </div>
</div>




<div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">Whats your Occupation</div>
                            <div class="inline-group" style="width:30%;">

                                <label class="input select success-view">
                                </label>
                        <div class="input success-view">
                            <label class="icon-right" for="postcode">
                                <i class="espace87 fa fa-pencil-square-o"></i>
                            </label>
                                    <input type="text" id="occupation" name="occupation"  placeholder="Occupation" value="{{ Auth::user()->occupation }}" aria-required="true">                        
                        </div>

                                     

                            </div>
                    </div>
</div>


<div class="unit check ">
                        <div class="j-row">
                            <div class="inline-group" style="padding-right:12px">How long have you worked for your current Employer?</div>
                            <div class="inline-group" style="width:30%;">
                                <label class="input select success-view">
                                    <select name="worked" aria-required="true" aria-invalid="false">
                                        <option value="{{ Auth::user()->long_worked_employer }}">{{ Auth::user()->long_worked_employer }}</option>
                                        <option value="1 Month">1 Month</option>
                                        <option value="3 Months">3 Months</option>
                                        <option value="6 Months">6 Months</option>
                                        <option value="12 Months">12 Months</option>                       
                                    </select>
                                        <i></i>
                                </label>
                            </div>
                    </div>
</div>






                    <!-- start textarea -->
                    <div class="unit">
                        <p id="style_p">Please provide a short supporting statement below of why you chose to apply to become an Exempt Introducer with The Accident Guys</p>
                        <div class="input">
                            <label class="icon-right" for="textarea">
                                <i class="espace87 fa fa-file-text-o"></i>
                            </label>

                                <textarea id="bio" " name="bio" value="{{ Auth::user()->supporting_statment }}">{{ Auth::user()->supporting_statment }}</textarea>
                        </div>

                    </div>
                        <p id="style_p">
                             Before a successful application can be approved you must upload proof of identification, this identification will be used to stop any fraudulent activities and will be crossed referenced with ANY and all Local and National Databases.
                        </p>
                        <p id="style_p"> 
                            Types of identification that is needed will be
                        </p>

                        <p id="style_p"> 
                             Proof of Adress - Current Energy Bill, Bank Statements etc
                        </p>

                        <p id="style_p"> 
                             Photo Identification - Driving Licence or Passport
                        </p>

                    <!-- end textarea -->
                    <div class="j-row">
                    <div class="span6 unit">
                    <label>CIN</label>

                        <label class="input append-big-btn">
                            <label class="icon-left" for="file_input1">
                                <i class="espace87 fa fa-download"></i>
                            </label>
                            <div class="file-button">
                                Browse
                                <input type="file" name="image" id="image" onchange="document.getElementById(&#39;file_input1&#39;).value = this.value;">
                            </div>
                            <input type="text" id="file_input1" readonly="" placeholder="no file selected">
                            <span class="hint">Only: jpg / png </span>
                        </label>
                        </label>
                    </div>
                    <div class="span6 unit">
                                        <label>Passeport</label>

                        <label class="input append-big-btn">
                            <label class="icon-left" for="file_input2">
                                <i class="espace87 fa fa-download"></i>
                            </label>
                            <div class="file-button">
                                Browse
                                <input type="file" name="image2" id="image2" onchange="document.getElementById(&#39;file_input2&#39;).value = this.value;">
                            </div>
                            <input type="text" id="file_input2" readonly="" placeholder="no file selected">
                            <span class="hint">Only: jpg / png </span>
                        </label>
                    </div>
                </div>



                    <!-- start file -->

                    <!-- end file -->

                    <!-- start response from server -->
                    <div id="response"></div>
                    <!-- end response from server -->


             </fieldset>

                <fieldset>

                    <div class="divider-text gap-top-20 gap-bottom-45">
                        <span>Current Refferal Details for Solicitors / Claims ManagementCompany</span>
                    </div>


                   <div class="unit check ">
                        <div class="j-row">
                        <div class="inline-group" style="padding-right:12px">Do you currently refer prospects to a Solicitors or CMC?</div>
                            <div class="inline-group">
        @if( Auth::user()->refer  == 'Yes')
            <label class="radio">
                 <input type="radio" name="cmc"  value="Yes" checked>
                 <i></i>Yes
            </label>
        @else
            <label class="radio">
                 <input type="radio" name="cmc"  value="Yes" > <i></i> Yes
            </label>
        @endif                
        @if( Auth::user()->refer  == 'No')
            <label class="radio">
                 <input type="radio" name="cmc"  value="No" checked><i></i> No
                                   

            </label>
        @else
            <label class="radio">
                <input type="radio" name="cmc"  value="No"> <i></i>No
                  
            </label>
        @endif



                        </div>
                    </div>
                    </div>


                <div class="j-row">
                    <div class="span6 unit">
                    <label>Soicitors / CMC Name</label>
                        <div class="input success-view">
                            <label class="icon-right" for="cmcname">
                                <i class="espace87 fa fa-pencil-square-o"></i>
                            </label>
                            <input type="text" id="cmcname" name="cmcname" placeholder="Soicitors / CMC Name" value="{{ Auth::user()->cmc_name }}" aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                      <label>Street/Road Name</label>

                        <div class="input success-view">
                            <label class="icon-right" for="street2">
                                <i class="espace87 fa fa-street-view"></i>
                            </label>
                            <input type="text" id="street2" name="street2" placeholder="Street/Road Name" value="{{ Auth::user()->street_road_name2 }}"  aria-required="true">
                        </div>
                    </div>
                </div>


                <div class="j-row">
                    <div class="span6 unit">
                    <label>Adress 2</label>
                        <div class="input success-view">
                            <label class="icon-right" for="adress22">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="adress22" name="adress22" placeholder="Adress 2" value="{{ Auth::user()->adress2_2 }}" aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                      <label>Town</label>

                        <div class="input success-view">
                            <label class="icon-right" for="town2">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="town2" name="town2" placeholder="Town" value="{{ Auth::user()->town2 }}"  aria-required="true">
                        </div>
                    </div>
                </div>



                <div class="j-row">
                    <div class="span6 unit">
                    <label>City</label>
                        <div class="input success-view">
                            <label class="icon-right" for="city2">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="city2" name="city2" placeholder="City" value="{{ Auth::user()->city2 }}" aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                      <label>Country</label>

                        <div class="input success-view">
                            <label class="icon-right" for="country2">
                                <i class="espace87 fa fa-location-arrow"></i>
                            </label>
                            <input type="text" id="country2" name="country2" placeholder="Street/Road Name" value="{{ Auth::user()->country2 }}"  aria-required="true">
                        </div>
                    </div>
                </div>



                <div class="j-row">
                    <div class="span6 unit">
                    <label>Post Code</label>
                        <div class="input success-view">
                            <label class="icon-right" for="postcode2">
                                <i class="espace87 fa fa-pencil-square-o"></i>
                            </label>
                            <input type="text" id="postcode2" name="postcode2" placeholder="Post Code" value="{{ Auth::user()->post_code2 }}" aria-invalid="false">
                        </div>
                    </div>
                    <div class="span6 unit">
                      <label>Authorisation Number</label>

                        <div class="input success-view">
                            <label class="icon-right" for="authnumber">
                                <i class="espace87 fa fa-user"></i>
                            </label>
                            <input type="text" id="authnumber" name="authnumber" placeholder="Authorisation Number" value="{{ Auth::user()->auth_number }}"  aria-required="true">
                        </div>
                    </div>
                </div>

                   <div class="unit check ">
                        <div class="j-row">
                        <div class="inline-group" style="padding-right:12px">Are you currently under formal contract?</div>
                            <div class="inline-group">
        @if( Auth::user()->under_formal_contract  == 'Yes')
            <label class="radio">
                 <input type="radio" name="under_formal"  value="Yes" checked>
                 <i></i>Yes
            </label>
        @else
            <label class="radio">
                 <input type="radio" name="under_formal"  value="Yes" > <i></i> Yes
            </label>
        @endif                
        @if( Auth::user()->under_formal_contract  == 'No')
            <label class="radio">
                 <input type="radio" name="under_formal"  value="No" checked><i></i> No
                                   

            </label>
        @else
            <label class="radio">
                <input type="radio" name="under_formal"  value="No"> <i></i>No
                  
            </label>
        @endif



                        </div>
                    </div>
                    </div>


<div class="unit check " id="testhere2" >
@if (Auth::user()->under_formal_contract == 'Yes')
<div class="unit check " id="appended2">
    <div class="j-row">
        <div class="inline-group" style="padding-right:12px">
            When did you contract start?
        </div>
        <div class="inline-group" style="width:30%;">
            <label class="input select success-view">
                <input type="text" name="hm_prospects"  value="{{ Auth::user()->how_many_prospects }}" placeholder=""> <i></i>
            </label>
        </div>
    </div>
</div>
@endif


</div>

<div class="j-row">
<label class="label">Please tell us below how many prospects you have reffered in :</label>
                    <div class="span4 unit">
                        <label class="label">3 Months</label>
                        <label class="input select">
                <input type="text" name="hm_prospects1"  value="{{ Auth::user()->how_many_prospects }}" placeholder=""> <i></i>

                            <i></i>
                        </label>
                    </div>
                    <div class="span4 unit">
                        <label class="label">6 Months</label>
                        <label class="input select">
                <input type="text" name="hm_prospects2"  value="{{ Auth::user()->how_many_prospects }}" placeholder=""> <i></i>

                            <i></i>
                        </label>
                    </div>
                    <div class="span4 unit">
                        <label class="label">12 Months</label>
                        <label class="input select">
                <input type="text" name="hm_prospects3"  value="{{ Auth::user()->how_many_prospects }}" placeholder=""> <i></i>

                            <i></i>
                        </label>
                    </div>
                </div>


                </fieldset>


            </div>
            <!-- end /.content -->

            <div class="footer">
                <button type="submit" class="primary-btn multi-submit-btn" style="display: none;">Submit </button>
                <button type="button" class="primary-btn multi-next-btn">Next</button>
                <button type="button" class="secondary-btn multi-prev-btn" style="display: none;">Back</button>
            </div>
            <!-- end /.footer -->

        </form>
    </div>

@if(Session::has('flash_message'))

<div class="container">
  <div class="span4 pull-right">
    <div class="alert alert-danger fade">
      <button type="button" class="close" data-dismiss="alert">×</button>
    <script type="text/javascript">


        function generate(type, text) {

            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated bounceInLeft',
                    close : 'animated bounceOutLeft',
                    easing: 'swing',
                    speed : 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {
            //Updated profile
            generate('success', notification_html[5]);
            // Verify your email
           // generate('error', notification_html[1]);
           // generate('information', notification_html[2]);
//            generate('notification');
//            generate('success');
        }

        $(document).ready(function () {

            setTimeout(function() {
                generateAll();
            }, 500);

        });

    </script>
    

    </div>
  </div>
</div>
@endif

    <!-- Scripts -->
    <script src="/f11_files/jquery.1.11.1.min.js"></script>
    <script src="/f11_files/jquery.validate.min.js"></script>
    <script src="/f11_files/additional-methods.min.js"></script>
    <script src="/f11_files/jquery.form.min.js"></script>
    <script src="/f11_files/j-forms.min.js"></script>

    <!--[if lt IE 10]>
            <script src="j-folder/js/jquery.placeholder.min.js"></script>
        <![endif]-->
            </div>
