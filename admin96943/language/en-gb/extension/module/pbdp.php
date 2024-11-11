<?php
// Heading
$_['heading_title_area']          = 'Area List';
$_['heading_title_areaimport']    = 'Import Area\'s Through Sheet';
$_['heading_title_city']          = 'City List';
$_['heading_title_productlocation']  = 'Assign City To Products Instantly';
$_['text_tip3']					  = "Manage your areas from this page. Areas are smaller then city. Lot of areas would make one city. Area can be assigned to city from here";
$_['text_tip4']					  = "As areas are huge in number you can import all instantly from this page. Quickly import using exported reference sheet format. You can read the steps as well on right side";
$_['entry_area_name']             = 'Area Name';
$_['entry_pingroup']              = 'City List';
$_['help_pingroup']               = 'Enter the city name where this area belongs';
$_['date_added']                  = 'Date Added';
$_['text_payments']               = 'Payment Gateways';
$_['text_shippings']              = 'Shipping Methods';
$_['entry_status']                = 'Status';
$_['zip_code']                    = 'Postal Code';
$_['text_form']          	      = 'Form details';
$_['text_message']                = 'Message';
$_['number_of_areas']			  = 'No of area(s) assigned: %s';
$_['column_action']               = 'Action';
$_['error_pingroup_exist']        = 'Please enter valid city name';

$_['error_pin_empty']          = 'Postal code field cannot be left empty';
$_['text_list']          	   = 'Small areas  list page';
$_['text_edit']          	   = 'Edit details';
$_['button_insert']            = 'Insert';

$_['error_permission']         = 'You do not have permission to modify this data';

$_['text_tip1']					 = "Manage your cities from this page. Cities should be like metro cities, group of smaller areas, group of remote areas, etc";
// Text
$_['text_list']        = 'City Name';
$_['text_add']         = 'Add New';
$_['text_edit']        = 'Edit';
$_['text_default']     = 'Default';

// Column
$_['column_name']      = 'City Name';
$_['column_zone']      = 'Zone Name';
$_['column_numberofareas'] = "Number of areas";
$_['column_action']    = 'Action';

// Entry
$_['entry_name']       = 'City Name';
$_['entry_geocode']    = 'Geocode';
$_['entry_zone']       = 'Zone';
$_['entry_country']    = 'Country';
$_['entry_image']      = 'Image';
$_['entry_comment']    = 'Description';

// Help
$_['help_geocode']     = 'Please enter your city geocode manually.';
$_['help_comment']     = 'This field is for extra information about city. It may be helpful to display small information about city in store front.';

// Error
$_['error_name']       = 'City name must be at least 1 character!';
$_['button_help']          	 = 'Help';

$_['text_unselect_all']     = "UnSelect All";
$_['text_select_all']       = "Select All";

$_['text_category'] 	     = "Select Categories";

$_['text_clear']             = 'Clear Image';
$_['show_productlocation'] 	 = '1) It is easy to assign city and shipping charge to multiple products  instantly.<br>
								2) Select the categry you want to assign to city. All products within category are assigned automatically.<br>
								3) Select the city and shipping charge.<br>
								4) If you want to remove previous assignment you can select that field as well.<br>
								5) Click <b>Assign Products To City</b> to assign to quickly.';
// import
$_['import_product_ids']            = 'Assign';
$_['help_import_product_ids']       = 'Instantly assign products to city and shipping charge with this tool';

$_['entry_pingroup']			= "Select city / shipping charges";
$_['entry_olddetails']			= "Delete previously assigned city to product";
$_['entry_choosefile']			= "Choose File";

// tab

$_['tab_importexport']	     = 'Import/Export';
$_['tab_delete']			 = 'Delete All';
$_['exportc']				 = "Export current areas";
$_['importc']				 = "Import through sheet";

// Error
$_['error_upload']           = 'The Uploaded file is incorrect. Please Export the csv file and use it';

$_['text_success_towns']            = 'Success: You have imported all postal codes!';
$_['delete_success_towns']          = 'Success: You have deleted all postal codes!';
$_['text_success_discount']           = 'Success: You have imported all Discounts!';
$_['delete_success_discount']         = 'Success: You have deleted all Discounts!';
$_['text_clear']             = 'Clear Image';
$_['text_assign']                = 'Assign Products To City';
$_['samefiletype']			 = "You must import the same file format as present in Exported reference sheet.";

$_['text_tip2']			     = "This page is for bulk assigning of products to city. When you assign products to city, all areas within city are assigned to product.";
$_['text_tip2a']		     = "You can also assign single product to city or area or few areas directly through admin - catalog - product - edit - links tab - select city / area.";
$_['show'] 				     = '1) It is easy to import area\'s.<br>
								2) Click Export Reference Sheet to download the CSV file format.<br>
								3) Add your details in that csv template.<br>
								4) Now click "Import through sheet" button.<br>
								5) There is option to select payment method, shipping method and city.<br>
								6) If selected it would be applied to all zip codes that you are going to upload via sheet.<br>
								7) You can now import the template using the import button.';
