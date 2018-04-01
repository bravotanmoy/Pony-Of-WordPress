<?php 
/*
function shortcode_date(){
	return date("Y/m/d");
}
add_shortcode("date","shortcode_date");
*/

function shortcode_date($attr){

	$default = array(
		"format"=>"Y/m/d"
	);

	$date_data = shortcode_atts($default,$attr);

	return date($date_data['format']);
}
add_shortcode("date","shortcode_date");


//Shortcode for Google Map
/*function shortcode_google_map($attr){
	$default = array(
		"lat"=>"23.7", 
		"lon"=>"90.3750", 
		"zoom"=>"12", 
		"width"=>600, 
		"height"=>400, 

	);

	$map_data = shortcode_atts($default,$attr);

	$img = '<img src="http://maps.googleapis.com/maps/api/staticmap?center=23.7,90.3750&zoom=12&size=600x400"/>';

}

add_shortcode("gmap","shortcode_google_map");*/



//Shortcode for Font Color

function shortcode_google_map($attr){
	$default = array(
	);

	$data = shortcode_atts($default,$attr);


}

add_shortcode("red","shortcode_google_map");
