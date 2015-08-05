// JavaScript Document
var $j = jQuery.noConflict();

$j(document).ready(function(){

  // Fades Nebennav
  $j('#NebenNavExtern a').children('.nnavimgbox').css("opacity", "0");
  $j(function(){
  	$j('#NebenNavExtern a')
  		.mouseover(function(){
        $j(this).children('.nnavimgbox').stop();
        $j(this).children('.nnavimgbox').fadeTo("fast", 1);
  		})
  		.mouseout(function(){
        $j(this).children('.nnavimgbox').stop();
  			$j(this).children('.nnavimgbox').fadeTo("fast", 0);
  		})
  });

  // Fades Hauptnavigation(horizontal)
  $j('#HNav_All a').each(function(i){
    if (this.className.indexOf("act") == -1){
      $j(this).children('.navimgbox').css("opacity","0");
    }
  })
  
  $j(function(){
  	$j('#HNav_All a')
  		.mouseover(function(){
        if (this.className.indexOf("act") == -1){
          $j(this).children('.navimgbox').stop();
          $j(this).children('.navimgbox').fadeTo("fast", 1);
        }
  		})
  		.mouseout(function(){
  		  if (this.className.indexOf("act") == -1){
          $j(this).children('.navimgbox').stop();
  			  $j(this).children('.navimgbox').fadeTo("fast", 0);
  			}
  		})
  });

  // Color Fade Cnav
  $j(function(){
  	$j('a.CNav')
  		.mouseover(function(){
        $j(this).stop().animate( { backgroundColor: 'none' }, 200);
  		})
  		.mouseout(function(){
        $j(this).stop().animate( { backgroundColor: 'none' }, 200);
  		})
  });

});
function generateIBAN() {
 var blz = jQuery('#tx-srfeuserregister-pi1-tx_extendfeusers_bank_code_number').val();
  var knr = jQuery('#tx-srfeuserregister-pi1-tx_extendfeusers_bank_account_number').val();  
  var host =window.location.hostname;
jQuery.ajax({
	url:"http://" + host + "/index.php?eID=iban&blz=" + blz + "&knr=" + knr,

	type: "GET",
	cache: false,
	  
	timeout: 60000,
	success: function(data) {
	if(data=="Fehler") {
	 alert("Es konnte keine IBAN erstellt werden. Bitte überprüfen Sie die Angaben unter BLZ und Kontonummer");	
        } else {
        
        jQuery('#tx-srfeuserregister-pi1-tx_extendfeusers_bank_iban').val(data);  
}
    },
    
	jsonp: 'jsonp'
});

//  jQuery.get(,function(data) {jQuery('#tx-srfeuserregister-pi1-tx_extendfeusers_bank_iban').val(data)});
  
  

  
  
}