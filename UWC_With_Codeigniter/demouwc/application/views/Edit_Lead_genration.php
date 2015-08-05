  <?php 
				if(isset($View_Lead_genration) && $View_Lead_genration!="")
                {
	             foreach($View_Lead_genration as $value)
		         { //print_r($value); die();
				 	$ID = $value->ID;		   
		            $Lead_ID = $value->Lead_ID;
					$Lead = $value->Lead;
					$Lead_Short_Name = $value->Lead_Short_Name;
					$Lead_Type = $value->Lead_Type;
					$Lead_Address = $value->Lead_Address;
					$Lead_City = $value->Lead_City;
					$Lead_State = $value->Lead_State;
					$Lead_Pin_Code = $value->Lead_Pin_Code;
					$Lead_Country = $value->Lead_Country;
					$Lead_Landline_Number = $value->Lead_Landline_Number;
					$Lead_Contact_Person = $value->Lead_Contact_Person;
					$Lead_Degingnation = $value->Lead_Degingnation;
					$Lead_Contact_Number = $value->Lead_Contact_Number;
					$Lead_Email_ID = $value->Lead_Email_ID;
					$Lead_Business_Email_ID = $value->Lead_Business_Email_ID;
					$Lead_Called_by = $value->Lead_Called_by;
					$Lead_Called_on = $value->Lead_Called_on;
					$Lead_Visited_by = $value->Lead_Visited_by;
					$Lead_Visited_on = $value->Lead_Visited_on;
					$Lead_Response = $value->Lead_Response;
					$Lead_Next_Follow_up = $value->Lead_Next_Follow_up;
					$Lead_Next_Follow_up_Date = $value->Lead_Next_Follow_up_Date;
					$Lead_Class = $value->Lead_Class;
					$Lead_Area_Manager = $value->Lead_Area_Manager;
					$Lead_Status = $value->Lead_Status;
					$Lead_Reference_Name = $value->Lead_Reference_Name;
					$Lead_Reference_Contact_Number = $value->Lead_Reference_Contact_Number;
			    }
			}?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Edit New Lead Genration</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Edit Lead </h1>
                     <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()."user/home"; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url()."user/Lead_genration_list"; ?>"><i class="fa fa-star"></i>Lead List</a></li>
                        <li class="active"><i class="fa fa-edit"></i>&nbsp;Edit</li>
                    </ol>
                </section>
                
                <!-- Main content -->
                <section class="content">
                <form method="post" name="Form" action="<?php echo base_url()."user/Edit_Lead_genration/".$ID; ?>"  id="Edit_Lead" enctype="multipart/form-data" >
              <div>
                 <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Lead Data</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Lead ID* <span id="Lead_ID_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_ID"   class="form-control" name="Lead_ID" 
                                            placeholder="Enter Lead ID..." value="<?php echo $Lead_ID; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Lead* <span id="Lead_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead"   class="form-control" name="Lead" placeholder="Enter Lead..." value="<?php echo $Lead; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Short Name* <span id="Lead_Short_Name_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Short_Name"   class="form-control" name="Lead_Short_Name" 
                                            placeholder="Enter Sort Name..." value="<?php echo $Lead_Short_Name; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label for="inputName">Lead Type* <span id="Lead_Type_error"  style="color:#F56780"></span></label>
                                            <select class="form-control" name="Lead_Type" autofocus id="Lead_Type">
                                            <option value="">Choose Lead Type</option>
		                                    <option value="Cold_Call" <?php if($Lead_Type=='Cold_Call') echo "selected"; ?>>Cold Call</option>
                                            <option value="Reference" <?php if($Lead_Type=='Reference') echo "selected"; ?>>Reference</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Lead Class* <span id="Lead_Class_error" style="color:#F56780"></span></label>
                                            <select class="form-control" name="Lead_Class" autofocus id="Lead_Class">
                                            <option value="">Choose Lead Class</option>
                                            <option value="School" <?php if($Lead_Class=='School') echo "selected"; ?>>School</option>
                                            <option value="Collage" <?php if($Lead_Class=='Collage') echo "selected"; ?>>Collage</option>
                                            <option value="Company" <?php if($Lead_Class=='Company') echo "selected"; ?>>Company</option>
                                            <option value="Restaurants" <?php if($Lead_Class=='Restaurants') echo "selected"; ?>>Restaurants</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Area Manager* <span id="Lead_Area_Manager_error"  style="color:#F56780"></span></label>
                                            <select class="form-control" name="Lead_Area_Manager" autofocus id="Lead_Area_Manager">
                                            <option value="">Choose Area Manager</option>
                                            <option value="Area_Manager_1" <?php if($Lead_Area_Manager=='Area_Manager_1') echo "selected"; ?>>Area Manager 1</option>
                                            <option value="Area_Manager_2" <?php if($Lead_Area_Manager=='Area_Manager_2') echo "selected"; ?>>Area Manager 2</option>
                                            <option value="Area_Manager_3" <?php if($Lead_Area_Manager=='Area_Manager_3') echo "selected"; ?>>Area Manager 3</option>
                                            <option value="Area_Manager_4" <?php if($Lead_Area_Manager=='Area_Manager_4') echo "selected"; ?>>Area Manager 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Address* <span id="Lead_Address_error"  style="color:#F56780"></span></label>
                                            <textarea class="form-control" autofocus="off" id="Lead_Address" name="Lead_Address" rows="1" placeholder="Enter Address..."><?php echo $Lead_Address; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">City* <span id="Lead_City_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_City"   name="Lead_City" class="form-control" value="<?php echo $Lead_City; ?>" placeholder="Enter City..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">State/Province* <span id="Lead_State_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_State"   name="Lead_State" class="form-control" value="<?php echo $Lead_State; ?>" placeholder="Enter State..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Zip/Pin Code* <span id="Lead_Pin_Code_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Pin_Code"   name="Lead_Pin_Code" class="form-control" value="<?php echo $Lead_Pin_Code; ?>" placeholder="Enter Pin code..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Country* <span id="Lead_Country_error"  style="color:#F56780"></span></label>
                                            <select class="form-control" name="Lead_Country" autofocus="off" id="Lead_Country">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Landline Number* <span id="Lead_Landline_Number_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Landline_Number"   class="form-control" name="Lead_Landline_Number" placeholder="Enter Number..." value="<?php echo $Lead_Landline_Number; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Contact Person* <span id="Lead_Contact_Person_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Contact_Person"   class="form-control" name="Lead_Contact_Person" placeholder="Enter Name..." value="<?php echo $Lead_Contact_Person; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Degingnation* <span id="Lead_Degingnation_error"  style="color:#F56780"></span></label>
                                            <textarea class="form-control" autofocus id="Lead_Degingnation" name="Lead_Degingnation" rows="1" placeholder="Enter Degingnation..."><?php echo $Lead_Degingnation; ?></textarea>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Contact Number* <span id="Lead_Contact_Number_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Contact_Number"   class="form-control" name="Lead_Contact_Number" placeholder="Enter Number..." value="<?php echo $Lead_Contact_Number; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Email ID* <span id="Lead_Email_ID_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Email_ID"   class="form-control" name="Lead_Email_ID" placeholder="Enter Email ID..." value="<?php echo $Lead_Email_ID; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Business Email ID* <span id="Lead_Business_Email_ID_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Business_Email_ID"   class="form-control" name="Lead_Business_Email_ID" placeholder="Enter Business Email ID..." value="<?php echo $Lead_Business_Email_ID; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Called By* <span id="Lead_Called_by_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Called_by"   class="form-control" name="Lead_Called_by" value="<?php echo $Lead_Called_by; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Called on* <span id="Lead_Called_on_error"  style="color:#F56780"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" autocomplete="off"  id="Lead_Called_on"   class="form-control" name="Lead_Called_on" value="<?php echo $Lead_Called_on; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Visited By* <span id="Lead_Visited_by_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Visited_by"   class="form-control" name="Lead_Visited_by" value="<?php echo $Lead_Visited_by; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Visited on* <span id="Lead_Visited_on_error"  style="color:#F56780"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" autocomplete="off"  id="Lead_Visited_on"   class="form-control" name="Lead_Visited_on" value="<?php echo $Lead_Visited_on; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label for="inputName">Response* <span id="Lead_Response_error"  style="color:#F56780"></span></label>
                                            <textarea class="form-control" autofocus id="Lead_Response" name="Lead_Response" rows="1" placeholder="Enter Response..."><?php echo $Lead_Response; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label for="inputName">Next Follow-up* <span id="Lead_Next_Follow_up_error"  style="color:#F56780"></span></label>
                                            <textarea class="form-control" autofocus id="Lead_Next_Follow_up" name="Lead_Next_Follow_up" rows="1" placeholder="Enter Fellow-up..."><?php echo $Lead_Next_Follow_up; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label for="inputName">Next Follow-up Date* <span id="Lead_Next_Follow_up_Date_error"  style="color:#F56780"></span></label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" autocomplete="off" id="Lead_Next_Follow_up_Date" class="form-control" name="Lead_Next_Follow_up_Date" value="<?php echo $Lead_Next_Follow_up_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Key Customer Question Form* <span id="_error"  style="color:#F56780"></span></label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Letter of Intent* <span id="_error"  style="color:#F56780"></span></label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Status* <span id="Lead_Status_error"  style="color:#F56780"></span></label>
                                            <select class="form-control" name="Lead_Status" autofocus id="Lead_Status">
                                            <option value="">Choose Status</option>
                                            <option value="Open" <?php if($Lead_Status=='Open') echo "selected"; ?>>Open</option>
                                            <option value="Contacted" <?php if($Lead_Status=='Contacted') echo "selected"; ?>>Contacted</option>
                                            <option value="Designed" <?php if($Lead_Status=='Designed') echo "selected"; ?>>Designed</option>
                                            <option value="Quotation" <?php if($Lead_Status=='Quotation') echo "selected"; ?>>Quotation</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        

                                    </div>
                                </div><!-- /.box-body -->
                            <hr> 
                             <div class="box-header">
                                    <h3 class="box-title">Reference By</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Name* <span id="Lead_Reference_Name_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Reference_Name"   class="form-control" name="Lead_Reference_Name"  value="<?php echo $Lead_Reference_Name; ?>"  placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="inputName">Contact Number* <span id="Lead_Reference_Contact_Number_error"  style="color:#F56780"></span></label>
                                            <input type="text" autocomplete="off"  id="Lead_Reference_Contact_Number"   class="form-control" name="Lead_Reference_Contact_Number" value="<?php echo $Lead_Reference_Contact_Number; ?>" placeholder="Enter Number..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                           </div>
                           <div class="box box-success">
                           <div class="box-body">
                                    <div class="row">
                                         <!-- /.form group -->
                                    <div class="col-xs-12">
                                       <!-- select -->
                                        <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success" onClick="return validateForm()">Submit</button>
                                    <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                           </div>
                           </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
