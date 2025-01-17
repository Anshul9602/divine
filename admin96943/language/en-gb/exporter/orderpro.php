<?php
// Heading
$_['heading_title']          	= 'Order Export Pro';
$_['export_title']           	= 'Orders (%s)';

// Text
$_['text_list']          		 = 'Order Export Pro';
$_['text_all_store']			 = 'All Stores';
$_['text_all_stock_status']	 	 = 'All Stock Status';
$_['text_all_status']	 		 = 'All Status';
$_['text_xls']	 				 = 'XLS';
$_['text_xlsx']	 				 = 'XLSX';
$_['text_csv']	 				 = 'CSV';
$_['text_xml']	 				 = 'XML';
$_['text_json']	 				 = 'JSON';
$_['text_no_fields']	 		 = 'No Extra Field.';
$_['text_default']	 			 = 'Default';
$_['text_from']	 			 	 = 'From';
$_['text_to']	 			 	 = 'To';
$_['text_success']	 			 = 'Your Export Has Been Done. Check Your Downloads.';
$_['text_no_results']	 		 = 'No Order Records Found With Select Filters!';
$_['text_missing']	 			 = 'Missing Orders';
$_['text_all']	 			 	 = 'All';
$_['text_order_id']	 			 = 'Order ID';
$_['text_customer']	 			 = 'Customer';
$_['text_order_status']	 		 = 'Order Status';
$_['text_date_added']	 		 = 'Date Added';
$_['text_date_modified']		 = 'Date Modified';
$_['text_total']	 			 = 'Order Total';
$_['text_asc']	 			 	 = 'ASC';
$_['text_desc']	 			 	 = 'DESC';
$_['text_order']	 			 = 'Order';
$_['text_select_all']	 		 = 'Select All';
$_['text_unselect_all']	 		 = 'Unselect All';
$_['text_filters_note']	 			 = 'All filters are optional and useful to narrowing down the export data';
$_['text_field_settings_success']     = 'Success: You have modified order export setting!';
$_['text_fill_sort_orders']     = 'Fill Sort Orders';

// Entry
$_['entry_order_id']			 = 'Order IDS';
$_['entry_order_status']		 = 'Order Status';
$_['entry_total']		 		 = 'Order Total';
$_['entry_customer']		 	 = 'Filter Customer';
$_['entry_date_start']		 	 = 'Date From';
$_['entry_date_end']		 	 = 'Date To';
$_['entry_limit_start']		 	 = 'Limit Start';
$_['entry_limit_end']		 	 = 'Limit End';
$_['entry_customer_group']	 	 = 'Customer Group';
$_['entry_store']	 			 = 'Store';
$_['entry_payment_method']	 	 = 'Payment Method';
$_['entry_shipping_method']	 	 = 'Shipping Method';
$_['entry_product']	 			 = 'Filter Product';
$_['entry_order_fields']		 = 'Export Order Fields';
$_['entry_extra_field']			 = 'Extra Field In Table';
$_['entry_format']				 = 'Export Format';
$_['entry_orderdetail']			 = 'Order Details';
$_['entry_customerdetail']	 	 = 'Customer Details';
$_['entry_customfields']	 	 = 'Custom Fields';
$_['entry_orderhistory']	 	 = 'Order History';
$_['entry_shippingaddress']		 = 'Shipping Address';
$_['entry_paymentaddress']	 	 = 'Payment Address';
$_['entry_totals']				 = 'Order Totals';
$_['entry_sort']	 	 	 	 = 'Sort';
$_['entry_order']	 	 	 	 = 'Order';
$_['entry_productdetail']	 	 = 'Order Products';
$_['entry_voucherdetail']	 	 = 'Order Vouchers';
$_['entry_payment_country']	 	 = 'Payment Country';
$_['entry_payment_zone']	 	 = 'Payment Zone / State';
$_['entry_payment_postcode']	 = 'Payment Postcode / Zipcode';
$_['entry_shipping_country']	 = 'Shipping Country';
$_['entry_shipping_zone']	 	 = 'Shipping Zone / State';
$_['entry_shipping_postcode']	 = 'Shipping Postcode / Zipcode';
$_['entry_invoice']	 			 = 'Invoice Number';
$_['entry_invoice_prefix']	 	 = 'Invoice Prefix';
$_['entry_language']	 	 	 = 'Language';
$_['entry_currency']	 	 	 = 'Currency';
$_['entry_sort_order']     	= 'Sort Order';

