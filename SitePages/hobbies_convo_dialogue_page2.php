

<!-- Get the head -->
<?php 

$head = file_get_contents('../HTML/Head.html');
echo $head;

?>



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
        
        
        	<div class="yk_clickintoimage">
        		 <h2 class="ykpageheadings">Hobbies - Dialogue</h2> 
                 <p>Click on the images to go through the dialogue.</p>  			
  		    </div>

	        <div class="yk_dialogue_wrapper" id="dialogue1">
            
             <div class="row yk_dialogue_images">
            
                    <div class="small-6 columns">

                                <div class="row">
                                
                                        <div class="small-4 columns">
                                             <img class="hint_pic hint_pic_1" src="../Images/Images8InEach/Vocab/hobbies/cards.png" />   
                                        </div>
                                            
                                        <div class="small-8 columns">
                                              <img class="pic_left_1" src="../Images/Dialogue/SAfricanWoman.png" />  
                                        </div>

                                
                                 </div>
                                                
                    </div>
                    
                    <div class="medium-6 columns">


                                <div class="row">
                                
                                        <div class="small-8 columns">
                                              <img class="pic_right_1" src="../Images/Dialogue/CanadianMan2.png" />   
                                        </div>
                                        
                                        <div class="small-4 columns">
                                               <img class="hint_pic hint_pic_2" src="../Images/Images8InEach/Vocab/hobbies/soccer.png" /> 
                                        </div>

                                
                                </div>
                            
                    </div>

            
            </div>
            
            <div class="row yk_left_and_right_person_dialogue_row">                        		
                    
                    <div class="small-6 columns yk_left_person_dialogue">
                      <div class="dial"><p class="dial_left_1">What do you do in your free time? </p></div>                      
                      <div class="dial"><p class="dial_left_2">I like <u>cards</u>. <br />
                        I <u>play cards</u> on <u>Wednesdays</u>.<br />
                         How about you?<br />
                         Do you ever <u>play cards</u>? </p></div>
                    </div>
                    
                    <div class="small-6 columns yk_right_person_dialogue">               		  
                   	  <div class="dial"><p class="dial_right_1">I like <u>soccer</u>.<br />
                       I usually <u>play soccer on Fridays</u>.<br />
                        How about you? </p></div>
                      <div class="dial"><p class="dial_right_2"><u>Yes, I like poker. <br />
                        It's fun to play.</u></p></div>
                    </div>
                    
             </div>
                    
            
            </div>
            
            
            
            <div class="yk_again_and_next_buttons">
            <a class="button" href="hobbies_convo_dialogue.php">Back</a>
            <a class="button" id="reset">Again </a>
            <a class="button" href="hobbies_convo_dialogue_page3.php">Next</a>
            
            </div>
            
                    
        <div>
            		<audio id="yk_audio_dialogue_1">
                           <source src="../Audio/hobbies/Dialogue/simple5.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
                    
                    <audio id="yk_audio_dialogue_2">
                           <source src="../Audio/hobbies/Dialogue/simple6.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
                    
                    <audio id="yk_audio_dialogue_3">
                           <source src="../Audio/hobbies/Dialogue/simple7.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
                    
                     <audio id="yk_audio_dialogue_4">
                           <source src="../Audio/hobbies/Dialogue/simple8.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
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