


<?php 

//Session start
session_start();

//Get the head
$head = file_get_contents('../HTML/Head.html');
echo $head;

//Getting the first part of the URL ('greetings', 'jobs', etc.) as a variable 
//------------------------------------------------------------------------------------
//collect the url : 
$basename =  basename($_SERVER['PHP_SELF']);
//split it after '_' and using 'list' create variables for each part of the array (eg - greetings, vocab, page)
list($topic_name, $second, $third) = explode("_", $basename);


// Open the images directory, and read its contents
$img_dir = "../Images/Images8InEach/Vocab/" . $topic_name . "/";
$images = scandir($img_dir);

// Open the audio directory, and read its contents
$audio_dir = "../Audio/" . $topic_name . "/Vocab";
$audioz = scandir($audio_dir);



?>






<script>

$(document).ready(function() {


	//Getting the first part of the URL ('greetings', 'jobs', etc.) as a variable 
	var this_page_url = location.pathname; //collect url of page
	var res = this_page_url.split("/"); //split url with '/'
	var res2 = res[4].split("_"); //split the 5th part of the url with '_'
	var topic_for_this_page = res2[0]; //create as variable the 1st part of the string (which will be 'greetings', or 'hobbies', etc.)
	console.log(topic_for_this_page);
		
		
	var score = 0;
	var guesses = 0;  
	var quit = false; 
	var count = 6000;    
    var counter; 
	var quickgotoend = false; 

	//--------------------------------------------------------------------------------------------
	//Start the game  : 
	//--------------------------------------------------------------------------------------------

	//Hide the mix and match main section
	$('.yk_match_the_pic_with_the_word').hide(); 
	
	//Hide the 'Quit Game' button and the 'Quit Game' scores section and 'Enter your name' part and 'try again' section
	$('#yk_quitgame').hide(); $('.yk_quit_scores').hide(); $('.yk_enter_your_name').hide(); $('.yk_tryagain').hide(); 
	//temp = 
	$('.yk_qgtend').hide(); 
	
 
	
	
	//When the 'start game' button is clicked : 
	$('#yk_startgame').click(function(){
		
		//temp = 
		$('.yk_qgtend').show(); 

		ykrandomizerandomize(); 		
		
		//start the game functionality - mainly just for the timer
		startTheGame();

		// Hide the initial instructions and show the instructions that'll appear on the right nav
		$('.yk_instructions_initial').hide(); $('.yk_instructions').show();

		$('.yk_score').show(); 

		
		//show the mix and match section 
		$('.yk_match_the_pic_with_the_word').show();  
		
		//Hide the 'Start Game' button 
		$('#yk_startgame').hide(); 
		
		//Show the 'Quit Game' button 
		$('#yk_quitgame').show(); 
		
		//Put in the guesses and correct guesses scores as 0
		$('.yk_guesses').html('0');
		$('.yk_correct_guesses').html('0'); 
		

		});
		
		//When the 'quit game' button is clicked : 
		$('#yk_quitgame').click(function(){
			
			stopTimer(); 
			

		});
		
	$('#yk_qgtend_btn').click(function(){
		
		
		 $('.yk_match_the_pic_with_the_word').hide(); 
		 quickgotoend = true; 
		
		}); 
		
	//--------------------------------------------------------------------------------------------
	//Populate the page with the file names from the html : 
	//------------------------------------------------------IMAGES AND WORDS-----------------------------------------------\\
	//--------------------------------------------------------------------------------------------
	
    //Grab the text for the php pulling it from the directory
	var word1 = "<?php echo $images[2]; ?>";
	var word2 = "<?php echo $images[3]; ?>";
	var word3 = "<?php echo $images[4]; ?>";
	var word4 = "<?php echo $images[5]; ?>";
	var word5 = "<?php echo $images[6]; ?>";
	var word6 = "<?php echo $images[7]; ?>";
	var word7 = "<?php echo $images[8]; ?>";
	var word8 = "<?php echo $images[9]; ?>";

	
	//Create .jpg src variables calculated from the vocab in the html 
	var src1 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word1;
	var src2 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word2;
	var src3 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word3;
	var src4 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word4;
	var src5 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word5;
	var src6 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word6;
	var src7 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word7;
	var src8 = "../Images/Images8InEach/Vocab/" + topic_for_this_page + "/" + word8;

	
	
	//Assign picture no.1 to word no.2
	$('#pic_no_1').attr("src", src2);
	
	//Assign picture no.2 to word no.3
	$('#pic_no_2').attr("src", src3);
	
	//Assign picture no.3 to word no.4
	$('#pic_no_3').attr("src", src4);
	
	//Assign picture no.4 to word no.5
	$('#pic_no_4').attr("src", src5);
	
	//Assign picture no.5 to word no.6
	$('#pic_no_5').attr("src", src6);
	
	//Assign picture no.6 to word no.7
	$('#pic_no_6').attr("src", src7);
	
	//Assign picture no.7 to word no.8
	$('#pic_no_7').attr("src", src8);
	
	//Assign picture no.8 to word no.1
	$('#pic_no_8').attr("src", src1);
	
	//Add the words = 
	
	//Populate normal slideshow words
	
			//Remove extensions first = 
			var no_ext_word1 = word1;
			var true_word_1 = no_ext_word1.substring(0,no_ext_word1.indexOf('.'));
			
			var no_ext_word2 = word2;
			var true_word_2 = no_ext_word2.substring(0,no_ext_word2.indexOf('.'));
			
			var no_ext_word3 = word3;
			var true_word_3 = no_ext_word3.substring(0,no_ext_word3.indexOf('.'));
			
			var no_ext_word4 = word4;
			var true_word_4 = no_ext_word4.substring(0,no_ext_word4.indexOf('.'));
			
			var no_ext_word5 = word5;
			var true_word_5 = no_ext_word5.substring(0,no_ext_word5.indexOf('.'));
			
			var no_ext_word6 = word6;
			var true_word_6 = no_ext_word6.substring(0,no_ext_word6.indexOf('.'));
			
			var no_ext_word7 = word7;
			var true_word_7 = no_ext_word7.substring(0,no_ext_word7.indexOf('.'));
			
			var no_ext_word8 = word8;
			var true_word_8 = no_ext_word8.substring(0,no_ext_word8.indexOf('.'));
	
	$('#word_no_1').html(true_word_1);
	$('#word_no_2').html(true_word_2);
	$('#word_no_3').html(true_word_3);
	$('#word_no_4').html(true_word_4);
	$('#word_no_5').html(true_word_5);
	$('#word_no_6').html(true_word_6);
	$('#word_no_7').html(true_word_7);
	$('#word_no_8').html(true_word_8);
	
	//Note - idea of easier way of doing algorithm for mix and matching :
	//if britishisles == britishisles, etc. 

	
	//--------------------------------------------------------------------------------------------
	//Randomize  : 
	//--------------------------------------------------------------------------------------------

	function ykrandomizerandomize() {
	
	//Create an array - try to make it variable array if you can 
	var array = [0, 1, 2, 3, 4, 5, 6, 7];

	
	function ykrandomize () {
		
		//Get a random number from the array 
		var randomnumber = Math.floor(Math.random() * array.length);	

		//Collect 'the spliced one' - ie : the number that is to be taken out of the array as a variable
		var thesplicedone = array.splice(randomnumber, 1);

	    //Return the spliced one when this function is called            
		return thesplicedone; 

	}


	function firstone() {
	setTimeout(function(){

		//Call the ykrandomize function and collect what has been returned from it (ie - the spiced number) as a variable
		var the_spliced_number = ykrandomize(); 
		
		//Now change the original '0' position to the spliced number from the array. Do the same for #1, #2, etc. from the proceeding functions below
		$(".orig_position_0").attr("id", the_spliced_number);
		
	
		
		}, 10);
	}	
	firstone(); 
	
	function secondone() {
	setTimeout(function(){
		
		var the_spliced_number = ykrandomize();
		$(".orig_position_1").attr("id", the_spliced_number); 

		
		}, 20);
	}	
	secondone(); 
	
	function thirdone() {
	setTimeout(function(){
		
			var the_spliced_number = ykrandomize(); 
			$(".orig_position_2").attr("id", the_spliced_number);
			
		}, 30);
	}	
	thirdone();
	
	function fourthone() {
	setTimeout(function(){
		
		 
		var the_spliced_number = ykrandomize(); 
		$(".orig_position_3").attr("id", the_spliced_number);
	
		}, 40);
	}	
	fourthone(); 
	
	function fifthone() {
	setTimeout(function(){
		
		 
		var the_spliced_number = ykrandomize(); 
		$(".orig_position_4").attr("id", the_spliced_number);
		
		}, 50);
	}	
	fifthone(); 
	
	function sixthone() {
	setTimeout(function(){	
		 
		var the_spliced_number = ykrandomize(); 
		$(".orig_position_5").attr("id", the_spliced_number);
		
		}, 60);
	}	
	sixthone(); 
	
	function seventhone() {
	setTimeout(function(){	
		 
		var the_spliced_number = ykrandomize(); 
		$(".orig_position_6").attr("id", the_spliced_number);
		
		}, 70);
	}	
	seventhone();
	
	function eightone() {
	setTimeout(function(){	
		 
		var the_spliced_number = ykrandomize(); 
		$(".orig_position_7").attr("id", the_spliced_number);
		
		}, 70);
	}	
	eightone();
	
	
	//Now sort the divs by id (0, 1, 2, etc)
	function putinplace() {
		setTimeout(function(){	
		 
							var main = document.getElementById( 'main' );							
							//JS code for sorting divs by id = 
							//http://jsfiddle.net/ZEKrH/6/
							[].map.call( main.children, Object ).sort( function ( a, b ) {
								return +a.id - +b.id;
							}).forEach( function ( elem ) {
								main.appendChild( elem );
							});
		
		}, 100);
	}
	putinplace();
	
	}
	
	
	//--------------------------------------------------------------------------------------------
	//Dragging and dropping to right ones  : 
	//--------------------------------------------------------------------------------------------
	
	
	
	//Hide results at start : 
	$('.yk_results').hide(); 	
	
	//Hide the tick sign : 
	$('#yk_tick_vocab1').css("visibility", 'hidden');
	$('#yk_tick_vocab2').css("visibility", 'hidden');
	$('#yk_tick_vocab3').css("visibility", 'hidden');
	$('#yk_tick_vocab4').css("visibility", 'hidden'); 
	$('#yk_tick_vocab5').css("visibility", 'hidden');
	$('#yk_tick_vocab6').css("visibility", 'hidden'); 
	$('#yk_tick_vocab7').css("visibility", 'hidden'); 
	$('#yk_tick_vocab8').css("visibility", 'hidden'); 

	
	function ifdroppedcorrectly () {	           
    guesses ++;
	score ++; 
	scoregot();	
    $(".yk_guesses").html(guesses);
	$(".yk_correct_guesses").html(score);
	}

	
	$(".vocab1").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable (ie - if you get match the word with the pic correctly!) :  
				//$(this).css("visibility", 'hidden'); //If you want to hide the text after answer is guessed correctly				
                $(".vocab1_img img").first().addClass("yk_image_for_matching_done"); 
				$('#yk_tick_vocab1').css("visibility", 'visible'); 
				ifdroppedcorrectly(); 
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   }); 
   
    $(".vocab2").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
                $(".vocab2_img img").first().addClass("yk_image_for_matching_done"); //TO DO : MAKE THESE TRAVERSIBLES (SIBLINGS ETC) 
				$('#yk_tick_vocab2').css("visibility", 'visible'); 
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++;
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score); 
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   }); 
   
    $(".vocab3").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
                $(".vocab3_img img").first().addClass("yk_image_for_matching_done"); 
				$('#yk_tick_vocab3').css("visibility", 'visible');
				ifdroppedcorrectly(); 
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   }); 
   
    $(".vocab4").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
				$(".vocab4_img img").first().addClass("yk_image_for_matching_done");
				$('#yk_tick_vocab4').css("visibility", 'visible'); 
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   });
   
    $(".vocab5").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
				$(".vocab5_img img").first().addClass("yk_image_for_matching_done");
				$('#yk_tick_vocab5').css("visibility", 'visible'); 
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   });
   
    $(".vocab6").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
				$(".vocab6_img img").first().addClass("yk_image_for_matching_done");
				$('#yk_tick_vocab6').css("visibility", 'visible');
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   });
   
    $(".vocab7").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
				$(".vocab7_img img").first().addClass("yk_image_for_matching_done");
				$('#yk_tick_vocab7').css("visibility", 'visible'); 
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   });
   
    $(".vocab8").draggable({
    revert : function(droppableContainer) {
            if(droppableContainer) {
				//If it's droppable :                 
				$(".vocab8_img").addClass("yk_image_for_matching_done");
				$('#yk_tick_vocab8').css("visibility", 'visible'); 
				ifdroppedcorrectly();
            }else {
				//if it's not droppable :                 
				guesses ++; 
				$(".yk_guesses").html(guesses);
				$(".yk_correct_guesses").html(score);
            }
            return(!droppableContainer) //returns the draggable to its original position
        }
   });

   
	$(".vocab1_img").droppable({accept: '.vocab1'});
	$(".vocab2_img").droppable({accept: '.vocab2'});
	$(".vocab3_img").droppable({accept: '.vocab3'});
	$(".vocab4_img").droppable({accept: '.vocab4'});
	$(".vocab5_img").droppable({accept: '.vocab5'});
	$(".vocab6_img").droppable({accept: '.vocab6'});
	$(".vocab7_img").droppable({accept: '.vocab7'});
	$(".vocab8_img").droppable({accept: '.vocab8'});
	
	
	
	$('.ykreloadpage').click(function(){
		
		location.reload();
		
	}); 
	
	
	//--------------------------------------------------------------------------------------------
	//Getting the scores and timer : 
	//--------------------------------------------------------------------------------------------
	
	function scoregot() {
		
		
		var finalscore_exact = (score/guesses)*100;  
		var finalscore = Math.round(finalscore_exact*100)/100; 
	
			if (score == 8) 
			{
				//With php session variables etc can get them to log in and keep track of score etc - for future use potentially 
				$('.yk_results').show(); 
				$('.yk_results_score').html(finalscore);
				$('.yk_match_the_pic_with_the_word').hide(); 
			}
	
	}
	
	
	$(".yk_fail").hide(); //Hide the 'fail screen' 
	
	
	function startTheGame() {
		
	counter = setInterval(timer, 10); //10 will  run it every 100th of a second
	
	}
	
	function stopTimer() {
		
		clearInterval(counter);
		$(".yk_match_the_pic_with_the_word").fadeOut(150);
		$(".yk_score").fadeOut(150);
		
		setTimeout(function()
		{			 		
		count = 6000;
		startTheGame();
		$('.yk_guesses').html('0');
		$('.yk_correct_guesses').html('0');
		score = 0;
		guesses = 0; 
		}, 300);
		
		$(".yk_match_the_pic_with_the_word").fadeIn(300);
		$(".yk_score").fadeIn(300);
	    ykrandomizerandomize();	
	

		 
	}
	
	
	 function timer()
    {
		 count--;
         document.getElementById("yk_time").innerHTML = count / 100; 
		
        if (count <= 0)
        {
            clearInterval(counter);
			$(".yk_fail").show(); 
			$(".yk_match_the_pic_with_the_word").hide();	
			$('.yk_score').hide();
			$('.yk_instructions').hide(); 		
            return;
         }
		 if ((score == 8) || (quit == true) || (quickgotoend == true))
		 {
			 var finalscore_exact = (score/guesses)*100;  
			 var finalscore = Math.round(finalscore_exact*100)/100;
			 var the_time_it_took = $("#yk_time").html();
			 var actual_time_int = parseInt(the_time_it_took);		 
			 var finalfinalscore = actual_time_int + finalscore; 
			 var score_to_be_posted = finalfinalscore;
			 
			 clearInterval(counter);
			
			 $('.yk_results_time_bonus').html(the_time_it_took);	
			
			 $('.yk_results_total_score').html(finalfinalscore);
			 
			 $('.yk_enter_your_name').show();
			 $('#yk_quitgame').hide();
			 $('.yk_instructions').hide(); 
			 $('.yk_score').hide(); 
			 

			 var correct_topic = topic_for_this_page + '_vocab_game_scores.php?val='; 
			

			 $('#yk_form_enter_name')
			 .attr('action', correct_topic + score_to_be_posted);
			 
			
			 
					 
			 return;
 
		 }
		 /*
		 + "</p><p><strong>Time Bonus</strong> : " + "</p><div style='border-top:1px solid; padding-top:15px; margin-top:10px;'><p><strong>Total Score</strong> :</p></div>" + "<p style='font-size:12px;'>Congratulations! Your total score is <strong>(insert score here)</strong></p>"
		 */

         
     }
	
	

	
	
	
	 
	 
	 //--------------------------------------------------------------------------------------------
	 //Quit - temp maybe - just to get to the scores part : 
	 //--------------------------------------------------------------------------------------------
	
	
	

	//--------------------------------------------------------------------------------------------
	//Randomize button (just reloads the page)  : 
	//--------------------------------------------------------------------------------------------
	/*
	$('.ykrandomizebtn').click(function(){
		
		location.reload();
		
	}); 
	*/

	
	
	});

</script>