// Button
$_['button_export']				 = 'Export Orders';
$_['button_advance_filter']		 = 'Click here to show more filters';
$_['button_save'] = 'Save Fields Settings';

// Tabs
$_['tab_general'] 		= 'General';
$_['tab_support']     = 'Support';

// Help

$_['help_order_id']	 	 		 = 'Filter Multiple Order IDS <br/> (Comma Seperated) I.e: 100,101 <br/>(Within Range) I.e: 50 - 60. <br/> Both I.e: 50-60, 70-80, 100, 101';
$_['help_order_limit']	  		 = 'Set Range Of Order Limit. If Minimum Order Limit Not Given But Maximum Given Than Order Limit Export From 0 To Maximum Given.if Maximum Order Limit Not Given But Minimum Given Than Order Limit Export From Minimum Given To Unlimited. If Not Both Maximum And Minimum Not Given, Order Limit Will Be Ignored.';
$_['help_payment_method']	 	 = 'Choose Payment Method To Filter. I.e: Cash On Deliver, Bank Transfer';
$_['help_shipping_method']	 	 = 'Choose Shipping Method To Filter. I.e: Free Shipping, Flat Rate';

$_['help_product']				 = '(autocomplete)';
$_['help_customer']				 = '(autocomplete)';
$_['help_extra_field']			 = 'These Are Addition Columns Created In Order Table';
$_['help_format']				 = 'Select Format In Which You Want To Export Orders';

$_['help_orderdetail']			 = 'Select Yes If Want To Export Order Details';
$_['help_customerdetail']		 = 'Select Yes If Want To Export Customer Details';
$_['help_productdetail']	 	 = 'Select Yes If Want To Export Order Products Details Like Product Name, Model, Total Price, etc.';
$_['help_voucherdetail']	 	 = 'Select Yes If Want To Export Order Vouchers';
$_['help_totals']	 	 	 	 = 'Select Yes If Want To Export Order Totals';

$_['help_shippingaddress']	 	 = 'Select Yes If Want To Export  Shipping Address Used By Customer While Order';
$_['help_paymentaddress']	 	 = 'Select Yes If Want To Export Payment Address  Used By Customer While Order';
$_['help_customfields']	 	 	 = 'Select Yes If Want To Export  Custom Fields Provided By Opencart';
$_['help_order_fields']		 = 'Sort Order For Fields only for excel export like xlsx, xls, csv';

// Table
$_['table_order']				 = 'Order';

// PlaceHolder