<script type="text/javascript">

function validateForm()
{
var Lead_ID = document.getElementById("Lead_ID").value;
var Lead = document.getElementById("Lead").value;
var Lead_Short_Name = document.getElementById("Lead_Short_Name").value;
var Lead_Type = document.getElementById("Lead_Type").value;
var Lead_Class = document.getElementById("Lead_Class").value;
var Lead_Area_Manager = document.getElementById("Lead_Area_Manager").value;
var Lead_Address = document.getElementById("Lead_Address").value;
var Lead_City = document.getElementById("Lead_City").value;
var Lead_State = document.getElementById("Lead_State").value;
var Lead_Pin_Code = document.getElementById("Lead_Pin_Code").value;
var Lead_Country = document.getElementById("Lead_Country").value;
var Lead_Landline_Number = document.getElementById("Lead_Landline_Number").value;
var Lead_Contact_Person = document.getElementById("Lead_Contact_Person").value;
var Lead_Degingnation = document.getElementById("Lead_Degingnation").value;
var Lead_Contact_Number = document.getElementById("Lead_Contact_Number").value;
var Lead_Email_ID = document.getElementById("Lead_Email_ID").value;
var Lead_Business_Email_ID = document.getElementById("Lead_Business_Email_ID").value;
var Lead_Called_by = document.getElementById("Lead_Called_by").value;
var Lead_Called_on = document.getElementById("Lead_Called_on").value;
var Lead_Visited_by = document.getElementById("Lead_Visited_by").value;
var Lead_Visited_on = document.getElementById("Lead_Visited_on").value;
var Lead_Response = document.getElementById("Lead_Response").value;
var Lead_Next_Follow_up = document.getElementById("Lead_Next_Follow_up").value;
var Lead_Next_Follow_up_Date = document.getElementById("Lead_Next_Follow_up_Date").value;
var Lead_Status = document.getElementById("Lead_Status").value;
var Lead_Reference_Name = document.getElementById("Lead_Reference_Name").value;
var Lead_Reference_Contact_Number = document.getElementById("Lead_Reference_Contact_Number").value;




if((Lead_ID=="") || (Lead=="") || (Lead_Short_Name=="") || (Lead_Type=="") || (Lead_Class=="") || (Lead_Area_Manager=="") || (Lead_Address=="") || (Lead_City=="") || (Lead_State=="") || (Lead_Pin_Code=="") || (Lead_Country=="") || (Lead_Landline_Number=="") || (Lead_Contact_Person=="") || (Lead_Degingnation=="") || (Lead_Contact_Number=="") || (Lead_Email_ID=="") || (Lead_Business_Email_ID=="") || (Lead_Called_by=="") || (Lead_Called_on=="") || (Lead_Visited_by=="") || (Lead_Visited_on=="") || (Lead_Response=="") || (Lead_Next_Follow_up=="") || (Lead_Next_Follow_up_Date=="") || (Lead_Class=="") || (Lead_Area_Manager=="") || (Lead_Status=="") || (Lead_Reference_Name=="") || (Lead_Reference_Contact_Number==""))
{ 
if(Lead_ID=="")
	 {
	 document.getElementById("Lead_ID_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_ID").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_ID_error").innerHTML="";
		}
if(Lead=="")
	 {
	 document.getElementById("Lead_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_error").innerHTML="";
		}
if(Lead_Short_Name=="")
	 {
	 document.getElementById("Lead_Short_Name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Short_Name").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Short_Name_error").innerHTML="";
		}
if( Form.Lead_Type.selectedIndex==0)
	 {
	  document.getElementById("Lead_Type_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Lead_Type").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Lead_Type_error").innerHTML="";
	 }
if( Form.Lead_Class.selectedIndex==0)
	 {
	  document.getElementById("Lead_Class_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Lead_Class").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Lead_Class_error").innerHTML="";
	 }
if( Form.Lead_Area_Manager.selectedIndex==0)
	 {
	  document.getElementById("Lead_Area_Manager_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Lead_Area_Manager").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Lead_Area_Manager_error").innerHTML="";
	 }
if(Lead_Address=="")
	 {
	 document.getElementById("Lead_Address_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Address").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Address_error").innerHTML="";
		}
if(Lead_City=="")
	 {
	 document.getElementById("Lead_City_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_City").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_City_error").innerHTML="";
		}
if(Lead_State=="")
	 {
	 document.getElementById("Lead_State_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_State").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_State_error").innerHTML="";
		}
if(Lead_Pin_Code=="")
	 {
	 document.getElementById("Lead_Pin_Code_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Pin_Code").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Pin_Code_error").innerHTML="";
		}
if( Form.Lead_Country.selectedIndex==0)
	 {
	  document.getElementById("Lead_Country_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Lead_Country").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Lead_Country_error").innerHTML="";
	 }
if(Lead_Landline_Number=="")
	 {
	 document.getElementById("Lead_Landline_Number_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Landline_Number").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Landline_Number_error").innerHTML="";
		}
if(Lead_Contact_Person=="")
	 {
	 document.getElementById("Lead_Contact_Person_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Contact_Person").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Contact_Person_error").innerHTML="";
		}
if(Lead_Degingnation=="")
	 {
	 document.getElementById("Lead_Degingnation_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Degingnation").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Degingnation_error").innerHTML="";
		}
if(Lead_Contact_Number=="")
	 {
	 document.getElementById("Lead_Contact_Number_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Contact_Number").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Contact_Number_error").innerHTML="";
		}
if(Lead_Email_ID=="")
	 {
	 document.getElementById("Lead_Email_ID_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Email_ID").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Email_ID_error").innerHTML="";
		}
if(Lead_Business_Email_ID=="")
	 {
	 document.getElementById("Lead_Business_Email_ID_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Business_Email_ID").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Business_Email_ID_error").innerHTML="";
		}
if(Lead_Called_by=="")
	 {
	 document.getElementById("Lead_Called_by_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Called_by").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Called_by_error").innerHTML="";
		}
if(Lead_Called_on=="")
	 {
	 document.getElementById("Lead_Called_on_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Called_on").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Called_on_error").innerHTML="";
		}
if(Lead_Visited_by=="")
	 {
	 document.getElementById("Lead_Visited_by_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Visited_by").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Visited_by_error").innerHTML="";
		}
if(Lead_Visited_on=="")
	 {
	 document.getElementById("Lead_Visited_on_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Visited_on").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Visited_on_error").innerHTML="";
		}
if(Lead_Response=="")
	 {
	 document.getElementById("Lead_Response_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Response").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Response_error").innerHTML="";
		}
if(Lead_Next_Follow_up=="")
	 {
	 document.getElementById("Lead_Next_Follow_up_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Next_Follow_up").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Next_Follow_up_error").innerHTML="";
		}
if(Lead_Next_Follow_up_Date=="")
	 {
	 document.getElementById("Lead_Next_Follow_up_Date_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Next_Follow_up_Date").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Next_Follow_up_Date_error").innerHTML="";
		}
if( Form.Lead_Status.selectedIndex==0)
	 {
	  document.getElementById("Lead_Status_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	  document.getElementById("Lead_Status").focus();
	  return false;

	 }
	 else
	 {
	     document.getElementById("Lead_Status_error").innerHTML="";
	 }
if(Lead_Reference_Name=="")
	 {
	 document.getElementById("Lead_Reference_Name_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Reference_Name").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Reference_Name_error").innerHTML="";
		}
if(Lead_Reference_Contact_Number=="")
	 {
	 document.getElementById("Lead_Reference_Contact_Number_error").innerHTML=" Bitte füllen Sie dieses Pflichtfeld aus.";
	 document.getElementById("Lead_Reference_Contact_Number").focus();
	 return false;
	 }
	 else
		{
	    document.getElementById("Lead_Reference_Contact_Number_error").innerHTML="";
		}
return false;
}
else
{
console.log("true");
//location.href="mailto:"+MA_email+"?subject=hello&body=hiiiiiiiii how r u...";	
return true;
}
}

function _(el){
	return document.getElementById(el);
}	
</script>
