

<!-- Include the Vocab Words Game sheet -->
<?php include '../JS/Vocab_Words_Game_Code.php';?>

<body class="Dropdown_2_pages">


<!-- From Previous :getting the top nav -->
<!--
<div class="fixed">
<?php 
//$topnav = file_get_contents('../HTML/TopNav.html');
//echo $topnav;
?>
</div>
-->


<!--Main Body-->
<div class="row ykmainbodywrapper">


         <!-- Get the left nav -->
		<?php 
		$leftnav = file_get_contents('../HTML/LeftNav.html');
		echo $leftnav;
		?>    

	    <!--MAIN BODY COLUMN-->
	    <div class="small-6 columns ykmainbody">
        
        	<div class="yk_clickintoimage">
        		 <h2 class="ykpageheadings">Jobs Game - Mix and Match</h2>      			
  		    </div>

            <div class="yk_instructions_initial">
                <p>Drag the word over to the correct picture.</p> 
            </div>
        
        	<!-- COMMENTING OUT 'QUICK GO TO END BUTTON' -->
            <!-- <div class="yk_qgtend">
            <button id="yk_qgtend_btn">Quick go to end</button>            
            </div> -->
           
            
            <div class="yk_start">
            <button id="yk_startgame">Start</button>            
            </div>
            
            <!--
            <div class="yk_quit">
            <button id="yk_quitgame">Reset</button>              	       
            </div>
            -->

               
            
       		<div class="yk_results">  
            
            <p><strong>Score</strong> : <span class="yk_results_score"></span>%</p>
            <p><strong>Time Bonus</strong> : <span class="yk_results_time_bonus"></span></p>
            <hr />
            <p><strong>Total Score</strong> : <span class="yk_results_total_score"></span> </p>
            <p class="yk_score_summary">Congratulations! Your total score is <span class="yk_results_total_score"></span></p>
           <!--  <p class="yk_highscoressoon"><i>High scores section coming soon</i></p> -->
                 
            
            </div> 
                    
            <div class="yk_quit_scores">
                	<p>Because you quit, we gave you 1000 guesses!</p>
                    <p>Your score is <span class="yk_quit_score_score"></span>%</p>
            </div> 
            
            <div class="yk_enter_your_name">
            <p>Enter your name :<br />
            <form id ="yk_form_enter_name" method="post">
            <input type="text" name="personsname" required><br />
            <input type="submit" class="button"><br />          
            </form>
            </p>
            </div>
            
            <div class="yk_tryagain">
            
            <a class='button ykreloadpage'>Try again</a>
            
            </div>
            
           
            <div class="yk_testing_delsoon">
          
            </div>
            
            
            <div class="yk_fail">
            <p>Times up!!! Hard luck.</p>
            <a class='button ykreloadpage'>Try again</a> 
            </div>
            
            <div class="yk_match_the_pic_with_the_word" id="main">
         				
                         	  
                            <div class="position orig_position_0" id="0">
                            <div class="ykheightauto">
                                        <div class="vocab1 yk_word_for_matching">
                                            <p id="word_no_1"></p>
                                        </div>
                                        <div class="vocab2_img yk_image_for_matching">
                                            <img id="pic_no_1" src="" /><img src="../Images/tick.png" id="yk_tick_vocab2"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>  
                            
                            <div class="position orig_position_1" id="1">
                            <div class="ykheightauto">
                                        <div class="vocab2 yk_word_for_matching">
                                            <p id="word_no_2"></p>
                                        </div>
                                        <div class="vocab3_img yk_image_for_matching">
                                            <img id="pic_no_2" src="" /><img src="../Images/tick.png" id="yk_tick_vocab3"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div>  
                            </div>
                            
                            <div class="position orig_position_2" id="2">
                            <div class="ykheightauto">
                                        <div class="vocab3 yk_word_for_matching">
                                            <p id="word_no_3"></p>
                                        </div>
                                        <div class="vocab4_img yk_image_for_matching" >
                                            <img id="pic_no_3" src="" /><img src="../Images/tick.png" id="yk_tick_vocab4"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                            <div class="position orig_position_3" id="3">
                            <div class="ykheightauto">
                                        <div class="vocab4 yk_word_for_matching">
                                            <p id="word_no_4"></p>
                                        </div>
                                        <div class="vocab5_img yk_image_for_matching" >
                                            <img id="pic_no_4" src="" /><img src="../Images/tick.png" id="yk_tick_vocab5"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                            <div class="position orig_position_4" id="4">
                            <div class="ykheightauto">
                                        <div class="vocab5 yk_word_for_matching">
                                            <p id="word_no_5"></p>
                                        </div>
                                        <div class="vocab6_img yk_image_for_matching" >
                                            <img id="pic_no_5" src="" /><img src="../Images/tick.png" id="yk_tick_vocab6"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                            <div class="position orig_position_5" id="5">
                            <div class="ykheightauto">
                                        <div class="vocab6 yk_word_for_matching">
                                            <p id="word_no_6"></p>
                                        </div>
                                        <div class="vocab7_img yk_image_for_matching" >
                                            <img id="pic_no_6" src="" /><img src="../Images/tick.png" id="yk_tick_vocab7"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                            <div class="position orig_position_6" id="6">
                            <div class="ykheightauto">
                                        <div class="vocab7 yk_word_for_matching">
                                            <p id="word_no_7"></p>
                                        </div>
                                        <div class="vocab8_img yk_image_for_matching" >
                                            <img id="pic_no_7" src="" /><img src="../Images/tick.png" id="yk_tick_vocab8"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                            <div class="position orig_position_7" id="7">
                            <div class="ykheightauto">
                                        <div class="vocab8 yk_word_for_matching">
                                            <p id="word_no_8"></p>
                                        </div>
                                        <div class="vocab1_img yk_image_for_matching" >
                                            <img id="pic_no_8" src="" /><img src="../Images/tick.png" id="yk_tick_vocab1"/>
                                        </div>
							</div>    
   							<div class="ykclearboth"></div> 
                            </div>
                            
                        
                                     
            </div>
            
            <!--
            <div id="ykrandomizediv">
             <a class="button ykrandomizebtn">Randomize</a>
            </div>
            -->
            
            
            
                               

            
            
            

	    </div>
        
        
         <!--RIGHT NAV COLUMN-->
        <div class="small-3 columns ykrightnav">

                     
            <div class="yk_score">
                            <div class="row yk_scoringsystem">

                                    <div class="small-4 columns">
                                        <p><strong>Guesses made</strong></p>
                                        <p class="yk_guesses"></p>
                                    </div>
                            
                                    <div class="small-4 columns">
                                        <p><strong>Correct guesses</strong></p>
                                        <p class="yk_correct_guesses"></p>
                                    </div>
                                          
                                    <div class="small-4 columns">
                                        <p><strong>Time remaining</strong></p>
                                        <p id="yk_time"></p>
                                    </div>

                            </div>

            </div>


            <div class="yk_instructions">
                <p>Drag the word over to the correct picture.</p> 
            </div>
                     


        </div>   

        


</div>

</body>
</html>