// Export
$_['export_order_id']			 = 'Order ID';
$_['export_invoice_prefix']		 = 'Invoice Prefix';
$_['export_invoice_no']			 = 'Invoice Number';
$_['export_store_id']			 = 'Store ID';
$_['export_store_name']			 = 'Store Name';
$_['export_store_url']			 = 'Store URL';
$_['export_product_id']			 = 'Product ID';
$_['export_product_name']		 = 'Product Name';
$_['export_product_model']		 = 'Product Model';
$_['export_product_price']		 = 'Product Price';
$_['export_product_total_price'] = 'Product Total Price';
$_['export_product_quantity']	 = 'Product Quantity';
$_['export_product_tax']	 	 = 'Product Tax';
$_['export_product_reward']	 	 = 'Product Reward';
$_['export_product_option']	 	 = 'Product Option';
$_['export_customer_name']	 	 = 'Customer Name';
$_['export_customer_group']	 	 = 'Customer Group';
$_['export_firstname']	 	 	 = 'First Name';
$_['export_lastname']	 	 	 = 'Last Name';
$_['export_order_total']	 	 = 'Order Totals';
$_['export_order_total_variable']	 	 = 'Order Total';
$_['export_customer_id']		 = 'Customer ID';
$_['export_customer']			 = 'Customer Name';
$_['export_email']				 = 'Email';
$_['export_telephone']			 = 'Telephone';
$_['export_fax']				 = 'Fax';
$_['export_order_products']		 = 'Products';
$_['export_order_options']		 = 'Product Options';
$_['export_order_vouchers']		 = 'Order Vouchers';
$_['export_order_totals']		 = 'Total Details';
$_['export_customfields']		 = 'Custom Fields';
$_['export_paymentaddress']		 = 'Payment Address';
$_['export_paymentcustomfields'] = 'Payment Custom Fields';
$_['export_shippingaddress']	 = 'Shipping Address';
$_['export_shipping_customfields']	= 'Shipping Custom Fields';
$_['export_shipping_firstname']	 = 'Shipping First Name';
$_['export_shipping_lastname']	 = 'Shipping Last Name';
$_['export_shipping_company']	 = 'Shipping Company';
$_['export_shipping_address_1']	 = 'Shipping Address 1';
$_['export_shipping_address_2']	 = 'Shipping Address 2';
$_['export_shipping_city']		 = 'Shipping City';
$_['export_shipping_postcode']	 = 'Shipping Postcode';
$_['export_shipping_country']	 = 'Shipping Country';
$_['export_shipping_country_id'] = 'Shipping Country ID';
$_['export_shipping_zone']		 = 'Shipping Zone';
$_['export_shipping_zone_id']	 = 'Shipping Zone ID';
$_['export_shipping_custom_field']= 'Shipping Custom Field';
$_['export_shipping_method']	 = 'Shipping Method';
$_['export_shipping_code']		 = 'Shipping Code';
$_['export_payment_firstname']	= 'Payment Firstname';
$_['export_payment_lastname']	= 'Payment Last Name';
$_['export_payment_company']	= 'Payment Company';
$_['export_payment_address_1']	= 'Payment Address 1';
$_['export_payment_address_2']	= 'Payment Address 2';
$_['export_payment_city']		= 'Payment City';
$_['export_payment_postcode']	= 'Payment Postcode';
$_['export_payment_country']	= 'Payment Country';
$_['export_payment_country_id']	= 'Payment Country ID';
$_['export_payment_zone']		= 'Payment Zone';
$_['export_payment_zone_id']	= 'Payment Zone ID';
$_['export_payment_custom_field']= 'Payment Custom Field';
$_['export_payment_method']		 = 'Payment Method';
$_['export_payment_code']		 = 'Payment Code';
$_['export_affiliate_code']		 = 'Affiliate Code';
$_['export_currency_id']		 = 'Currency ID';
$_['export_ip_address']			 = 'IP Address';
$_['export_comment']			 = 'Comment';
$_['export_custom_field']		 = 'Custom Field';
$_['export_total']				 = 'Order Total';
$_['export_order_status_id']	 = 'Order Status ID';
$_['export_order_status']		 = 'Order Status';
$_['export_affiliate_id']		 = 'Affiliate ID';
$_['export_commission']			 = 'Commission';
$_['export_marketing_id']		 = 'Marketing ID';
$_['export_tracking']			 = 'Tracking';
$_['export_language_id']		 = 'Language Id';
$_['export_currency_code']		 = 'Currency';
$_['export_currency_value']		 = 'Currency Value';
$_['export_ip']					 = 'IP Address';
$_['export_forwarded_ip']		 = 'Forwarded IP';
$_['export_user_agent']			 = 'User Agent';
$_['export_accept_language']	 = 'Accept Language';
$_['export_date_added']			 = 'Date Added';
$_['export_date_modified']		 = 'Date Modified';