// import
$_['importtowns']            = 'Import Areas';
$_['help_importtowns']       = 'This will import all the postal codes from excel sheet to database.';
$_['text_exportreference']	 = "Export Reference Sheet";
$_['exporttowns']            = 'Export Current Areas';
$_['help_exporttowns']       = 'This will export pincode in csv file which you can import.';
$_['deletetowns']            = 'Delete All';
$_['help_deletetowns']       = 'This button will delete all postal codes';

$_['entry_pingroup']			= "Select city name / charges";
$_['entry_cityname']			= "Enter city name to select";
$_['dc']			 		   = 'Delete all areas';


// Error
$_['error_warning']          = 'Warning: Please check the form carefully for errors!';
$_['error_upload']           = 'The Uploaded file is incorrect. Please Export the csv file and use it';

$_['heading_title_settings']          = 'Settings';

$_['button_save']      = 'Save';
$_['button_cancel']     = 'Cancel';
$_['text_enabled'] 		= 'Enabled';
$_['text_disabled']   = 'Disabled';
$_['text_success']     = 'Successfully Saved';
$_['text_payment'] = 'Payment Based On Shipping Postcode';
$_['text_shippingmethod'] = 'Shipping Based On Shipping Postcode';
$_['help_shippingmethods'] = 'If you want to show shipping methods when postcode is not found in list';
$_['text_defaultcity'] = 'Select default city';
$_['help_defaultcity'] = 'Select default city for the major city dropdown';
$_['text_paymentmethods'] = 'Payment When Postcode Not found';
$_['help_paymentmethods'] = 'If you want to show payment methods when postcode is not found in list';
$_['text_list'] = 'Fill in the form below';
$_['text_popup'] = 'Location Popup On First Visit';
$_['help_popup'] = 'If enabled, first time visitors will always see location popup after page load';
$_['text_onlypincode'] = 'Show only pincode input in front';
$_['help_onlypincode'] = 'If enabled, only pincode input will be shown in front end and no major city';
$_['text_displayshippingmethod'] = 'Display Available Shipping Method';
$_['help_displayshippingmethod'] = 'If enabled, shipping method would be displayed on the product page';

$_['text_zerocityselection'] = 'Product Availability With Zero City Selection';
$_['help_zerocityselection'] = 'If you don\'t select any city for a product, the product would be considered delivered everywhere. No settings would apply for this product. ';

$_['text_disableinput'] = 'Disable fields if autofilled';
$_['help_disableinput'] = 'If enabled, fields like postcode / city will be disabled on address page if they were autofilled by the extension';

$_['text_productpage'] = 'Product page pincode search box';
$_['text_tip3']					  = "Manage your areas from this page. Areas are smaller then city. Lot of areas would make one city. Area can be assigned to city from here";
$_['text_tip5']					  = "You can control your module settings from this page.";
$_['text_addtocartdisable'] = 'Add to cart disable';
$_['help_addtocartdisable'] = 'If delivery is not available disable add to cart';

$_['text_registercheck'] = 'Check Pincode On Registeration';
$_['help_registercheck'] = 'If enabled, customer cannot create account when pincode is not available in the pincode list';


$_['text_displayarea'] = 'Display Area / Postcode On Top Button';
$_['help_displayarea'] = 'You can choose what you want to display on top button';

$_['text_autocomplete'] = 'Display dropdown on postcode / areaname search';
$_['help_autocomplete'] = 'If enabled, dropdown shall be activated on typing of postcode / area name in the input box';

$_['text_ukpincodesearch'] = 'Uk (United Kingdom) Pincode Checking';
$_['help_ukpincodesearch'] = 'If enabled, we use our special algorithm to check UK pincode. You only need to add starting 2 or 3 characters in the Area list section.';

$_['text_checkoutblock'] = 'Restrict Checkout For No Delivery';
$_['help_checkoutblock'] = 'If enabled, customers cannot checkout if product is not available for delivery at their location';

$_['text_removespace'] = 'Remove Space While Checking';
$_['help_removespace'] = 'For Uk pincodes, it can be useful. As customer can enter with or without space';

$_['text_checkfirstncharacters'] = 'Check First N Characters Only';
$_['help_checkfirstncharacters'] = 'You can enter the number. Ex 3, 4. So it will only check first N characters';

$_['productpage_input'] = 'Input Search For Pincode';
$_['productpage_popup'] = 'Popup Search For Pincode';

