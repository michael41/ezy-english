$(document).ready(function() {
	
	$('.pic_left_1').css( 'cursor', 'pointer' );//Allow pic on the left to be a hand
	
	//Hide the parts of the dialogue you don't want to show initially first : 
	$(".dial_left_1").hide(); $(".dial_left_2").hide(); $(".dial_left_3").hide();  
	$(".dial_right_1").hide(); $(".dial_right_2").hide(); $(".dial_right_3").hide();  
	
	//Clicking on pictures to show the dialogue : 	
	var dialogue_LEFT_initiate = 1;
	var dialogue_RIGHT_initiate;	
	var click_on_sentence_for_sound; 
	
	$(".pic_left_1").click(function(){
		
		
		   $(this).css( 'cursor', 'default' );
		   if (dialogue_LEFT_initiate == 1)
		   {
    	   $('.dial_left_1').show(); 
		   var audio_dialogue_1 = document.getElementById("yk_audio_dialogue_1");
		   audio_dialogue_1.play(); 	
		   $('.dial_left_1').addClass('ykBold');   
		   //After about 4 seconds, make this dialogue bold and red and initiate the right dialogue
		   setTimeout(function(){ 
		   $('.dial_left_1').addClass('ykBoldDone');
 			dialogue_RIGHT_initiate = 1;
			$('.pic_right_1').css( 'cursor', 'pointer' );//cursor to the right picture
			}, 500);
		   }
		   
		   if (dialogue_LEFT_initiate == 3)
		   {
    	   $('.dial_left_2').show(); 
		   var audio_dialogue_3 = document.getElementById("yk_audio_dialogue_3");
		   audio_dialogue_3.play();
		   
		   $('.dial_left_2').addClass('ykBold');
		   $('.hint_pic_1').show();//show hint
		   dialogue_RIGHT_initiate = 0;//disable temporarily
		    setTimeout(function(){ 
		   $('.dial_left_2').addClass('ykBoldDone');
 			dialogue_RIGHT_initiate = 3;
			$('.pic_right_1').css( 'cursor', 'pointer' );//cursor to the right picture
			$('.pic_left_1').css( 'cursor', 'default' );//make left pic cursor default 
			 dialogue_LEFT_initiate = 0;//disable left pic click
			 click_on_sentence_for_sound = 1; //now when u click on the sentences it'll bring up the sound	 
			}, 500);
		   }
		
		  
		   
     });
	$(".pic_right_1").click(function(){
			
		   if (dialogue_RIGHT_initiate == 1)
		   {
		   $('.pic_left_2').css( 'cursor', 'default' );//cursor back to normal
    	   $('.dial_right_1').show(); 
    	   $('.hint_pic_2').show();//show hint
		   var audio_dialogue_2 = document.getElementById("yk_audio_dialogue_2");
		   audio_dialogue_2.play();
		   $('.dial_right_1').addClass('ykBold');
		   dialogue_LEFT_initiate = 0;//disable temporarily
		    setTimeout(function(){ 
		   $('.dial_right_1').addClass('ykBoldDone');
 			dialogue_LEFT_initiate = 3;
			$('.pic_left_1').css( 'cursor', 'pointer' );//hand cursor back for left pic
			$('.pic_right_1').css( 'cursor', 'default' );//make right pic cursor default again
			}, 500);
		   
		   
	   }
		   if (dialogue_RIGHT_initiate == 3)
		   {
    	   $('.dial_right_2').show(); 
		   var audio_dialogue_4 = document.getElementById("yk_audio_dialogue_4");
		   audio_dialogue_4.play();
		   
		    $('.dial_right_2').addClass('ykBold');

		   dialogue_LEFT_initiate = 0;//disable temporarily
		    setTimeout(function(){ 
		   $('.dial_right_2').addClass('ykBoldDone');
		   dialogue_RIGHT_initiate = 0;//disable right pic click
		   $('.pic_right_1').css( 'cursor', 'default' );//make right pic cursor default again
			}, 500);
			
		   	//Give pointer cursor's to sentences : 
			 $('.dial_left_1').css( 'cursor', 'pointer' );
			 $('.dial_left_2').css( 'cursor', 'pointer' );
			 $('.dial_right_1').css( 'cursor', 'pointer' );
			 $('.dial_right_2').css( 'cursor', 'pointer' );		

		   }

	  });
	  
	   //Clicking on the sentences plays the sound : 

		$('.dial_left_1').click(function(){
			if (click_on_sentence_for_sound == 1)
		{
		$(this).removeClass('ykBoldDone');
		var audio_dialogue_1 = document.getElementById("yk_audio_dialogue_1");
		 audio_dialogue_1.play()   
		   //After about 4 seconds, make this sentence maroon
		   setTimeout(function(){ 
		    $(".dial_left_1").addClass('ykBoldDone');		    
			}, 500);
		}
		});
		
		$('.dial_right_1').click(function(){
			if (click_on_sentence_for_sound == 1)
		{
		$(this).removeClass('ykBoldDone');
		var audio_dialogue_2 = document.getElementById("yk_audio_dialogue_2");
		audio_dialogue_2.play()   
		   //After about 4 seconds, make this sentence maroon
		   setTimeout(function(){ 
		    $(".dial_right_1").addClass('ykBoldDone');		    
			}, 1000);
		}
		});
		
		$('.dial_left_2').click(function(){
			if (click_on_sentence_for_sound == 1)
		{
		$(this).removeClass('ykBoldDone');
		var audio_dialogue_3 = document.getElementById("yk_audio_dialogue_3");
		    audio_dialogue_3.play()   
		   //After about 4 seconds, make this sentence maroon
		   setTimeout(function(){ 
		    $(".dial_left_2").addClass('ykBoldDone');		    
			}, 500);
		}
		});
		
		$('.dial_right_2').click(function(){
			if (click_on_sentence_for_sound == 1)
		{
		$(this).removeClass('ykBoldDone');
		var audio_dialogue_4 = document.getElementById("yk_audio_dialogue_4");
		    audio_dialogue_4.play()   
		   //After about 4 seconds, make this sentence maroon
		   setTimeout(function(){ 
		    $(".dial_right_2").addClass('ykBoldDone');
		    
			}, 500);
		}
		});
		

		
	  
	//Hide the dialogue again on reset : 
	$("#reset").click(function(){		
	location.reload();	
		});
	  
	  
	

				
});