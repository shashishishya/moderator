<?php
echo "shashi";
$_pageid = 113;
?>
<!DOCTYPE html>
<html lang="en">
    <head>   
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
  <script>
        function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
          return true;
      }
</script>
    </head>
	<style type="text/css">
      .asterisk_input:after {
    content:"*";
    color:red;
 }
	</style><script>
		var lati='';
		var lngi='';
                $("document").ready(function() {
                    $("#dob").datepicker();
                });
                function initialize()
		{
                    var input = document.getElementById('autocomplete');
                    var options = {componentRestrictions: {country: 'in'}};
                    var autocomplete=new google.maps.places.Autocomplete(input, options);
                    google.maps.event.addListener(autocomplete,'place_changed', function()
                    {
                        var inputA = document.getElementById('autocomplete').value;
                        var geocoder = new google.maps.Geocoder();
                                        geocoder.geocode({
                                        'address': inputA
                                        }, function(results, status) {
                                                if (status === google.maps.GeocoderStatus.OK) 
                                                {
                                                        lati=results[0].geometry.location.lat();    
                                                        lngi=results[0].geometry.location.lng(); 
                                                        $('#latitude').val(lati);
                                                        $('#longitude').val(lngi);
                                                }
                                        });
                    });
                };
                function showerrormessage(message) 
                {
                    $("#message").text(message);
                    $("#message").show();
                }
	</script>
    <style>
        label.invalid
        {
            color: Red;
            padding: 1px;
            font-size: 12px;
            font-weight: normal;
            margin: 0px 0px 0px 45px;
        }
        secHeading{font-size:20px;font-weight:300;word-spacing:normal;letter-spacing:normal}
    </style>
    <body onLoad="initialize()">
        <div class="page-content" style="margin-top:80px ">
            <div class="container">
                <form method="POST"  class="section" id="regform" action="" onsubmit="return validateForm()">
               <label style="margin-left: 5%">All  <span class="asterisk_input">  </span> fileds are requred  </label>
               <br>
               <br>
                    <div class="form-group">
                          <label for="firstname" class="col-md-2">
                        First Name:
                        <span class="asterisk_input">  </span>
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name"><br>
			<label id="elmFNameError" class="errorMsg">&nbsp;</label>
                      </div>
                     </div>

                    <div class="form-group">
                      <label for="lastname" class="col-md-2">
                        Last Name:
                        <span class="asterisk_input">  </span>
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"><br>
			<label id="elmLNameError" class="errorMsg">&nbsp;</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="useremail" class="col-md-2">
                        Email address:
                        <span class="asterisk_input">  </span>
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address">
                        <p class="help-block">
                          Example: yourname@domain.com
                        </p>
			<label id="elmemailError" class="errorMsg">&nbsp;</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="col-md-2">
                        MobilePhone:
                        <span class="asterisk_input">  </span>
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile Phone" Maxlength="20" onkeypress="return isNumberKey(event)"><br>
			<label id="elmphoneError" class="errorMsg">&nbsp;</label>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="phone" class="col-md-2">
                        Guardian Number:
                        <span class="asterisk_input">  </span>
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="ephone" name="ephone" placeholder="Enter Guardian Monbile Phone" Maxlength="20" onkeypress="return isNumberKey(event)"><br>
                      </div>
                     </div>

                    <div class="form-group">
                         <label for="sex" class="col-md-2">
                        Sex:
                      </label>
                      <div class="col-md-10">
                        <label class="radio">
                          <input type="radio" name="sex" id="sex" value="male" checked>
                          Male
                        </label>
                        <label class="radio">
                          <input type="radio" name="sex" id="sex" value="female">
                          Female
                        </label>
                      </div>
                     </div>

                    <div class="form-group">
                      <label for="dob" class="col-md-2">
                        DateOfBirth:
                      </label>
                      <div class="col-md-10">
                       <input type="text" class="form-control" id="datepicker" name="dob" placeholder="DateOfBirth"><br>
                      </div>
                     </div>

                     <div class="form-group">
                      <label for="stblind" class="col-md-2">
                        Status of blindness:
                      </label>
                      <div class="col-md-10">
                        <select name="stblind" id="stblind" class="form-control">
                        <?php
                          foreach ($stblind as $sb) {
                            echo '<option value="'.$sb['Id'].'">'.$sb['Description'].'</option>';
                          }
                          ?>
                          </select>
                          <br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="stmobility" class="col-md-2">
                          Status of mobility:
                        </label>
                        <div class="col-md-10">
                          <select name="stmobility" id="stmobility" class="form-control">
                            <?php
                              foreach ($stmobility as $stm) {
                                echo '<option value="'.$stm['Id'].'">'.$stm['Description'].'</option>';
                              }
                              ?>
                          </select>
                          <br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="optechno" class="col-md-2">
                          Operate technologie:
                        </label>
                        <div class="col-md-10">
                          <select name="optechno" id="optechno" class="form-control">
                            <?php
                              foreach ($optechno as $opt) {
                                echo '<option value="'.$opt['Id'].'">'.$opt['Description'].'</option>';
                              }
                              ?>
                          </select>
                          <br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="hobies" class="col-md-2">
                          Interests/Hobies:
                        </label>
                      <div class="col-md-10">
                        <select name="hobies" id="hobies" class="form-control">
                          <?php
                            foreach ($hobies as $hb) {
                              echo '<option value="'.$hb['Id'].'">'.$hb['Description'].'</option>';
                            }
                            ?>
                        </select>
                        <br>
                      </div>
                    </div>
  

                    <div class="form-group">
                      <label for="lang" class="col-md-2">
                        Mothe Toungue:
                      </label>
                      <div class="col-md-10">
                          <select name="lang" id="lang" name="lang" class="form-control">
                          <?php
                            foreach ($languages as $lang) {
                                echo '<option value="'.$lang['Id'].'">'.$lang['Description'].'</option>';
                            }
                            ?>
                        </select>
                        <br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="plang" class="col-md-2">
                        Languages:
                      </label>
                      <div class="col-md-10">
                      <input type="checkbox" name="plang" value="English">English<br>
                      <input type="checkbox" name="plang" value="English">Hindi<br>
                      <input type="checkbox" name="plang" value="English">Telugu<br>
                      <input type="checkbox" name="plang" value="English">Tamil<br>
                      <input type="checkbox" name="plang" value="English">Kannada<br>
                      <input type="checkbox" name="plang" value="English">Malayalam<br>
                      <input type="checkbox" name="plang" value="English">Gujarati<br>
                      <input type="checkbox" name="plang" value="English">Punjabi<br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="profession" class="col-md-2">
                        Profession:
                      </label>
                      <div class="col-md-10">
                          <select name="profession" id="profession" name="profession" class="form-control">
                          <?php
                            foreach ($job as $jb) {
                                echo '<option value="'.$jb['Id'].'">'.$jb['Description'].'</option>';
                            }
                            ?>
                        </select>
                        <br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="qualification" class="col-md-2">
                        Qualification:
                      </label>
                      <div class="col-md-10">
                          <select name="qualification" id="qualification" name="qualification" class="form-control">
                          <?php
                            foreach ($edu as $ed) {
                                echo '<option value="'.$ed['Id'].'">'.$ed['Description'].'</option>';
                            }
                            ?>
                        </select>
                        <br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="iname" class="col-md-2">
                        Institution Name:
                      </label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" id="iname" name="iname" placeholder="DateOfBirth">
                          <br>
                          <br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="pincode" class="col-md-2">
                        PINCODE:
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="PINCODE" Maxlength="6" onkeypress="return isNumberKey(event)">
                        <br>
                      </div>
                    </div>
                     
                    <div class="form-group">
                      <label for="paddress" class="col-md-2">
                        Permanent Address:
                      </label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Permanent Address">
                          <br>
                      </div>
                     </div>
                     
                    <div class="form-group">
                      <label for="taddress" class="col-md-2">
                        Temperory Address:
                      </label>
                      <div class="col-md-10">
                        <input type="text" class="form-control" id="taddress" name="taddress" placeholder="Temperory Address">
                        <br>
                      </div>
                     </div>
                
                    <div class="form-group">
                      <label for="location" class="col-md-2">
                        Location:
                      </label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" id="autocomplete" name="autocomplete" placeholder="Choose Location" value="123123">
                        <input name="latitude"  id="latitude" type="hidden" value="111" />
                        <input  name="longitude" id="longitude" type="hidden" value="1223"/>
                        <input id="action" type="hidden" name="action" value="signup">
                        <br>
                      </div>
                     </div>
                     
                  <div class="form-group">
                    <label for="dream" class="col-md-2">
                      Dream in life:
                    </label>
                    <div class="col-md-10">
                      <textarea class="dream" id="dream" placeholder="Dream In Your life" rows="1" cols="50" wrap="physical"> 
                      </textarea>
                    </div>
                  </div>

                <input id="signup" type="hidden" name="signup" value="Signup">
                <div class="section fieldset" style="margin-top:20px">
                   <button type="submit" class="btn btn-success submit" style="Height:30px;width:90%;
                                                           border: 1px solid;  border-radius: 4px" tabindex="8" >JOIN US</button>
                </div>
                <p class="" style="margin-top:10px; margin-left:50px " >
By signing up, I agree to the <a href="/termsOfUse" target="_blank">Terms of Service</a> and <a href="/privacy" target="_blank">Privacy Policy</a>.
                        </p>
                </form>
            </div>
        </div>
          <?php include_once './tags/global_header/footer.php'; ?>
    </body>
</html>
