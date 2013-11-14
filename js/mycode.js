

$(document).ready(function(){
	 $("#utteja").hide();
  $("#prize").click(function(){
	  $("#utteja1").hide();
	     $("#loan").hide();
	    $("#post").hide();
    $("#utteja").slideToggle(1000);
  });
  
   $("#utteja1").hide();
   
  $("#merit").click(function(){
	  $("#utteja").hide();
	   $("#loan").hide();
	    $("#post").hide();
		$("#utteja1").slideToggle(1000);
  });
    $("#loan").hide();
   
  $("#loan1").click(function(){
        $("#utteja").hide();
	    $("#utteja1").hide();
	    $("#post").hide();
    $("#loan").slideToggle(1000);
  });
  
  $("#post").hide();
    $("#post1").click(function(){
	  $("#utteja").hide();
	  $("#utteja1").hide();
	     $("#loan").hide();
    $("#post").slideToggle(1000);
  });
  
   $("#post1").mouseenter(function() {
    $(this).css("color","#3a7b5f");
  });
  $("#post1").mouseleave(function() {
    $(this).css("color","black");
  });
   $("#loan1").mouseenter(function() {
    $(this).css("color","#3a7b5f");
  });
  $("#loan1").mouseleave(function() {
    $(this).css("color","black");
  });
   $("#prize").mouseenter(function() {
    $(this).css("color","#3a7b5f");
  });
  $("#prize").mouseleave(function() {
    $(this).css("color","black");
  });
   $("#merit").mouseenter(function() {
    $(this).css("color","#3a7b5f");
  });
  $("#merit").mouseleave(function() {
    $(this).css("color","black");
  });
     $("#karna").mouseenter(function() {
    $(this).css("color","#3a7b5f");
  });
  $("#karna").mouseleave(function() {
    $(this).css("color","black");
  });
  
  $("#tt").click(function() {
    $("#hide").animate({
      "font-size": "3em",
      "width": "60%",
      "left": "40px"
    }, 1000);
  });
  var teams=["India","Australia","Pakistan","England","South Africa","New Zealand","Sri Lanka","West Indies","Zimbabwe","Bangladesh","Kenya","Ireland","Canada","Netherland","Scotland","Afghanistan","USA"];
 $('#team').typeahead({
     source: teams,
     items: 4
   });
  
     $('#go').bind("click",function(){
		$('#sch').text("heyy wassap!!")
				.css({"display":"block"});
  });
   //  $('#zz1').bind("click",function(){
	//	$('#coll').text("heyy wassap!!")
		//		.css({"display":"block"});
  //});
  /*
   $("#coll").hide();
$("#zz1").click(function(){
	 $("#show").hide();
    $("#show").slideToggle(1000);
  });*/
  
 
  $("#bms").click(function(){
	  $("#rv1").hide();
	  $("#rv2").hide();
	  $("#pes1").hide();
   $("#pes2").hide();
   $("#bit2").hide();
   $("#bit1").hide();
   $("#ms1").hide();
   $("#ms2").hide();
   $("#sjc2").hide();
      $("#sjc1").hide();
     $("#ait2").hide();
   $("#ait1").hide();
   $("#rnsit2").hide();
     $("#rnsit1").hide();
	 $("#bmsit2").hide();
     $("#bmsit1").hide();
	 $("#bms1").slideToggle(1000);
	 $("#bms2").slideToggle(800);
  });
    $("#rv1").hide();
   $("#rv2").hide();
  $("#rv").click(function(){
  //$(".hide1").hide();
    //$(".hide2").hide();
	  	  $("#pes1").hide();
   $("#pes2").hide();
   $("#bit2").hide();
   $("#bit1").hide();
   $("#ms1").hide();
   $("#ms2").hide();
   $("#sjc2").hide();
      $("#sjc1").hide();
     $("#ait2").hide();
   $("#ait1").hide();
   $("#rnsit2").hide();
     $("#rnsit1").hide();
	 $("#bmsit2").hide();
     $("#bmsit1").hide();
	  $("#bms1").hide();
   $("#bms2").hide();
	 $("#rv1").slideToggle(1000);
	 	 $("#rv2").slideToggle(1000);
  });
   $("#pes1").hide();
   $("#pes2").hide();
  $("#pes").click(function(){
  //$(".hide1").hide();
    //$(".hide2").hide();
	
	 $("#bit2").hide();
   $("#bit1").hide();
   $("#ms1").hide();
   $("#ms2").hide();
   $("#sjc2").hide();
      $("#sjc1").hide();
     $("#ait2").hide();
   $("#ait1").hide();
   $("#rnsit2").hide();
     $("#rnsit1").hide();
	 $("#bmsit2").hide();
     $("#bmsit1").hide();
	$("#rv1").hide();
	  $("#rv2").hide();
 $("#bms1").hide();
   $("#bms2").hide();	  
	 $("#pes1").slideToggle(1000);
	 $("#pes2").slideToggle(1000);
  });
   $("#bit2").hide();
   $("#bit1").hide();
  $("#bit").click(function(){
  //$(".hide1").hide();
    //$(".hide2").hide();
	 $("#ms1").hide();
   $("#ms2").hide();
   $("#sjc2").hide();
      $("#sjc1").hide();
     $("#ait2").hide();
   $("#ait1").hide();
   $("#rnsit2").hide();
     $("#rnsit1").hide();
	 $("#bmsit2").hide();
     $("#bmsit1").hide();
	$("#rv1").hide();
	  $("#rv2").hide();
 $("#bms1").hide();
   $("#bms2").hide();
    $("#pes1").hide();
   $("#pes2").hide();
	 $("#bit1").slideToggle(1000);
	 $("#bit2").slideToggle(1000);
  });
  $("#ms1").hide();
   $("#ms2").hide();
  $("#ms").click(function(){
  $(".hide1").hide();
    $(".hide2").hide();
	 $("#ms1").slideToggle(1000);
	 $("#ms2").slideToggle(1000);
  });
  $("#ait2").hide();
   $("#ait1").hide();
  $("#ait").click(function(){
   $(".hide1").hide();
    $(".hide2").hide();
	 $("#ait1").slideToggle(1000);
	  $("#ait2").slideToggle(1000);
  });
  $("#bmsit2").hide();
     $("#bmsit1").hide();
  $("#bmsit").click(function(){
   $(".hide1").hide();
    $(".hide2").hide();
	 $("#bmsit1").slideToggle(1000);
	 $("#bmsit2").slideToggle(1000);
  });
	$("#rnsit2").hide();
     $("#rnsit1").hide();
  $("#rnsit").click(function(){
   $(".hide1").hide();
    $(".hide2").hide();
	 $("#rnsit1").slideToggle(1000);
	 $("#rnsit2").slideToggle(1000);
  });
	$("#sit2").hide();
     $("#sit1").hide();
  $("#sit").click(function(){
   $(".hide1").hide();
    $(".hide2").hide();
	 $("#sit1").slideToggle(1000);
	 $("#sit2").slideToggle(1000);
  });
	$("#sjc2").hide();
      $("#sjc1").hide();
  $("#sjc").click(function(){
   $(".hide1").hide();
    $(".hide2").hide();
	 $("#sjc1").slideToggle(1000);
	  $("#sjc2").slideToggle(1000);
  });
  $(".hide3").mouseenter(function() {
    $(this).css("color","#0099FF");
  });
  $(".hide3").mouseleave(function() {
    $(this).css("color","#000000");
  });
});