// Find Fields
$_['find_order_id']				= 'Order ID';
$_['find_invoice_prefix']		= 'Invoice Prefix';
$_['find_invoice_no']			= 'Invoice Number';
$_['find_store_id']				= 'Store ID';
$_['find_store_name']			= 'Store Name';
$_['find_store_url']			= 'Store URL';
$_['find_product_id']			= 'Product ID';
$_['find_product_name']			= 'Product Name';
$_['find_product_model']		= 'Product Model';
$_['find_product_price']		= 'Product Price';
$_['find_product_total_price']	= 'Product Total Price';
$_['find_product_quantity']		= 'Product Quantity';
$_['find_product_tax']			= 'Product Tax';
$_['find_product_reward']		= 'Product Reward';
$_['find_product_option']		= 'Product Option';
$_['find_voucher']				= 'Order Vouchers';
$_['find_order_total']			= 'Order Totals';
$_['find_order_total_variable'] = 'Order Total';
$_['find_order_status']			= 'Order Status';
$_['find_customer_name']		= 'Customer Name';
$_['find_customer_id']			= 'Customer ID';
$_['find_customer_group']		= 'Customer Group';
$_['find_firstname']			= 'First Name';
$_['find_lastname']				= 'Last Name';
$_['find_email']				= 'Email';
$_['find_telephone']			= 'Telephone';
$_['find_fax']					= 'Fax';
$_['find_comment']				= 'Comment';
$_['find_custom_field']			= 'Custom Field';
$_['find_payment_firstname']	= 'Payment First Name';
$_['find_payment_lastname']		= 'Payment Last Name';
$_['find_payment_company']		= 'Payment Company';
$_['find_payment_address_1']	= 'Payment Address 1';
$_['find_payment_address_2']	= 'Payment Address 2';
$_['find_payment_city']			= 'Payment City';
$_['find_payment_postcode']		= 'Payment Postcode';
$_['find_payment_country']		= 'Payment Country';
$_['find_payment_country_id']	= 'Payment Country ID';
$_['find_payment_zone']			= 'Payment Zone';
$_['find_payment_zone_id']		= 'Payment Zone ID';
$_['find_payment_method']		= 'Payment Method';
$_['find_payment_custom_field']	= 'Payment Custom Field';
$_['find_payment_code']			= 'Payment Code';
$_['find_shipping_firstname']	= 'Shipping First Name';
$_['find_shipping_lastname']	= 'Shipping Last Name';
$_['find_shipping_company']		= 'Shipping Company';
$_['find_shipping_address_1']	= 'Shipping Address 1';
$_['find_shipping_address_2']	= 'Shipping Address 2';
$_['find_shipping_city']		= 'Shipping City';
$_['find_shipping_postcode']	= 'Shipping Postcode';
$_['find_shipping_country']		= 'Shipping Country';
$_['find_shipping_country_id']	= 'Shipping Country ID';
$_['find_shipping_zone']		= 'Shipping Zone';
$_['find_shipping_zone_id']		= 'Shipping Zone ID';
$_['find_shipping_method']		= 'Shipping Method';
$_['find_shipping_custom_field']= 'Shipping Custom Field';
$_['find_shipping_code']		= 'Shipping Code';
$_['find_affiliate_id']			= 'Affiliate ID';
$_['find_commission']			= 'Commission';
$_['find_tracking']				= 'Tracking';
$_['find_language_id']			= 'Language ID';
$_['find_currency_id']			= 'Currency ID';
$_['find_currency_code']		= 'Currency Code';
$_['find_currency_value']		= 'Currency Value';
$_['find_ip_address']			= 'IP Address';
$_['find_forwarded_ip']		 	= 'Forwarded IP';
$_['find_user_agent']			= 'User Agent';
$_['find_accept_language']	 	= 'Accept Language';
$_['find_date_added']			= 'Date Added';
$_['find_date_modified']		= 'Date Modified';

// Error
$_['error_warning']          	 = 'Warning: Please Check The Form Carefully For Errors!';
$_['error_permission']       	 = 'Warning: You Do Not Have Permission To Modify Order Export Pro!';
$_['error_onerequired']       	 = 'Please Select Any One Field For Export!';
$_['error_incorrect_sortorder']       	 = 'Please correct sort order of Fields and make sure each field has unique sort order. Using crazy values for sort order like 200,256 will result in facing diffulty in excel sheet';
$_['error_setting_fields']       	 = 'Please Choose Fields to save!';