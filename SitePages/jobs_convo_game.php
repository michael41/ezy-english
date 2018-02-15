

<!-- Include the Convo Game sheet -->
<?php include '../JS/Convo_Game_Code.php';?>

   </head>
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
         <!-- COMMENTING OUT 'QUICKLY GO TO END BUTTON'-->
         <!-- <button id="quicklygototheend">Quick to to end</button> -->
         <div class="yk_fail">
            <h2 class="ykpageheadings">Jobs - Dialogue Game</h2>
            <p>Times up!!! Hard luck.</p>
            <a class='button ykreloadpage'>Try again</a> 
         </div>
         <div class="yk_clickintoimage">
            <h2 class="ykpageheadings">Jobs - Dialogue Game</h2>
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
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/ProfessionalMan1.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/Teacher.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">want</option>
                           <option id="option2">do</option>
                           <option id="option3">job</option>
                        </select>
                        <span class="yk_answers answer1">do?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I'm a <span id="insertanswerhere"></span></span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">lawyer</option>
                           <option id="option2">teacher</option>
                           <option id="option3">police officer</option>
                        </select>
                        <span class="yk_answers answer2">teacher.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm an</span> <span class="yk_answers answer3">accountant.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">engineer</option>
                              <option id="option2">astronaut</option>
                              <option id="option3">accountant</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_accountant.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 Where do you work?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I work at a</span> <span class="yk_answers answer4">High School in Seoul.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">school</option>
                              <option id="option2">town hall</option>
                              <option id="option3">library</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_school.png' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame2">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/ProfessionalWoman1.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/PoliceOfficer.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What is your</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">do</option>
                           <option id="option2">job</option>
                           <option id="option3">life</option>
                        </select>
                        <span class="yk_answers answer1"> job?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I'm a <span id="insertanswerhere"></span></span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">mayor</option>
                           <option id="option2">police officer</option>
                           <option id="option3">dentist</option>
                        </select>
                        <span class="yk_answers answer2">police officer.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm a</span> <span class="yk_answers answer3">lawyer.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">mechanic</option>
                              <option id="option2">judge</option>
                              <option id="option3">lawyer</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_lawyer.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 Where do you work?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I work at a</span> <span class="yk_answers answer4">police station in San Francisco.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">police station</option>
                              <option id="option2">county jail</option>
                              <option id="option3">cinema</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_policestation.png' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame3">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/ProfessionalWoman2.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/ProfessionalMan2.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">want</option>
                           <option id="option2">do</option>
                           <option id="option3">job</option>
                        </select>
                        <span class="yk_answers answer1">do?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I'm a <span id="insertanswerhere"></span></span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">taxi driver</option>
                           <option id="option2">dentist</option>
                           <option id="option3">stockbroker</option>
                        </select>
                        <span class="yk_answers answer2">dentist.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm an</span> <span class="yk_answers answer3">office worker.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">accountant</option>
                              <option id="option2">actress</option>
                              <option id="option3">office worker</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_office.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                                 Where do you work?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I work at a</span> <span class="yk_answers answer4">dental clinic in Toronto.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">dental clinic </option>
                              <option id="option2">museum</option>
                              <option id="option3">tooth building</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/hint_dentalclinic.png' /><br />        
                        <span class="yk_csq choice4_subquestion"></span>
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <div class="yk_dialoguegame_wrapper" id="dialoguegame4">
            <div class="row yk_dialoguegame_images">
               <div class="small-6 columns">
                  <img class="yk_dg_leftimage" src="../Images/Dialogue_Game/KyaryPP.png" />
               </div>
               <div class="medium-6 columns">
                  <img class="yk_dg_rightimage" src="../Images/Dialogue_Game/NeymarParisSG.png" />
               </div>
            </div>
            <div class="row yk_dialgame_dialogues">
               <div class="small-6 columns yk_left_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice1">What do you</span>                        
                        <select class="yk_dg_dropdowns select_1">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">want</option>
                           <option id="option2">do</option>
                           <option id="option3">job</option>
                        </select>
                        <span class="yk_answers answer1">do?</span>                         
                        <img class="tick_or_x_image yesorno1" /><br />
                        <span class="yk_csq choice1_subquestion"></span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno2" />
                        <span class="choice2">I'm a <span id="insertanswerhere"></span></span>
                        <select class="yk_dg_dropdowns select_2">
                           <option disabled selected value> -- choose -- </option>
                           <option id="option1">golfer</option>
                           <option id="option2">footballer</option>
                           <option id="option3">rugby player</option>
                        </select>
                        <span class="yk_answers answer2">footballer.</span><br />                        
                        <span class="yk_csq choice2_subquestion">How about you?</span>
                     </p>
                  </div>
               </div>

               <div class="small-6 columns yk_left_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <span class="choice3">I'm a</span> <span class="yk_answers answer3"> singer.</span> <img class="tick_or_x_image yesorno3" />
                        <select class="yk_dg_dropdowns select_3">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">chef</option>
                              <option id="option2">janitor</option>
                              <option id="option3">singer</option>
                        </select>                     
                        <img class='yk_hint_image_left' src='../Images/hint_popstar.png' />                     
                        <span class="yk_csq choice3_subquestion"><br />
                                                               Cool! Who do you play for?</span>
                     </p>
                  </div>
               </div>
               <div class="small-6 columns yk_right_person_dialoguegame_2">
                  <div class="dialgame_dial">
                     <p>
                        <img class="tick_or_x_image yesorno4" />
                        <span class="choice3">I play for</span> <span class="yk_answers answer4">Brazil.</span> 
                        <select class="yk_dg_dropdowns select_4">
                              <option disabled selected value> -- choose -- </option>
                              <option id="option1">Brazil</option>
                              <option id="option2">Venezuela</option>
                              <option id="option3">Portugal</option>
                        </select>                     
                        <img class='yk_hint_image_right' src='../Images/flag_brazil.png' /><br />        
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