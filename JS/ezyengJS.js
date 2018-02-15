
   $(document).ready(function(){



  
 

   //__________________________________________________________\\
   //FOUNDATION AND JQUERY ACCORDION
   //__________________________________________________________\\	
   		//Foundation : 
   	    $(document).foundation();
   
   	    //jQuery UI Accordion :
   	    $( "#accordion" ).accordion({
   	    	active: true,
               collapsible: true
       	 });
   		 
   		
   		
   //__________________________________________________________\\
   //LEFT NAV - DROPDOWNS	
   //__________________________________________________________\\	 
   	

      
   //------------------------------------------- Generally allowing dropdowns to work : ----------------------------------------------------\\
   
   	     	   //Click toggle on the topics heading part to show and hide the topics below it : 
                $('.yk_topheadings').on('click',function(){
   
               if($(this).attr('data-click-state') == 1)
               {  
               $(this).attr('data-click-state', 0);
               $(this).parent().siblings().hide("explode", {pieces: 16 }, 250);
               }
                else
               {  
               $(this).attr('data-click-state', 1);          
               $(this).parent().siblings().show("blind", {pieces: 16 }, 250);
                //Hide the other sub menus :
               $(this).parent().parent().siblings().children().not('h3').slideUp(500); 
               //Reset back to correct data click state for approprate one : 
               $(this).parent().parent().siblings().children().find('.yk_topheadings').attr('data-click-state', 0);           
               }
   
   });


            $(".yksubheadings").find("div").hide();		
   		
   	        //Dropdown left nav menus (Clicking on 'Greetings', 'Jobs', etc.)
   			$(".yksubheadings").children("h4").click(function(){		
   	
   	          
   		     //Slide up the sub menus on the other sub headings : 
   			  $(this).parent().siblings("div").find("div").slideUp(500);
   			 			  
   			  //Click toggle functionality to hide or show sub menus : 
   			    if($(this).parent().find("div").attr('data-click-state') == 1)
   				{	
   				$(this).parent().find("div").attr('data-click-state', 0);
   				$(this).parent().siblings().find("div").attr('data-click-state', 0);
   				$(this).parent().find("div").slideUp(500);		
   				}
   				 else
   				{	
   				$(this).parent().find("div").attr('data-click-state', 1);			 
   				$(this).parent().find("div").show();
   				}
   
   						
   			});
   			
   
   
   		
   //-------------------------------- Making sure the correct dropdowns are displayed on page load : ---------------------------------\\
   				
   				
   							/*
   							Explanation example of code below for dropdowns = 
   							At the moment, 'Greetings' is the top menu item on the left nav. 
   							So all 'Dropdown_1_pages' pages have a body class of 'Dropdown_1_pages'
   							In this case it means following files ... 
   								- greetings_vocab.php
   								- greetings_vocab_game.php
   								- greetings_convo_phrases.php
   								- greetings_convo_dialogue.php
   								- greetings_convo_game.php
   							... have a body class of 'Dropdown_1_pages'. 
   							And then all the pages for the next menu item (for example 'At the Station') would each have a body class of 'Dropdown_2_pages' etc. 
   							So basically just increment the number in the body class wording when you're creating the pages for a new menu item. 
   														
   							*/
   
   							
   							//('Dropdowns_1' should really be 'Topics_1', so the next ones should be 'TopScores_1', etc.) 
   							//Do 'for' loop at some point for code below : 
   
    
   							var url = location.pathname;
   							
   
   							for (x = 1; x < 10; x++)
   							{
   
   								
   
   									if($('body').is('.Dropdown_' + x + '_pages'))
   									{		
   									    $(".yksubheadings").show(); 						
   										$("#Dropdowns_" + x).show();
   										$("#Dropdowns_" + x).find("div").show();
   										$("#Dropdowns_" + x).attr('data-click-state', 1); //Put data click state to 1 
   										$(".yk_topics_heading").attr('data-click-state', 1);
   										$(".yk_topics_heading").parent().parent().siblings().children().not('h3').hide();	
   
   
   	//If opened on a specific page, then make the left nav heading and subheadings for this page bold :

         //Headings : 

                                   if(url.indexOf('greetings') > 0)
   
                                     {
   
                                     $('#Dropdowns_' + x)
                                    .prev(":contains('Greetings')")
                                    .addClass('left_nav_topic_headings_highlighted');
   
                                     }

                                     if(url.indexOf('jobs') > 0)
   
                                     {
   
                                     $('#Dropdowns_' + x)
                                    .prev(":contains('Jobs')")
                                    .addClass('left_nav_topic_headings_highlighted');
   
                                     }


                                   if(url.indexOf('hobbies') > 0)
   
                                     {
   
                                     $('#Dropdowns_' + x)
                                    .prev(":contains('Hobbies')")
                                    .addClass('left_nav_topic_headings_highlighted');
   
                                     }

                        
   
   		
         //Subheadings : 							
   
   									if(url.indexOf('words') > 0)
   
   										    {
   
   										     $('#Dropdowns_' + x)
   											.find("a:contains('Words')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   									if(url.indexOf('vocab_game') > 0)
   
   										    {
   
   										     $('#Dropdowns_' + x)
   											.find("a:contains('Vocab Game')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   									if(url.indexOf('phrases') > 0)
   
   										    {
   
   										     $('#Dropdowns_' + x)
   											.find("a:contains('Phrases')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   									if(url.indexOf('dialogue') > 0)
   
   										    {
   
   										     $('#Dropdowns_' + x)
   											.find("a:contains('Dialogue')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   									if(url.indexOf('convo_game') > 0)
   
   										    {
   
   										     $('#Dropdowns_' + x)
   											.find("a:contains('Convo Game')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   									
   
   									}


                        //Top Scores Section Dropdowns   
   
   									if($('body').is('.TopScores_' + x + '_pages'))
   									{									    
   									    $(".yksubheadings").show(); 						
   										$("#TopScores_" + x).show();
   										$("#TopScores_" + x).find("div").show();
   										$("#TopScores_" + x).attr('data-click-state', 1); //Put data click state to 1 
   										$(".yk_topscores_heading").attr('data-click-state', 1);
   										$(".yk_topscores_heading").parent().parent().siblings().children().not('h3').hide();
   
   										
                                 //emphasizing the left nav headings : 


                                 //Headings :

                                     if(url.indexOf('greetings') > 0)
   
                                     {
   
                                    $('#TopScores_' + x)
                                    .prev(":contains('Greetings')")
                                    .addClass('left_nav_topic_headings_highlighted');   
                                     }

                                     if(url.indexOf('jobs') > 0)
   
                                     {
   
                                    $('#TopScores_' + x)
                                    .prev(":contains('Jobs')")
                                    .addClass('left_nav_topic_headings_highlighted');   
                                     }

                                     if(url.indexOf('hobbies') > 0)   
                                     {   
                                    $('#TopScores_' + x)
                                    .prev(":contains('Hobbies')")
                                    .addClass('left_nav_topic_headings_highlighted');   
                                     }


                                 //Sub headings : 

                                 if(url.indexOf('vocab_game_scores') > 0)
   
   										    {
   
   										     $('#TopScores_' + x)
   											.find("a:contains('Vocab Game Scores')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   										if(url.indexOf('convo_game_scores') > 0)
   
   										    {
   
   										     $('#TopScores_' + x)
   											.find("a:contains('Convo Game Scores')")
   											.css({"color": "rgb(221, 0, 56)",
   											      "font-weight": "bold",
   											      "padding" : "1%",
   											      "background-color" : "#fbfbfa"});
   
   										    }
   
   
   									}
   
   
   									
   							
   							 
   								
   							}
   
   								
   								
   											
   							// if($('body').is('.Dropdown_2_pages'))
   							// { 							   
   							// 	$(".yksubheadings").show(); 						
   							// 	$("#Dropdowns_2").show();
   							// 	$("#Dropdowns_2").find("div").show();
   							// 	$("#Dropdowns_2").attr('data-click-state', 1); //Put data click state to 1 
   							// 	$(".yk_topics_heading").attr('data-click-state', 1);
   							// 	$(".yk_topics_heading").parent().parent().siblings().children().not('h3').hide();
   		
   							// }	
   							
   							
   												
   									
   							
   							
   							
   							
   //__________________________________________________________\\
   //SLIDESHOW
   //__________________________________________________________\\	
    
    
    /*--------------------Click Pic Slideshow--------------------*/
                     
   				  //Hide and show the pictures : 			  
   				  $(".yk_firstslide").show();
   				  $(".yk_firstslide").siblings().hide();
   				  
   				  //Hide and show the words
   				  $(".yk_click_pic_for_word_word p").first().show(); 
   				  $(".yk_click_pic_for_word_word p").first().siblings().hide(); 
   			  
   				  
   				  $(".ykanyslide").click(function(){
   
   		    						$(this).hide();
   									$(this).next().show();
   									var first_par = $('.yk_click_pic_for_word_word p').first(); // = first paragraph
   									$('.yk_click_pic_for_word_word').append(first_par);
   									$(".yk_click_pic_for_word_word p").first().show();
   									$(".yk_click_pic_for_word_word p").first().siblings().hide(); 
   									
   		    			
   							});
   							
   		          $(".yklastslide").click(function(){
   
   		    						$(this).hide();
   									 $(".yk_firstslide").show();
   		    			
   							});
   							
   				
   /*--------------------Previous and Next Slideshow--------------------*/
   
   				//Hiding the slideshow pop-up initially(?) : 
   				$("#dialog").hide();
   				
   				//Hide the words : 
   				$(".yk_the_word_for_the_pic p").hide();
   				
   				//Setting a disabled variable for the buttons on the slideshow : 
   				var disabled; 
   
   				//Initially showing the first image in the slide, and hiding the other images in the slide : 
   				$(".yk_firstslide_pn").show();
   				$(".yk_firstslide_pn").siblings("img").hide();
   
   
   
   /*------------CONVO PHRASES PAGES = 
   
   /*--------------------When slideshow modal first opens--------------------*/				
   				$(".ykslideshowstart").click(function(){	
   				
   				//where at - need to make the text change when you click the 'previous' button
   				       
   					     
   	     			   
   									if (disabled != 1)
   									{				  		
   								
   											   disabled = 1;
   										   
   												function mf2() {
   													setTimeout(function(){
   																		$('.ykimages_slideshow_pn_btn_nxt').removeClass('ykdisabled');
   																		$('.ykimages_slideshow_pn_btn_previous').removeClass('ykdisabled');
   																		$('#yk_audio2').removeAttr("id"); 
   																		disabled = 0;
   																		}, 4000);//This is how long it takes for the buttons to be in use again 					 and therefore should be long enough for the audio to be played.
   																	
   												}
   												
   												
   												$('#dialog').dialog({height: "500", width: "70%", modal: true, open:function(){setTimeout(function(){
   																		
   																		
   																		$(".yk_the_word_for_the_pic p").first().show();
   																		$(".yk_the_word_for_the_pic p").first().addClass('text_showing');
   																																			
   																		
   																		$('.ykimages_slideshow_pn_btn_nxt').addClass('ykdisabled');
   																		$('.ykimages_slideshow_pn_btn_previous').addClass('ykdisabled');
   																		$('.yk_audios_div div').last().find('audio').attr('id', 'yk_audio2'); 
   																		var audio = document.getElementById("yk_audio2"); 
   																																			
   																		
   																		function playAudio() { 
   																		audio.play(); 
   																		}
   																		playAudio();
   																		mf2();
   															
   																		
   																	}, 100);}, resizable: true});
   															
   												
   									}
   									else
   									{
   									alert('Please wait until the sound plays'); 	
   									}
     	 
   				
   				
   			     });
   				 
   /*--------------------Clicking on the next and previous buttons after the modal is open--------------------*/	
   			 				   		
   				$(".ykimages_slideshow_pn_btn_nxt").click(function(){
   										 						
   										if (disabled != 1)
   										{ 		
   										        disabled = 1; 
   												
   												//Hiding and showing the text : 
   												$(".text_showing").hide();
   												var textshowing = $(".yk_the_word_for_the_pic p").first(); 
   												$('.yk_the_word_for_the_pic').append(textshowing);
   												
   												//Just adding the css which makes the button look disabled
   												$('.ykimages_slideshow_pn_btn_nxt').addClass('ykdisabled');
   												$('.ykimages_slideshow_pn_btn_previous').addClass('ykdisabled');
   												
   
   												$('.yk_just_images_in_this_div img').first().hide();					
   		
   												$('.yk_just_images_in_this_div img').first().next().fadeIn(1000, function(){
   													
   																							
   															$('.yk_audios_div div').first().find('audio').attr('id', 'yk_audio');
   															var audio = document.getElementById("yk_audio"); 
   		                                             		function playAudio() { 
   															 audio.play(); 
   																} 													
   															
   															playAudio();
   															rearrangingAudio_NextBtn();
   															
   															//Hiding and showing the text : 
   															$(".text_showing").removeClass("text_showing");															
   															$('.yk_the_word_for_the_pic p').first().addClass('text_showing'); 													
   															$(".yk_the_word_for_the_pic p").first().show();
   																															
   												});			
   																																										
   												var nextslide = $('.yk_just_images_in_this_div img').first();																								
   												$('.yk_just_images_in_this_div').append(nextslide);
   																								
   												
   												
   										}
   										else
   										{
   										alert('Please wait until the sound plays'); 	
   										}
   						
   										
   
   				
   										
   		    			
   				});	
   				$(".ykimages_slideshow_pn_btn_previous").click(function(){
   										 						
   										if (disabled != 1)
   										{ 		
   										        disabled = 1; 
   												
   												//Hiding and showing the text : 
   												$(".text_showing").hide();
   												var textshowing = $(".yk_the_word_for_the_pic p").last(); 
   												$('.yk_the_word_for_the_pic').prepend(textshowing);
   												
   												//Just adding the css which makes the button look disabled
   												$('.ykimages_slideshow_pn_btn_nxt').addClass('ykdisabled');
   												$('.ykimages_slideshow_pn_btn_previous').addClass('ykdisabled');
   												
   												$('.yk_just_images_in_this_div img').first().hide();					
   		
   												$('.yk_just_images_in_this_div img').last().fadeIn(1000, function(){
   													
   															$('.yk_audios_div div').last().prev().find('audio').attr('id', 'yk_audio3'); 
   																															
   															var audio = document.getElementById("yk_audio3"); 
   										
   		                                             		function playAudio() { 
   															 audio.play(); 
   																} 													
   															
   															playAudio();
   															rearrangingAudio_PreviousBtn();	
   															
   															//Hiding and showing the text : 
   															$(".text_showing").removeClass("text_showing");															
   															$('.yk_the_word_for_the_pic p').first().addClass('text_showing'); 													
   															$(".yk_the_word_for_the_pic p").first().show();		
   																											
   												});	
   												
   												
   																		
   																																										
   												var previousslide = $('.yk_just_images_in_this_div img').last();																								
   												$('.yk_just_images_in_this_div').prepend(previousslide);
   																								
   												
   												
   										}
   										else
   										{
   										alert('Please wait until the sound plays'); 	
   										}
   						
   										
   
   				
   										
   		    			
   				});	
   				
   				//Allowing audio to be played and then enabling the next and prev. buttons again after a certain amount of time :
   				function rearrangingAudio_NextBtn() {
   												setTimeout(function(){
   													
   													//Just removing the css which makes the buttons look disabled
   													$('.ykimages_slideshow_pn_btn_nxt').removeClass('ykdisabled');
   													$('.ykimages_slideshow_pn_btn_previous').removeClass('ykdisabled');
   													
   													disabled = 0;
   													var fdiyad = $('.yk_audios_div div').first(); // = first div in yk_audios_div
   													$('.yk_audios_div').append(fdiyad);											
   													$("#yk_audio").removeAttr("id");
   												}, 4000);//This is how long it takes for the buttons to be in use again	and therefore should be long enough for the audio to be played.
   								   }	
   				function rearrangingAudio_PreviousBtn() {
   												setTimeout(function(){
   													
   													//Just removing the css which makes the buttons look disabled
   													$('.ykimages_slideshow_pn_btn_nxt').removeClass('ykdisabled');
   													$('.ykimages_slideshow_pn_btn_previous').removeClass('ykdisabled');
   													
   													disabled = 0;
   													var ldiyad = $('.yk_audios_div div').last(); // = last div in yk_audios_div
   													$('.yk_audios_div').prepend(ldiyad);																						
   													$("#yk_audio3").removeAttr("id");//This is how long it takes for the buttons to be in use again and therefore should be long enough for the audio to be played.
   												}, 4000);
   								   }	
   				
   
   /*------------VOCAB WORDS PAGES = 
   
   /*--------------------When slideshow modal first opens--------------------*/
   
   				$(".ykslideshowstart_VOCAB").click(function(){	
   				
   				//where at - need to make the text change when you click the 'previous' button
   				       
   					     
   	     			   
   									if (disabled != 1)
   									{				  		
   								
   											   disabled = 1;
   										   
   												function mf2() {
   													setTimeout(function(){
   																		$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').removeClass('ykdisabled');
   																		$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').removeClass('ykdisabled');
   																		$('#yk_audio2').removeAttr("id"); 
   																		disabled = 0;
   																		}, 1500);//This is how long it takes for the buttons to be in use again 					and therefore should be long enough for the audio to be played.
   																	
   												}
   												
   												
   												$('#dialog').dialog({height: "500", width: "70%", modal: true, open:function(){setTimeout(function(){
   																		
   																		
   																		$(".yk_the_word_for_the_pic p").first().show();
   																		$(".yk_the_word_for_the_pic p").first().addClass('text_showing');
   																																			
   																		
   																		$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').addClass('ykdisabled');
   																		$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').addClass('ykdisabled');
   																		$('.yk_audios_div div').last().find('audio').attr('id', 'yk_audio2'); 
   																		var audio = document.getElementById("yk_audio2"); 
   																																			
   																		
   																		function playAudio() { 
   																		audio.play(); 
   																		}
   																		playAudio();
   																		mf2();
   															
   																		
   																	}, 100);}, resizable: true});
   															
   												
   									}
   									else
   									{
   									alert('Please wait until the sound plays'); 	
   									}
     	 
   				
   				
   			     });
   				 
   /*--------------------Clicking on the next and previous buttons after the modal is open--------------------*/
   
   				$(".ykimages_slideshow_pn_btn_nxt_VOCABPAGE").click(function(){
   										 						
   										if (disabled != 1)
   										{ 		
   										        disabled = 1; 
   												
   												//Hiding and showing the text : 
   												$(".text_showing").hide();
   												var textshowing = $(".yk_the_word_for_the_pic p").first(); 
   												$('.yk_the_word_for_the_pic').append(textshowing);
   												
   												//Just adding the css which makes the button look disabled
   												$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').addClass('ykdisabled');
   												$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').addClass('ykdisabled');
   												
   												$('.yk_just_images_in_this_div img').first().hide();					
   		
   												$('.yk_just_images_in_this_div img').first().next().fadeIn(1000, function(){
   													
   																							
   															$('.yk_audios_div div').first().find('audio').attr('id', 'yk_audio');
   															var audio = document.getElementById("yk_audio"); 
   		                                             		function playAudio() { 
   															 audio.play(); 
   																} 													
   															
   															playAudio();
   															rearrangingAudio_NextBtn_VOCAB();
   															
   															//Hiding and showing the text : 
   															$(".text_showing").removeClass("text_showing");															
   															$('.yk_the_word_for_the_pic p').first().addClass('text_showing'); 													
   															$(".yk_the_word_for_the_pic p").first().show();
   																															
   												});			
   																																										
   												var nextslide = $('.yk_just_images_in_this_div img').first();																								
   												$('.yk_just_images_in_this_div').append(nextslide);
   																								
   												
   												
   										}
   										else
   										{
   										alert('Please wait until the sound plays'); 	
   										}
   						
   										
   
   				
   										
   		    			
   				});	
   
   				$(".ykimages_slideshow_pn_btn_previous_VOCABPAGE").click(function(){
   										 						
   										if (disabled != 1)
   										{ 		
   										        disabled = 1; 
   												
   												//Hiding and showing the text : 
   												$(".text_showing").hide();
   												var textshowing = $(".yk_the_word_for_the_pic p").last(); 
   												$('.yk_the_word_for_the_pic').prepend(textshowing);
   												
   												//Just adding the css which makes the button look disabled
   												$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').addClass('ykdisabled');
   												$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').addClass('ykdisabled');
   												
   												$('.yk_just_images_in_this_div img').first().hide();					
   		
   												$('.yk_just_images_in_this_div img').last().fadeIn(1000, function(){
   													
   															$('.yk_audios_div div').last().prev().find('audio').attr('id', 'yk_audio3'); 
   																															
   															var audio = document.getElementById("yk_audio3"); 
   										
   		                                             		function playAudio() { 
   															 audio.play(); 
   																} 													
   															
   															playAudio();
   															rearrangingAudio_PreviousBtn_VOCAB();	
   															
   															//Hiding and showing the text : 
   															$(".text_showing").removeClass("text_showing");															
   															$('.yk_the_word_for_the_pic p').first().addClass('text_showing'); 													
   															$(".yk_the_word_for_the_pic p").first().show();		
   																											
   												});	
   												
   												
   																		
   																																										
   												var previousslide = $('.yk_just_images_in_this_div img').last();																								
   												$('.yk_just_images_in_this_div').prepend(previousslide);
   																								
   												
   												
   										}
   										else
   										{
   										alert('Please wait until the sound plays'); 	
   										}
   						
   										
   
   				
   										
   		    			
   				});
   				
   				//Allowing audio to be played and then enabling the next and prev. buttons again after a certain amount of time :
   				function rearrangingAudio_NextBtn_VOCAB() {
   												setTimeout(function(){
   													
   													//Just removing the css which makes the buttons look disabled
   													$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').removeClass('ykdisabled');
   													$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').removeClass('ykdisabled');
   													
   													disabled = 0;
   													var fdiyad = $('.yk_audios_div div').first(); // = first div in yk_audios_div
   													$('.yk_audios_div').append(fdiyad);											
   													$("#yk_audio").removeAttr("id");
   												}, 1500);//This is how long it takes for the buttons to be in use again	and therefore should be long enough for the audio to be played.
   								   }	
   				function rearrangingAudio_PreviousBtn_VOCAB() {
   												setTimeout(function(){
   													
   													//Just removing the css which makes the buttons look disabled
   													$('.ykimages_slideshow_pn_btn_nxt_VOCABPAGE').removeClass('ykdisabled');
   													$('.ykimages_slideshow_pn_btn_previous_VOCABPAGE').removeClass('ykdisabled');
   													
   													disabled = 0;
   													var ldiyad = $('.yk_audios_div div').last(); // = last div in yk_audios_div
   													$('.yk_audios_div').prepend(ldiyad);																						
   													$("#yk_audio3").removeAttr("id");//This is how long it takes for the buttons to be in use again and therefore should be long enough for the audio to be played.	
   												}, 1500);
   								   }	
   				
   
   
   //---------------------------------------------------------------------------------------------
   
   
   
   
   
   //---------------------------------------------------------------------------------------------
   
   }); 
   
   