$_['text_strictlocation'] = 'Strict Location Check';
$_['help_strictlocation'] = 'If enabled, customer cannot see any products without entering their location details.';
$_['text_shippingprice'] = 'Show Shipping Charge On Product Page';
$_['help_shippingprice'] = 'If enabled, shipping charge will be be shown on product pages';
$_['text_showcod'] = 'Show COD Availability';
$_['help_showcod'] = 'If enabled, customer can check if COD is available or not on product page';
$_['text_showlinkheader'] = 'Add Location Button On Header';
$_['help_showlinkheader'] = 'If enabled, show location button will be shown in header for default theme';
$_['text_theme']  = 'Background Color';
$_['text_font']  = 'Text Color';
$_['help_theme']  = 'Select Background Color For Popup Location Box';
$_['text_popup_headercolor']  = 'Popup Header Color';
$_['help_font']  = 'Select Text Color For Popup Location Box';
$_['help_payment'] = 'Customer are only shown Payment gateways that are available for their Postal code.';
$_['help_shippingmethod'] = 'Customer are only shown Shipping methods that are available for their Postal code.';
// Entry

$_['text_color_settings'] =  "Color Settings";
$_['text_popup_settings'] =  "Popup Settings";
$_['text_productpage_settings'] =  "Product Page Settings";
$_['text_checkout_settings'] =  "Checkout Page Settings";
$_['text_other_settings'] =  "Extras";

//menu control

$_['text_pin']              = 'Products Delivery';
$_['text_pinlist']        = 'Area List';
$_['text_pinsetting']    = 'Settings';
$_['text_pinimport']    = 'Import Areas';
$_['text_majorcities']    = 'City List';
$_['text_producttocity']    = 'Product to city';

$_['text_howitworks']	= "How it works?";
$_['text_howitworks_content']	= "1) The extension is about providing products and delivery charges based on customer's location.<br>
2) Location are divided into 2 parts : Cities and Areas.<br>
3) Cities are considered to be bigger then Area. Lot of area's (pincode) would make one city.<br>
4) You can create different cities from city list page.<br>
5) Areas are smaller in size and each has their own pincode. It is possible that many areas have same pincode. We support that.<br>
6) You can use area import tool to import areas quickly and assign in to city during import itself.<br>
7) So once you have created cities and areas. You can then assign cities to products.<br> 
8) Also you can add different shipping charges for different city for products.<br>
8) For this go to Product to city page and check help guide to know how to assign.<br>
9) You can aslo assign product to just single area or group of areas which are not a part of city.<br>
10) This can be done directly from product edit page - link tab - Add pincode.<br>
11) The process to do above is very quick because of our effective import tool and quick product location assignment tool.<br>
12) So you can start selling products based on location in front end easily and quickly.";


        $_['regerror_email'] = 'Email Address Error';
$_['regerror_orderid']  = 'Order ID Error';
$_['regerror_noreferer']  = 'Please Contact Support';
$_['regerror_localhost']  = 'This extension can not be used on a localhost server!';
$_['regerror_licensedupe']  = 'This extension is already licensed to a different domain!';
$_['regerror_quote_msg'] = '<p>Please quote the error message below when contacting support.</p>';

$_['license_purchase_thanks'] = '<p>Thanks for purchasing our OpenCart Extension.</p>
    <p>Please complete the form below to register this extension on our licensing server.</p>
    <p>If you experience any problems installing this extension or registering your license, please email support at %s</p>';


$_['license_registration'] = 'Register License';
$_['license_opencart_email'] = 'Email Address Of Purchase';
$_['license_opencart_orderid'] = 'Order Id';

$_['check_email'] = 'Please check and correct your email address. The address you entered does not match our records. It could be that when you purchased the extension, you used a different email address to the one you have entered here.';
$_['check_orderid'] = 'Please check and correct your order id. The order id you have entered does not match our records. Please check this in your account.';

$_['server_error_curl'] = '<h2>Server Error - Curl Required</h2>
    <p>Your server does not appear to have the \'curl\' PHP module installed. The \'curl\' PHP module is required for OpenCart to function correctly. Please contact your web host to ask them to install the \'curl\' PHP module for you.</p>';

$_['text_free_support_remaining'] = 'You have <strong><span style="color:red;">%s</span></strong> days of free support remaining - <a href="https://support.cartbinder.com/" target="_blank">Visit Support Now</a>';
$_['text_free_support_expired'] = '<span style="color:red;">Your 12 months of free support has expired</span> - <a href="https://www.cartbinder.com/store/free-support.php?path=%d&ssl=%d&domain=%s&ext=%s&user_token=%s">Extend Now</a>';

$_['text_deregister'] = 'De-Register License';
$_['help_deregister'] = 'Are you sure you want to de-register the license for this domain?\n\nDe-registering will free up this license for use on another OpenCart Installation / Domain Name.\n\nWARNING - You will no longer be able to access the settings on this domain until a license is registered!';