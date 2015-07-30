<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWC | Add New Lead Genration</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php include("include/css.php"); ?>    
    </head>
    <body class="skin-blue">
    <?php include("include/header.php"); ?>
    <?php include("include/sidebar.php"); 
	
	if(isset($_GET['edit'])) {
	$lead = "ABCDEF";
	$Sort_Name = "SSISM01121";
	$lead_id = "LD1155";
	$leadtype = "Cold_Call";
	$Landline_Number = "0111 1111111";
	$contactperson = "Navin Vishnoi";
	$Degingnation = "ABCDEFGHIJKLMNOP";
	$contactno = "9826404529";
	$address = "ABCDEFGHIJKLMNOPQRSTU";
	$City = "Khategaon";
	$State = "MP";
	$Pin_code = "455336";
	$email = "navinvishnoi@ssism.org";
	$Business_Email_ID = "SSISM@SSISM.ORG";
	
	$Visit_By = "XYZZ";
	$Visit_Date = "23/12/2011";
	$Response = "ABCDEFGHIJK";
	$Further_Follow_up = "ABCDEFGHIJKLMNOPQRSTU";
	$Follow_up_Date = "23/12/2014";
	$Lead_Status = "Open";
	$Lead_Class = "School";
	$Area_Manager = "Area_Manager_1";
	$Call_By = "Rahul";
	$Call_Date = "15/11/2012";
	$Reference_Name = "Ankit Jain";
	$Reference_Contact_Number = "9999999999";
	$Edit = "<i class='fa fa-edit'></i>&nbsp;Edit";
	}else
	{
	$Edit = "<i class='fa fa-plus'></i>&nbsp;New";
	$lead = '';
	$Sort_Name = '';
	$lead_id = '';
	$leadtype = '';
	$contactperson = '';
	$Degingnation ='';
	$Landline_Number = '';
	$contactno = '';
	$address = '';
	$City = '';
	$State = '';
	$Pin_code = '';
	$email = '';
	$Business_Email_ID = '';
	
	$Visit_By = '';
	$Visit_Date = '';
	$Response = '';
	$Further_Follow_up = '';
	$Follow_up_Date = '';
	$Lead_Status = '';
	$Lead_Class = '';
	$Area_Manager = '';
	$Call_By = '';
	$Call_Date = '';
	$Reference_Name = '';
	$Reference_Contact_Number = '';
	}
	 ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?php echo $Edit; ?> Lead </h1>
                     <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="Lead_genration_list.php"><i class="fa fa-star"></i>Lead List</a></li>
                        <li class="active"><i class="fa fa-plus"></i>&nbsp;New</li>
                    </ol>
                </section>
                
                <!-- Main content -->
                <section class="content">
                <div class="col-lg-12">
                 <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Lead Data</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Lead ID..." value="<?php echo $lead_id; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead</label>
                                            <input type="text" class="form-control" placeholder="Enter Lead..." value="<?php echo $lead; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Short Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Sort Name..." value="<?php echo $Sort_Name; ?>" />
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                       <!-- select -->
                                        <div class="form-group">
                                            <label>Lead Type</label>
                                            <select class="form-control">
                                            <option value="">Choose Lead Type</option>
		                                    <option value="Cold_Call" <?php if($leadtype=='Cold_Call') echo "selected"; ?>>Cold Call</option>
                                            <option value="Reference" <?php if($leadtype=='Reference') echo "selected"; ?>>Reference</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Address..."><?php echo $address; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="City" class="form-control" value="<?php echo $City; ?>" placeholder="Enter City..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>State/Province</label>
                                            <input type="text" name="State" class="form-control" value="<?php echo $State; ?>" placeholder="Enter State..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Zip/Pin code</label>
                                            <input type="text" name="Pin_code" class="form-control" value="<?php echo $Pin_code; ?>" placeholder="Enter Pin code..." />
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
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
                                            <option value="IN" selected>India</option>
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
                                            <label>Landline Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number..." value="<?php echo $Landline_Number; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Enter Name..." value="<?php echo $contactperson; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Degingnation</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Degingnation..."><?php echo $Degingnation; ?></textarea>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number..." value="<?php echo $contactno; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Email ID..." value="<?php echo $email; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Business Email ID</label>
                                            <input type="text" class="form-control" placeholder="Enter Business Email ID..." value="<?php echo $Business_Email_ID; ?>"/>
                                        </div><!-- /.input group -->
                                        </div>
                                         <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Called By</label>
                                            <input type="text" class="form-control" value="<?php echo $Call_By; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Called on</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" class="form-control" value="<?php echo $Call_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Visited By</label>
                                            <input type="text" class="form-control" value="<?php echo $Visit_By; ?>" placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Visited on</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            <input type="text" class="form-control" value="<?php echo $Visit_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Response</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Response..."><?php echo $Response; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Next Follow-up</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter Fellow-up..."><?php echo $Further_Follow_up; ?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>Next Follow-up Date</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $Follow_up_Date; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label >Key Customer Question Form</label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Letter of Intent</label>
                                            <a href="#" ><i class="fa fa-2x fa-file col-xs-offset-2"></i></a>
                                        </div>
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Lead Class</label>
                                            <select class="form-control">
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
                                            <label>Area Manager</label>
                                            <select class="form-control">
                                            <option value="">Choose Area Manager</option>
                                            <option value="Area_Manager_1" <?php if($Area_Manager=='Area_Manager_1') echo "selected"; ?>>Area Manager 1</option>
                                            <option value="Area_Manager_2" <?php if($Area_Manager=='Area_Manager_2') echo "selected"; ?>>Area Manager 2</option>
                                            <option value="Area_Manager_3" <?php if($Area_Manager=='Area_Manager_3') echo "selected"; ?>>Area Manager 3</option>
                                            <option value="Area_Manager_4" <?php if($Area_Manager=='Area_Manager_4') echo "selected"; ?>>Area Manager 4</option>
                                            </select>
                                        </div><!-- /.input group -->
                                        </div>
                                        <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
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
                                            <label>Name</label>
                                            <input type="text" class="form-control"  value="<?php echo $Reference_Name; ?>"  placeholder="Enter Name..." />
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" value="<?php echo $Reference_Contact_Number; ?>" placeholder="Enter Number..." />
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
                                    <a href="Lead_genration_list.php"><button type="submit" class="btn btn-success">Submit</button></a>
                                    <a href="#"><button type="submit" class="btn btn-danger">Cancel</button></a>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                                </div>
                           </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <?php include("include/js.php"); ?>    
    </body>
</html>
