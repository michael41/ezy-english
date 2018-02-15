

$(document).ready(function(){



			alert('coming again from custom js file for convo game'); 

	
//-----------------------------------VARIABLES----------------------------------------------------
var count = 6000;    
var counter;
var correct_answers = 0; 
var guesses = 0;
var dialogue_part = 1; 
var score;
var scoreRounded;
var quicklygotoend = false; 
var score_to_be_posted;

	
	
	
//-----------------------------------FUNCTIONS----------------------------------------------------	
//Timer Function
function timer(){
		 
						 //Count backwards
						 count--;
						 document.getElementById("yk_cg_time").innerHTML = count / 100;
				
						 //If the timer reaches 0		 
						 if (count <= 0)
						{
							clearInterval(counter);
							$('.yk_fail').show(); 
							$('.yk_fail').siblings().hide();	
							
							return;
						}
		 
			    }
	
//Getting Score Function
function gettingScore() {
								
							$('.yk_cg_correct_guesses').html(correct_answers);
								
							guesses ++;							
							$('.yk_cg_guesses').html(guesses);
								
							score = (correct_answers/guesses)*100;
							scoreRounded = Math.round(score*10)/10; 						
							
							$('.yk_cg_score').html(scoreRounded + "%");
							
				        }
						
						


//-----------------------------------EVENTS-------------------------------------------------------					
//Quickly go to end temporary button : 
$('#quicklygototheend').click(function(){
	
	alert('okay'); 
	quicklygotoend = true; 
	dialogueParts(); 
	
	});

//Clicking on the Start Game Button :
$('#yk_convogame_startgame').click(function(){	
		
					//Show the dialogue section, but only the left section initially, and not the second, third dialgogues etc :
					$('.yk_convogame_score').show(); 
					$('.yk_dialoguegame_wrapper').show(); 
					$('.yk_dialgame_dialogues').show(); 
					$('.yk_left_person_dialoguegame').show(); 
					$('.yk_right_person_dialoguegame').hide(); 
					$('#dialoguegame2').hide(); $('#dialoguegame3').hide(); $('#dialoguegame4').hide(); 
					
					//Hide the start button
					$('#yk_convogame_startgame').hide(); 
					
					//Start the timer function : 
					counter = setInterval(timer, 10); //10 will  run it every 100th of a second
		
		
		});
		
//Reloading the page after time has elapsed :
$('.ykreloadpage').click(function(){location.reload();});
	
//When the first dropdown menu is changed :
$(".select_1").change(function(){

			  //Collect the id of the element selected : 
			  var id = $(this).find("option:selected").attr("id");
			  
			  //Depending on what option was selected, do the following : 
			  switch (id){
				 
				//When option 1 has been selected, incorrect answer :  : 
				case "option1":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
			
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice1').css("color", "red");
				$('.choice1').css("font-weight", "bold");
				$(".yesorno1").attr("src","../Images/Dialogue_Game/x.png"); 				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice1').css("color", "black");
				$('.choice1').css("font-weight", "normal");	
				$(".yesorno1").removeAttr("src");
				}, 1000); 	
						
				break;
				
				//When option 2 has been selected, correct answer : 
				case "option2":	
				
				//Add to the correct answers count : 
				correct_answers ++; 
				
				//Get the gettingScore function to show the scores : 
				gettingScore();	
							
				//Hide the dropdown menu and show the correct answer and the subquestion
				$('.select_1').hide(); 
				$('.answer1').show();  					 
				
				//Show the tick sign image to show it's the correct answer 
				$(".yesorno1").attr("src","../Images/Dialogue_Game/tick_small.png");				
				
				//After half a second show the subquestion : 
				setTimeout(function(){ 
				$('.choice1_subquestion').show();	
				}, 500);				
				
			    //After 1 second show the 2nd dialogue part 
				setTimeout(function(){ 
				$('.yk_right_person_dialoguegame').show();								
				}, 1000); 
					
			 
								
				break;
				
				//When option 3 has been selected, incorrect answer : 
				case "option3":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
				
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice1').css("color", "red");
				$('.choice1').css("font-weight", "bold");
				$(".yesorno1").attr("src","../Images/Dialogue_Game/x.png"); 
				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice1').css("color", "black");
				$('.choice1').css("font-weight", "normal");	
				$(".yesorno1").removeAttr("src");
				}, 1000); 
						 
				break;
				
			  }
			  
});


//When the second dropdown menu is changed :
$(".select_2").change(function(){

			  //Collect the id of the element selected : 
			  var id = $(this).find("option:selected").attr("id");
			  
			  //Depending on what option was selected, do the following : 
			  switch (id){
				 
				//When option 1 has been selected, incorrect answer :  : 
				case "option1":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
			
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice2').css("color", "red");
				$('.choice2').css("font-weight", "bold");
				$(".yesorno2").attr("src","../Images/Dialogue_Game/x.png"); 				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice2').css("color", "black");
				$('.choice2').css("font-weight", "normal");	
				$(".yesorno2").removeAttr("src");
				}, 1000); 	
						
				break;
				
				//When option 2 has been selected, correct answer : 
				case "option2":	
				
				//Add to the correct answers count : 
				correct_answers ++; 
				
				//Get the gettingScore function to show the scores : 
				gettingScore();	
							
				//Hide the dropdown menu and show the correct answer and the subquestion
				$('.select_2').hide(); 
				$('.answer2').show();  					 
				
				//Show the tick sign image to show it's the correct answer 
				$(".yesorno2").attr("src","../Images/Dialogue_Game/tick_small.png");				
				
				//After half a second show the subquestion : 
				setTimeout(function(){ 
				$('.choice2_subquestion').show();	
				}, 500);				
				
			    //After 1 second show the 3rd dialogue part and change font for first 2 sentences
				setTimeout(function(){ 
				$('.yk_left_person_dialoguegame_2').show();		
				$('.yk_left_person_dialoguegame p').css('font-size', '10px');
				$('.yk_right_person_dialoguegame p').css('font-size', '10px'); 						
				}, 1000); 
					
			 
								
				break;
				
				//When option 3 has been selected, incorrect answer : 
				case "option3":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
				
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice2').css("color", "red");
				$('.choice2').css("font-weight", "bold");
				$(".yesorno2").attr("src","../Images/Dialogue_Game/x.png"); 
				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice2').css("color", "black");
				$('.choice2').css("font-weight", "normal");	
				$(".yesorno2").removeAttr("src");
				}, 1000); 
						 
				break;
				
			  }
			  
});

