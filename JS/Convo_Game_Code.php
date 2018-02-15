<!-- Get the head -->
<?php 
   //Session start
   session_start();
   
   //Display errors : 
   // ini_set('display_errors', 1);
   // ini_set('display_startup_errors', 1);
   // error_reporting(E_ALL);
   
   $head = file_get_contents('../HTML/Head.html');
   echo $head;
   
   
   ?>

<script>

      $(document).ready(function() {
      
      //-----------------------------------VARIABLES----------------------------------------------------

        var count = 9000;    
        var counter;
        var correct_answers = 0; 
        var guesses = 0;
        var dialogue_part = 1; 
        var score;
        var scoreRounded;
        var quicklygotoend = false; 
        var total_percentage_score;
        var x_image_src = "../Images/Dialogue_Game/wrong_answer.png"; 
      
            
        
        //Getting the first part of the URL ('greetings', 'jobs', etc.) as a variable 
        var this_page_url = location.pathname; //collect url of page
        var res = this_page_url.split("/"); //split url with '/'
        var res2 = res[4].split("_"); //split the 5th part of the url with '_'
        var topic_for_this_page = res2[0]; //create as variable the 1st part of the string (which will be 'greetings', or 'hobbies', etc.)
        console.log(topic_for_this_page);    
            
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
                                                $('.yk_score').hide();
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
                                          
                                          
      //Dialogue Parts Function
      function dialogueParts() {                            
                                                //All correct answers gathered, go to next page : 
       if ((correct_answers == 16) || (quicklygotoend == true))
                                                {
                                                      
         //Clear the timer
         clearInterval(counter);

             // Hide the 'round' notification
             $('.yk_cgr').hide();
                                                      

            $('.yk_enter_your_name').show();
      
            $('.yk_sca').hide(); //'Select the correct answers'

            $('.yk_dialoguegame_wrapper').hide(); 

            
      
      
            score = (correct_answers/guesses)*100;
            scoreRounded = Math.round(score*10)/10;                                             
            total_percentage_score = scoreRounded; 

            var correct_topic = topic_for_this_page + '_convo_game_scores.php?val='; 


            var the_time_it_took = $("#yk_cg_time").html();
            var actual_time_int = parseInt(the_time_it_took);

            $('.yk_cg_perc_score').html(total_percentage_score); 
            $('.yk_time_bonus').html(actual_time_int);
            var final_score_to_be_passed = total_percentage_score + actual_time_int;
            $('.yk_cg_total_overall_score').html(final_score_to_be_passed); 
             

            $('#yk_form_enter_name').attr('action', correct_topic + final_score_to_be_passed);
                                                                                    
            
      
                                                            return;
                                                
                                                }
                                                //Go to next dialogue part, (2 new people in dialogue, etc.) : 
                                                else
                                                {
                                                //Hide the dialogue section you need to hide
                                                $("#dialoguegame" + dialogue_part).hide();
                                                // Hide the relevant round button
                                                $('.yk_convogame_round' + dialogue_part).hide();
                                                                                                
                                                dialogue_part ++; 

                                                //Show the dialogue section you need to show
                                                $("#dialoguegame" + dialogue_part).show();
                                                // Show the relevant round button
                                                $('.yk_convogame_round' + dialogue_part).show();      
                                                }
                                                
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


                                    // Show the round 1 of 4 button
                                    $('.yk_convogame_round1').show(); 
                  
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
                              $(".yesorno1").attr("src", x_image_src);                     
                              
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
                              $(".yesorno1").attr("src", x_image_src); 
                              
                              
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
                              $(".yesorno2").attr("src", x_image_src);                     
                              
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
                              $('.yk_left_person_dialoguegame').hide();
                              $('.yk_right_person_dialoguegame').hide();
                              $('.yk_hint_image_left').show();    
                              }, 1250); 
                                    
                         
                                                      
                              break;
                              
                              //When option 3 has been selected, incorrect answer : 
                              case "option3":
                              
                              //Get the gettingScore function to show the scores : 
                              gettingScore();
                              
                              //make bold and red and show x image temporarily to show it's incorrect : 
                              $('.choice2').css("color", "red");
                              $('.choice2').css("font-weight", "bold");
                              $(".yesorno2").attr("src", x_image_src); 
                              
                              
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
                              $(".yesorno3").attr("src", x_image_src);                     
                              
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
                              $(".yesorno3").attr("src", x_image_src); 
                              
                              
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
      
                              // Hide the hint image
                              $('.yk_hint_image_left').hide();                             
                              
                              //Show the tick sign image to show it's the correct answer 
                              $(".yesorno3").attr("src","../Images/Dialogue_Game/tick_small.png");                      
                              
                              //After half a second show the subquestion : 
                              setTimeout(function(){ 
                              $('.choice3_subquestion').show();   
                              }, 500);                      
                              
                            //After 1 second show the 4th dialogue part 
                              setTimeout(function(){ 
                              $('.yk_right_person_dialoguegame_2').show();
                              $('.yk_hint_image_right').show();                                             
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

                              //Hide the hint
                              $('.yk_hint_image_right').hide();                            
                              
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
                                                
                                                                  
                                                //Hide, show etc. the appropriate content : 
                                                $('.yk_left_person_dialoguegame').show();
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
                              $(".yesorno4").attr("src", x_image_src); 
                              
                              
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
                              $(".yesorno4").attr("src", x_image_src);                     
                              
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
      
</script>