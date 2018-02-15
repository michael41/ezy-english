

<!-- Include the Convo Game sheet -->
<?php include '../JS/Convo_Game_Code.php';?>

   </head>
<body class="Dropdown_1_pages">
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
            <h2 class="ykpageheadings">Greetings - Dialogue Game</h2>
            <p>Times up!!! Hard luck.</p>
            <a class='button ykreloadpage'>Try again</a> 
         </div>
         <div class="yk_clickintoimage">
            <h2 class="ykpageheadings">Greetings - Dialogue Game</h2>
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
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/Christiano250.jpg" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/Nikolaj250.jpg" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">Hello! <br /> My name is</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose a name -- </option>
                           <option id="option1">Lionel Messi</option>
                           <option id="option2">Christiano Ronaldo</option>
                           <option id="option3">Luis Suarez</option>
                        </select>
                        <span class="yk_answers answer1">Christiano.</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion">What’s your name?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">Hi <span id="insertanswerhere"></span>, my name’s</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">Jamie Lannister</option>
                           <option id="option2">Nikolaj C. Walder</option>
                           <option id="option3">Peter Dinklidge</option>
                        </select>
                        <span class="yk_answers answer2">Nikolaj.</span><br />                        
                        <span class="yk_csq choice2_subquestion">Where are you from Christiano?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm from</span> <span class="yk_answers answer3">Portugal.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Italy</option>
                              <option id="option2">Spain</option>
                              <option id="option3">Portugal</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/flag_portugal.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 How about you?<br /> 
                                                                 Where are you from?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I'm from</span> <span class="yk_answers answer4">Denmark.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Denmark</option>
                              <option id="option2">Argentina</option>
                              <option id="option3">Scotland</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/flag_denmark.png' /><br />        
                        <span class="yk_csq choice4_subquestion">Nice to meet you!</span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame2">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/Marta.jpg" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/Ellie.jpg" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">Hello! <br /> My name is</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose a name -- </option>
                           <option id="option1">Mya</option>
                           <option id="option2">Marta</option>
                           <option id="option3">Bruna Lírio</option>
                        </select>
                        <span class="yk_answers answer1">Marta.</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion">What’s your name?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">Hi <span id="insertanswerhere"></span>, my name’s</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">Kimmy Schmidt</option>
                           <option id="option2">Ellie Kemper</option>
                           <option id="option3">Erin Hannon</option>
                        </select>
                        <span class="yk_answers answer2">Ellie.</span><br />
                        <span class="yk_csq choice2_subquestion">Where are you from Marta?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm from</span> <span class="yk_answers answer3">Brazil.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Egypt</option>
                              <option id="option2">Colombia</option>
                              <option id="option3">Brazil</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/flag_brazil.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 How about you?<br /> 
                                                                 Where are you from?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I'm from</span> <span class="yk_answers answer4">the USA.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">USA</option>
                              <option id="option2">Canada</option>
                              <option id="option3">England</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/flag_usa.png' /><br />            
                        <span class="yk_csq choice4_subquestion">Nice to meet you!</span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame3">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/keisuke250.jpg" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/Sophie250.jpg" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">Hello! <br /> My name is</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose a name -- </option>
                           <option id="option1">Shinzo Abe</option>
                           <option id="option2">Keisuke Honda</option>
                           <option id="option3">Shohei Ohtani</option>
                        </select>
                        <span class="yk_answers answer1">Keisuke.</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion">What’s your name?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">Hi <span id="insertanswerhere"></span>, my name’s</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">Sansa Stark</option>
                           <option id="option2">Sophie Turner</option>
                           <option id="option3">Kiera Knightly</option>
                        </select>
                        <span class="yk_answers answer2">Sophie.</span><br />
                        <span class="yk_csq choice2_subquestion">Where are you from Keizuke?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm from</span> <span class="yk_answers answer3">Japan.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Thailand</option>
                              <option id="option2">South Korea</option>
                              <option id="option3">Japan</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/flag_japan.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 How about you?<br /> 
                                                                 Where are you from?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" /><span class="choice3">I'm from</span> <span class="yk_answers answer4">England.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">England</option>
                              <option id="option2">Scotland</option>
                              <option id="option3">Wales</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/flag_england.png' /><br />        
                        <span class="yk_csq choice4_subquestion">Nice to meet you!</span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame4">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/NiallHoran.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/MoSalah.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">Hello! <br /> My name is</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose a name -- </option>
                           <option id="option1">Robbie Keane</option>
                           <option id="option2">Niall Horan</option>
                           <option id="option3">Cillian Murphy</option>
                        </select>
                        <span class="yk_answers answer1">Niall.</span>                        
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion">What’s your name?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">Hi <span id="insertanswerhere"></span>, my name’s</span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">Ahmed Hegazi</option>
                           <option id="option2">Mo Salah</option>
                           <option id="option3">Wael Gomaa</option>
                        </select>
                        <span class="yk_answers answer2">Mo.</span><br />
                        <span class="yk_csq choice2_subquestion">Where are you from Niall?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm from</span> <span class="yk_answers answer3">Ireland.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Scotland</option>
                              <option id="option2">Canada</option>
                              <option id="option3">Ireland</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/flag_ireland.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 How about you?<br /> 
                                                                 Where are you from?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I'm from</span> <span class="yk_answers answer4">Egypt.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Egypt</option>
                              <option id="option2">UAE</option>
                              <option id="option3">Venezuela</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/flag_egypt.png' /><br />            
                        <span class="yk_csq choice4_subquestion">Nice to meet you!</span>
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