<?php

if ( ! defined('EXT')) exit('Invalid file request');

class Reegion_select_ff extends Fieldframe_Fieldtype {

    var $info = array(
        'name'             => 'REEgion Select',
        'version'          => '1.0.2',
        'desc'             => 'Provides dropdown lists of countries, U.S. states, Canadian provinces, and UK counties.',
        'docs_url'         => 'http://github.com/amphibian/reegion_select.ff_fieldtype/',
        'versions_xml_url' => 'http://amphibian.info/ee-addons/versions.xml',
        'no_lang'  			=> TRUE
    );

	var $default_field_settings = array(
		'type' => 'countries',
		'value' => 'name'
	);

	var $default_cell_settings = array(
		'type' => 'countries',
		'value' => 'name'
	);
	
	var $types = array(
		'countries' => 'Countries',
		'states' => 'U.S. States',
		'provinces' => 'Canadian Provinces',
		'provinces_states' => 'Canadian Provinces &amp; U.S. States',
		'ukcounties' => 'UK Counties'
	);
	
	var $values = array(
		'name' => 'Region Name',
		'code' => 'ISO 3166-2 Code'
	);
	
	var $provinces = array("AB" => "Alberta", "BC" => "British Columbia", "MB" => "Manitoba", "NB" => "New Brunswick", "NL" => "Newfoundland and Labrador", "NT" => "Northwest Territories", "NS" => "Nova Scotia", "NU" => "Nunavut", "ON" => "Ontario", "PE" => "Prince Edward Island", "QC" => "Quebec", "SK" => "Saskatchewan", "YT" => "Yukon");
		
