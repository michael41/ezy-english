
<!-- Include the Vocab Words Code sheet -->
<?php include '../JS/Vocab_Words_Code.php';?>


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
         <h2 class="ykpageheadings">Jobs - Vocabulary</h2>
   		 <p>Click the image when you're ready to go to the next word.</p>
    </div>
    
    <div class="ykimages_slideshow"> 
    
    	<img class="yk_firstslide ykanyslide pic_no_1" src="" />
        <img class="ykanyslide pic_no_2" src="" />
        <img class="ykanyslide pic_no_3" src="" />
        <img class="ykanyslide pic_no_4" src="" /> 
        <img class="ykanyslide pic_no_5" src="" /> 
        <img class="ykanyslide pic_no_6" src="" /> 
        <img class="ykanyslide pic_no_7" src="" />
        <img class="ykanyslide yklastslide pic_no_8" src="" /> 
        
    </div>
    
    <div class="yk_click_pic_for_word_word"> 
     
       				   <p id="word_no_1"></p>
                       <p id="word_no_2"></p>
                       <p id="word_no_3"></p>
                       <p id="word_no_4"></p>
                       <p id="word_no_5"></p>
                       <p id="word_no_6"></p>
                       <p id="word_no_7"></p>
                       <p id="word_no_8"></p> 
    	
        
    </div>
    
    <div id="dialog" title="Slideshow" class="ykimages_slideshow_with_btns">
      
        
        <div class="row ykimages_slideshow_pn">
        
                <div class="small-4 columns"><a class="ykimages_slideshow_pn_btn_previous_VOCABPAGE button">Previous</a></div>
                
                <div class="small-4 columns yk_just_images_in_this_div"> 
                        <img class="yk_firstslide_pn ykanyslide_pn pic_no_1" src="" />
                        <img class="ykanyslide_pn pic_no_2" src="" />
                        <img class="ykanyslide_pn pic_no_3" src="" />
                        <img class="ykanyslide_pn pic_no_4" src="" /> 
                        <img class="ykanyslide_pn pic_no_5" src="" />
                        <img class="ykanyslide_pn pic_no_6" src="" />
                        <img class="ykanyslide_pn pic_no_7" src="" />
                        <img class="ykanyslide_pn yklastslide_pn pic_no_8" src="" />
                </div>
                
                <div class="small-4 columns"><a class="ykimages_slideshow_pn_btn_nxt_VOCABPAGE button">Next</a></div>
              
      </div>
      
       <div class="row ykimages_slideshow_pn">
        
                <div class="small-4 columns">&nbsp;</div>
                
                <div class="small-4 columns yk_the_word_for_the_pic"> 
                       <p class="ykslideshowword1"></p>
                       <p class="ykslideshowword2"></p>
                       <p class="ykslideshowword3"></p>
                       <p class="ykslideshowword4"></p>
                       <p class="ykslideshowword5"></p>
                       <p class="ykslideshowword6"></p>
                       <p class="ykslideshowword7"></p>
                       <p class="ykslideshowword8"></p>                        
                </div>
                
                <div class="small-4 columns">&nbsp;</div>
                 
       </div>
      
      
      <div class="yk_audios_div">
        <div>
          <audio>
            <source class="audio_2" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_3" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_4" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_5" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_6" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_7" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_8" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
        <div>
          <audio>
            <source class="audio_1" src="" type="audio/mpeg">
            Your browser does not support the audio element. </audio>
        </div>
      </div>
      
    </div>
    <div class="ykSlidshowbtn"><a class="ykslideshowstart_VOCAB button">Audio Slideshow</a></div>
  </div>
  
  <?php 
		$rightnav = file_get_contents('../HTML/RightNav.html');
		echo $rightnav;
  ?>
  
</div>
</body>
</html>