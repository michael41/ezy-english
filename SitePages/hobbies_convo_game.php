

<!-- Include the Convo Game sheet -->
<?php include '../JS/Convo_Game_Code.php';?>

   </head>
<body class="Dropdown_3_pages">
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
         <!-- COMMENTING OUT 'QUICKLY GO TO END BUTTON'-->
         <!-- <button id="quicklygototheend">Quick to to end</button> -->
         <div class="yk_fail">
            <h2 class="ykpageheadings">Hobbies - Dialogue Game</h2>
            <p>Times up!!! Hard luck.</p>
            <a class='button ykreloadpage'>Try again</a> 
         </div>
         <div class="yk_clickintoimage">
            <h2 class="ykpageheadings">Hobbies - Dialogue Game</h2>
            <p class="yk_sca">Select the correct answers.</p>
         </div>
         <div class="yk_convogame_start">
            <button id="yk_convogame_startgame">Start</button>
            <p class="yk_cgr yk_convogame_round1">Round 1 of 4</p>  
            <p class="yk_cgr yk_convogame_round2">Round 2 of 4</p> 
            <p class="yk_cgr yk_convogame_round3">Round 3 of 4</p> 
            <p class="yk_cgr yk_convogame_round4">Round 4 of 4</p>          
         </div>
         <div class="yk_convogame_score">
            <div class="row yk_convogame_scoringsystem">
               <div class="small-3 columns">
                  <p><strong>Guesses</strong></p>
                  <p class="yk_cg_guesses"></p>
               </div>
               <div class="small-3 columns">
                  <p><strong>Correct guesses</strong></p>
                  <p class="yk_cg_correct_guesses"></p>
               </div>
               <div class="small-3 columns">
                  <p><strong>Score</strong></p>
                  <p class="yk_cg_score"></p>
               </div>
               <div class="small-3 columns">
                  <p><strong>Time remaining</strong></p>
                  <p id="yk_cg_time"></p>
               </div>
            </div>
         </div>
         <div class="yk_enter_your_name">
            <p>Total Score = <span class="yk_cg_perc_score"></span>% <strong>(% score)</strong> + <span class="yk_time_bonus"></span> <strong>(time bonus)</strong>  = <span class="yk_cg_total_overall_score"></span></p>
            <p>Congratulations! Your total score is <strong><span class="yk_cg_total_overall_score c1"></span></strong><br /><br />
               Enter your name :<br />
            <form id="yk_form_enter_name" method="post">
               <input type="text" name="personsname" required><br />
               <input type="submit" class="button"><br />          
            </form>
            </p>
         </div>


         <div class="yk_dialoguegame_wrapper" id="dialoguegame1">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/Kagawa.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/KatyPerrySwimming.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose an answer-- </option>
                           <option id="option1">do hobbies do you want?</option>
                           <option id="option2">do in your free time?</option>
                           <option id="option3">do you eat in your free time?</option>
                        </select>
                        <span class="yk_answers answer1">do you do in your free time?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I <span id="insertanswerhere"></span> like</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">pool</option>
                           <option id="option2">swimming</option>
                           <option id="option3">water polo</option>
                        </select>
                        <span class="yk_answers answer2">swimming.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I like</span> <span class="yk_answers answer3">cards.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">golf</option>
                              <option id="option2">pool</option>
                              <option id="option3">cards</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_cards.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                            How often do you go swimming?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I go swimming</span> <span class="yk_answers answer4"> on Wednesdays.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">on Wednesdays</option>
                              <option id="option2">on Thursdays</option>
                              <option id="option3">on Fridays</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_wed.jpg' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame2">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/StockMan.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/JoggingGirl.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What are</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose an answer-- </option>
                           <option id="option1">do you like to see?</option>
                           <option id="option2">your hobbies?</option>
                           <option id="option3">do you want?</option>
                        </select>
                        <span class="yk_answers answer1">your hobbies?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I <span id="insertanswerhere"></span> like</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">tennis</option>
                           <option id="option2">jogging</option>
                           <option id="option3">trekking</option>
                        </select>
                        <span class="yk_answers answer2">jogging.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I like</span> <span class="yk_answers answer3">pool.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">snooker</option>
                              <option id="option2">swimming</option>
                              <option id="option3">pool</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_pool.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                            How often do you go jogging?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I go jogging</span> <span class="yk_answers answer4"> on weekdays.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">on weekdays</option>
                              <option id="option2">on weekends</option>
                              <option id="option3">very seldom</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_daysofweek.png' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame3">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/StockWoman2.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/HikingGirl.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose an answer-- </option>
                           <option id="option1">hobbies will you want to have?</option>
                           <option id="option2">do in your free time?</option>
                           <option id="option3">do you watch in your free time?</option>
                        </select>
                        <span class="yk_answers answer1">do you do in your free time?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I <span id="insertanswerhere"></span> like</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">jogging</option>
                           <option id="option2">hiking</option>
                           <option id="option3">scuba diving</option>
                        </select>
                        <span class="yk_answers answer2">hiking.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I like</span> <span class="yk_answers answer3">table tennis.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">badminton</option>
                              <option id="option2">tennis</option>
                              <option id="option3">table tennis</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_tabletennis.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                            Do you ever play table tennis?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I</span> <span class="yk_answers answer4"> sometimes play.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">sometimes</option>
                              <option id="option2">seldom</option>
                              <option id="option3">never</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_sometimes3.jpg' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame4">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/StockWoman.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/SoccerMan.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose an answer-- </option>
                           <option id="option1">do hobbies do you want?</option>
                           <option id="option2">do in your free time?</option>
                           <option id="option3">do you eat in your free time?</option>
                        </select>
                        <span class="yk_answers answer1">do you do in your free time?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I <span id="insertanswerhere"></span> like</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">gaelic football</option>
                           <option id="option2">soccer</option>
                           <option id="option3">ice hockey</option>
                        </select>
                        <span class="yk_answers answer2">soccer.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I like</span> <span class="yk_answers answer3"> chess.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">gaming</option>
                              <option id="option2">paduk</option>
                              <option id="option3">chess</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_chess.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                            Do you ever play chess?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">Yes, I play on</span> <span class="yk_answers answer4"> Tuesdays and Fridays.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Tuesdays and Fridays</option>
                              <option id="option2">Tuesdays and Thursdays</option>
                              <option id="option3">Mondays and Saturdays</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_tues_and_fri.png' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         

   

        
      </div>
      <!-- Get the right nav -->
      <?php 
         $rightnav = file_get_contents('../HTML/RightNav.html');
         echo $rightnav;
         ?> 
   </div>



</body>
</html>