	var $states = array("AL" => "Alabama", "AK" => "Alaska", "AS" => "American Samoa", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California", "CO" => "Colorado", "CT" => "Connecticut", "DE" => "Delaware", "DC" => "Distric of Columbia", "FM" => "Federated States of Micronesia", "FL" => "Florida", "GA" => "Georgia", "GU" => "Guam", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" => "Iowa", "KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana", "ME" => "Maine", "MH" => "Marshall Islands", "MD" => "Maryland", "MA" => "Massachusetts", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NC" => "North Carolina", "ND" => "North Dakota", "MP" => "Northern Mariana Islands", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire", "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PW" => "Palau", "PA" => "Pennsylvania", "PR" => "Puerto Rico", "RI" => "Rhode Island", "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX" => "Texas", "UT" => "Utah", "VT" => "Vermont", "VI" => "Virgin Islands", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming", "AE" => "Armed Forces (AE)", "AA" => "Armed Forces Americas", "AP" => "Armed Forces Pacific");
		
	var $ukcounties = array("Aberdeenshire", "Anglesey", "Angus", "Antrim", "Argyll", "Armagh", "Avon", "Ayrshire", "Banffshire", "Bedfordshire", "Berkshire", "Berwickshire", "Brecknockshire", "Buckinghamshire", "Bute", "Caernarfonshire", "Caithness", "Cambridgeshire", "Cambridgeshire and Isle of Ely", "Cardiganshire", "Carmarthenshire", "Cheshire", "Clackmannanshire", "Cleveland", "Clwyd", "Cornwall", "Cromartyshire", "Cumberland", "Cumbria", "Denbighshire", "Derbyshire", "Devon", "Dorset", "Down", "Dumfriesshire", "Dunbartonshire", "Durham", "Dyfed", "East Lothian", "East Sussex", "East Suffolk", "East Yorkshire", "Essex", "Fermanagh", "Fife", "Flintshire", "Glamorgan", "Gloucestershire", "Gwent", "Gwynedd", "Hampshire", "Hereford and Worcester", "Herefordshire", "Hertfordshire", "Humberside", "Huntingdonshire", "Huntingdon and Peterborough", "Inverness-shire", "Isle of Ely", "Isle of Wight", "Kent", "Kincardineshire", "Kinross-shire", "Kirkcudbrightshire", "Lanarkshire", "Lancashire", "Leicestershire", "Lincolnshire", "London (Greater)", "Londonderry", "Manchester (Greater)", "Merionethshire", "Merseyside", "Middlesex", "Mid Glamorgan", "Midlothian", "Monmouthshire", "Montgomeryshire", "Moray", "Nairnshire", "Norfolk", "Northamptonshire", "Northumberland", "North Lincolnshire", "North East Lincolnshire", "North Humberside", "North Yorkshire", "Nottinghamshire", "Orkney", "Oxfordshire", "Pembrokeshire", "Peeblesshire", "Perthshire", "Powys", "Radnorshire", "Renfrewshire", "Ross-shire", "Ross and Cromarty", "Roxburghshire", "Rutland", "Selkirkshire", "Shetland", "Shropshire", "Soke of Peterborough", "Somerset", "South Glamorgan", "South Humberside", "South Yorkshire", "Staffordshire", "Stirlingshire", "Suffolk", "Surrey", "Sutherland", "Tyne and Wear", "Tyrone", "Warwickshire", "West Glamorgan", "West Lothian", "West Midlands", "West Suffolk", "West Sussex", "West Yorkshire", "Westmorland", "Wigtownshire", "Wiltshire", "Worcestershire");
	
	var $countries = array("US" => "United States", "CA" => "Canada", "AF" => "Afghanistan", "AX" => "Aland Islands", "AL" => "Albania", "DZ" => "Algeria", "AS" => "American Samoa", "AD" => "Andorra", "AO" => "Angola", "AI" => "Anguilla", "AQ" => "Antarctica", "AG" => "Antigua and Barbuda", "AR" => "Argentina", "AM" => "Armenia", "AW" => "Aruba", "AU" => "Australia", "AT" => "Austria", "AZ" => "Azerbaijan", "BS" => "Bahamas", "BH" => "Bahrain", "BD" => "Bangladesh", "BB" => "Barbados", "BY" => "Belarus", "BE" => "Belgium", "BZ" => "Belize", "BJ" => "Benin", "BM" => "Bermuda", "BT" => "Bhutan", "BO" => "Bolivia", "BA" => "Bosnia and Herzegovina", "BW" => "Botswana", "BV" => "Bouvet Island", "BR" => "Brazil", "IO" => "British Indian Ocean Territory", "BN" => "Brunei Darussalam", "BG" => "Bulgaria", "BF" => "Burkina Faso", "BI" => "Burundi", "KH" => "Cambodia", "CM" => "Cameroon", "CV" => "Cape Verde", "KY" => "Cayman Islands", "CF" => "Central African Republic", "TD" => "Chad", "CL" => "Chile", "CN" => "China", "CX" => "Christmas Island", "CC" => "Cocos (Keeling) Islands", "CO" => "Colombia", "KM" => "Comoros", "CG" => "Congo", "CD" => "Congo (DR)", "CK" => "Cook Islands", "CR" => "Costa Rica", "CI" => "Cote D'Ivoire", "HR" => "Croatia", "CU" => "Cuba", "CY" => "Cyprus", "CZ" => "Czech Republic", "DK" => "Denmark", "DJ" => "Djibouti", "DM" => "Dominica", "DO" => "Dominican Republic", "EC" => "Ecuador", "EG" => "Egypt", "SV" => "El Salvador", "GQ" => "Equatorial Guinea", "ER" => "Eritrea", "EE" => "Estonia", "ET" => "Ethiopia", "FK" => "Falkland Islands (Malvinas)", "FO" => "Faroe Islands", "FJ" => "Fiji", "FI" => "Finland", "FR" => "France", "GF" => "French Guiana", "PF" => "French Polynesia", "TF" => "French Southern Territories", "GA" => "Gabon", "GM" => "Gambia", "GE" => "Georgia", "DE" => "Germany", "GH" => "Ghana", "GI" => "Gibraltar", "GR" => "Greece", "GL" => "Greenland", "GD" => "Grenada", "GP" => "Guadeloupe", "GU" => "Guam", "GT" => "Guatemala", "GG" => "Guernsey", "GN" => "Guinea", "GW" => "Guinea-Bissau", "GY" => "Guyana", "HT" => "Haiti", "HM" => "Heard and McDonald Islands", "VA" => "Holy See (Vatican City State)", "HN" => "Honduras", "HK" => "Hong Kong", "HU" => "Hungary", "IS" => "Iceland", "IN" => "India", "ID" => "Indonesia", "IR" => "Iran", "IQ" => "Iraq", "IE" => "Ireland", "IM" => "Isle of Man", "IL" => "Israel", "IT" => "Italy", "JM" => "Jamaica", "JP" => "Japan", "JE" => "Jersey", "JO" => "Jordan", "KZ" => "Kazakhstan", "KE" => "Kenya", "KI" => "Kiribati", "KP" => "Korea (North)", "KR" => "Korea (South)", "KW" => "Kuwait", "KG" => "Kyrgyzstan", "LA" => "Laos", "LV" => "Latvia", "LB" => "Lebanon", "LS" => "Lesotho", "LR" => "Liberia", "LY" => "Libya", "LI" => "Liechtenstein", "LT" => "Lithuania", "LU" => "Luxembourg", "MO" => "Macau", "MK" => "Macedonia", "MG" => "Madagascar", "MW" => "Malawi", "MY" => "Malaysia", "MV" => "Maldives", "ML" => "Mali", "MT" => "Malta", "MH" => "Marshall Islands", "MQ" => "Martinique", "MR" => "Mauritania", "MU" => "Mauritius", "YT" => "Mayotte", "MX" => "Mexico", "FM" => "Micronesia", "MD" => "Moldova", "MC" => "Monaco", "MN" => "Mongolia", "ME" => "Montenegro", "MS" => "Montserrat", "MA" => "Morocco", "MZ" => "Mozambique", "MM" => "Myanmar", "NA" => "Namibia", "NR" => "Nauru", "NP" => "Nepal", "NL" => "Netherlands", "AN" => "Netherlands Antilles", "NC" => "New Caledonia", "NZ" => "New Zealand", "NI" => "Nicaragua", "NE" => "Niger", "NG" => "Nigeria", "NU" => "Niue", "NF" => "Norfolk Island", "MP" => "Northern Mariana Islands", "NO" => "Norway", "OM" => "Oman", "PK" => "Pakistan", "PW" => "Palau", "PS" => "Palestinian Territory (Occupied)", "PA" => "Panama", "PG" => "Papua New Guinea", "PY" => "Paraguay", "PE" => "Peru", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PT" => "Portugal", "PR" => "Puerto Rico", "QA" => "Qatar", "RE" => "Reunion", "RO" => "Romania", "RU" => "Russian Federation", "RW" => "Rwanda", "BL" => "Saint Barthelemy", "SH" => "Saint Helena", "KN" => "Saint Kitts and Nevis", "LC" => "Saint Lucia", "MF" => "Saint Martin (French)", "PM" => "Saint Pierre and Miquelon", "VC" => "Saint Vincent and the Grenadines", "WS" => "Samoa", "SM" => "San Marino", "ST" => "Sao Tome and Principe", "SA" => "Saudi Arabia", "SN" => "Senegal", "RS" => "Serbia", "SC" => "Seychelles", "SL" => "Sierra Leone", "SG" => "Singapore", "SK" => "Slovakia", "SI" => "Slovenia", "SB" => "Solomon Islands", "SO" => "Somalia", "ZA" => "South Africa", "GS" => "South Georgia and South Sandwich Islands", "ES" => "Spain", "LK" => "Sri Lanka", "SD" => "Sudan", "SR" => "Suriname", "SJ" => "Svalbard and Jan Mayen", "SZ" => "Swaziland", "SE" => "Sweden", "CH" => "Switzerland", "SY" => "Syria", "TW" => "Taiwan", "TJ" => "Tajikistan", "TZ" => "Tanzania", "TH" => "Thailand", "TL" => "Timor-Leste", "TG" => "Togo", "TK" => "Tokelau", "TO" => "Tonga", "TT" => "Trinidad and Tobago", "TN" => "Tunisia", "TR" => "Turkey", "TM" => "Turkmenistan", "TC" => "Turks and Caicos Islands", "TV" => "Tuvalu", "UG" => "Uganda", "UA" => "Ukraine", "AE" => "United Arab Emirates", "UK" => "United Kingdom", "UM" => "United States Minor Outlying Islands", "UY" => "Uruguay", "UZ" => "Uzbekistan", "VU" => "Vanuatu", "VE" => "Venezuela", "VN" => "Vietnam", "VG" => "Virgin Islands (British)", "VI" => "Virgin Islands (US)", "WF" => "Wallis and Futuna", "EH" => "Western Sahara", "YE" => "Yemen", "ZM" => "Zambia", "ZW" => "Zimbabwe");	


	/**
	 * Display Field Settings
	 * 
	 * @param  array  $field_settings  The field's settings
	 * @return array  Settings HTML (cell1, cell2, rows)
	 */
	function display_field_settings($field_settings)
	{
		
		$SD = new Fieldframe_SettingsDisplay();
		
		$cell2 = '<div style="margin-bottom: 10px;">';
		$cell2 .= $SD->label('Region type');
		$cell2 .= $SD->select('type', $field_settings['type'], $this->types);
		$cell2 .= '</div>';

		$cell2 .= '<div style="margin-bottom: 10px;">';
		$cell2 .= $SD->label('Value to display', 'Choose from ISO 3166-2 codes or the region&rsquo;s name.');
		$cell2 .= $SD->select('value', $field_settings['value'], $this->values);	
		$cell2 .= '</div>';

		return array('cell2' => $cell2);
	}

	/**
	 * Display Cell Settings
	 * 
	 * @param  array  $cell_settings  The cell's settings
	 * @return string  Settings HTML
	 */
	function display_cell_settings($cell_settings)
	{
		$SD = new Fieldframe_SettingsDisplay();
		
		$settings = '<div style="margin-bottom: 10px;">';
		$settings .= $SD->label('Region type');
		$settings .= $SD->select('type', $cell_settings['type'], $this->types);
		$settings .= '</div>';

		$settings .= '<div style="margin-bottom: 10px;">';
		$settings .= $SD->label('Value to display');
		$settings .= $SD->select('value', $cell_settings['value'], $this->values);	
		$settings .= '</div>';
		
		return $settings;
	}

	/**
	 * Display Field
	 * 
	 * @param  string  $field_name      The field's name
	 * @param  mixed   $field_data      The field's current value
	 * @param  array   $field_settings  The field's settings
	 * @return string  The field's HTML
	 */
	function display_field($field_name, $field_data, $field_settings)
	{
		global $DSP;
		
		$r = $DSP->input_select_header($field_name);
		$r .= $DSP->input_select_option('', '');

		$list = ( $field_settings['type'] == 'provinces_states' ) ? array_merge($this->provinces, $this->states) : $this->$field_settings['type'];
			
		foreach ($list as $code => $label) {
			$value = ( $field_settings['value'] == 'code' && !is_numeric($code) ) ? $code : $label;
			$selected = ($field_data == $value) ? 1 : 0;
			$r .= $DSP->input_select_option($value, $label, $selected);
		}
		$r .= $DSP->input_select_footer();
		
		return $r;
	}

	/**
	 * Display Cell
	 * 
	 * @param  string  $cell_name      The cell's name
	 * @param  mixed   $cell_data      The cell's current value
	 * @param  array   $cell_settings  The cell's settings
	 * @return string  The cell's HTML
	 */
	function display_cell($cell_name, $cell_data, $cell_settings)
	{
		return $this->display_field($cell_name, $cell_data, $cell_settings);
	}
	
	/**
	 * Swap Label/Value
	 *
	 * Addition courtesy of Tim Kelty
	 *
	 * @param  array   $params          Name/value pairs from the opening tag
	 * @param  string  $tagdata         Chunk of tagdata between field tag pairs
	 * @param  string  $field_data      Currently saved field value
	 * @param  array   $field_settings  The field's settings
	 * @return string  
	 */
	function swap($params, $tagdata, $field_data, $field_settings)
	{
		$list = $this->$field_settings['type'];
		
		if($field_settings['value'] == 'name')
		{
			$list = array_flip($list);
		}
		
		return $list[$field_data];
	}
	
 

}