//When the third dropdown menu is changed :
$(".select_3").change(function(){

			  //Collect the id of the element selected : 
			  var id = $(this).find("option:selected").attr("id");
			  
			  //Depending on what option was selected, do the following : 
			  switch (id){
				 
				//When option 1 has been selected, incorrect answer :  : 
				case "option1":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
			
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice3').css("color", "red");
				$('.choice3').css("font-weight", "bold");
				$(".yesorno3").attr("src","../Images/Dialogue_Game/x.png"); 				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice3').css("color", "black");
				$('.choice3').css("font-weight", "normal");	
				$(".yesorno3").removeAttr("src");
				}, 1000); 	
						
				break;
				
				//When option 2 has been selected, incorrect answer : 
				case "option2":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
				
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice3').css("color", "red");
				$('.choice3').css("font-weight", "bold");
				$(".yesorno3").attr("src","../Images/Dialogue_Game/x.png"); 
				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice3').css("color", "black");
				$('.choice3').css("font-weight", "normal");	
				$(".yesorno3").removeAttr("src");
				}, 1000); 
						 
				break;
								
				//When option 3 has been selected, correct answer : 
				case "option3":	
				
				//Add to the correct answers count : 
				correct_answers ++; 
				
				//Get the gettingScore function to show the scores : 
				gettingScore();	
							
				//Hide the dropdown menu and show the correct answer and the subquestion
				$('.select_3').hide(); 
				$('.answer3').show();  					 
				
				//Show the tick sign image to show it's the correct answer 
				$(".yesorno3").attr("src","../Images/Dialogue_Game/tick_small.png");				
				
				//After half a second show the subquestion : 
				setTimeout(function(){ 
				$('.choice3_subquestion').show();	
				}, 500);				
				
			    //After 1 second show the 4th dialogue part 
				setTimeout(function(){ 
				$('.yk_right_person_dialoguegame_2').show();								
				}, 1000); 
					
			 
								
				break;
				
				
				
			  }
			  
});

//When the fourth dropdown menu is changed :
$(".select_4").change(function(){

			  //Collect the id of the element selected : 
			  var id = $(this).find("option:selected").attr("id");
			  
			  //Depending on what option was selected, do the following : 
			  switch (id){
				 
				//When option 1 has been selected, correct answer : 
				case "option1":	
				
				//Add to the correct answers count : 
				correct_answers ++; 
				
				//Get the gettingScore function to show the scores : 
				gettingScore();	
							
				//Hide the dropdown menu and show the correct answer and the subquestion
				$('.select_4').hide(); 
				$('.answer4').show();  					 
				
				//Show the tick sign image to show it's the correct answer 
				$(".yesorno4").attr("src","../Images/Dialogue_Game/tick_small.png");				
				
				//After half a second show the subquestion : 
				setTimeout(function(){ 
				$('.choice4_subquestion').show();	
				}, 500);				
				
			    //After 1 second change font size and show next dialogue game, restore dropdown settings :  
				setTimeout(function(){ 
				
							//Call the dialogue parts function to get a new dialogue
							dialogueParts(); 
							
							//Change the font size back 
							$('.dialgame_dial p').css('font-size', '25px');
			
							//Hide, show etc. the appropriate content : 
							$('.yk_right_person_dialoguegame').hide(); 
							$('.yk_left_person_dialoguegame_2').hide();	
							$('.yk_right_person_dialoguegame_2').hide();
							$('.yk_answers').hide();				
							$('.yk_csq').hide();	
							$(".tick_or_x_image").removeAttr("src");				
							$('.dialgame_dial').show();			 	
							$('.choice1').show();			
							$('.choice2').show(); 
							$('.choice3').show();
							$('.choice4').show(); 
							$('.select_1').show();			
							$('.select_2').show();
							$('.select_3').show();
							$('.select_4').show();	
				
				}, 1000); 
					
			 
								
				break;
				
				//When option 2 has been selected, incorrect answer : 
				case "option2":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
				
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice4').css("color", "red");
				$('.choice4').css("font-weight", "bold");
				$(".yesorno4").attr("src","../Images/Dialogue_Game/x.png"); 
				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice4').css("color", "black");
				$('.choice4').css("font-weight", "normal");	
				$(".yesorno4").removeAttr("src");
				}, 1000); 
						 
				break;			
				
				//When option 3 has been selected, incorrect answer :  : 
				case "option3":
				
				//Get the gettingScore function to show the scores : 
				gettingScore();
			
				//make bold and red and show x image temporarily to show it's incorrect : 
				$('.choice4').css("color", "red");
				$('.choice4').css("font-weight", "bold");
				$(".yesorno4").attr("src","../Images/Dialogue_Game/x.png"); 				
				
				//Put it back to black and font weight back to normal and put image back to blank :
				setTimeout(function(){ 
				$('.choice4').css("color", "black");
				$('.choice4').css("font-weight", "normal");	
				$(".yesorno4").removeAttr("src");
				}, 1000); 	
						
				break;
				
				
				
			  }
			  
});
	


});