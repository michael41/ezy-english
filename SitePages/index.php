
<!-- HTML5 doctype : -->
<!DOCTYPE html>

<!-- lang attribute : -->
<html lang="en">

<?php  
$head = file_get_contents('../HTML/Head.html');
echo $head;
?>



<body class="ykbody">


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

	        <h1 class="yk_home_page_heading"><span class="c1">E</span><span class="c2">z</span><span class="c3">y</span> <span class="c4">E</span><span class="c5">n</span><span class="c6">g</span><span class="c7">l</span><span class="c8">i</span><span class="c9">s</span><span class="c10">h</span></h1>
            <!--<img style="width:10%;" src="../Images/abc-anime.jpg" />-->

			<div class="yk_homepage_content">
                     <p><span class="ezyenglishtagline">Ezy English couldn't be e<span class="c2">Z</span><span class="c3">Y</span>er!</span></p>
                    
                   
                     <p>L<span class="c1">e</span>arn new vocabulary, phrases and dialogue.</p>
                     <p>Play game<span class="c2">z</span> to test what you've learned.</p>
                     <p>Record <span class="c3">y</span>our scores and try to beat them later!</p>
                  
          </div>
          
	    </div>
        
        <?php 
		$rightnav = file_get_contents('../HTML/RightNav.html');
		echo $rightnav;
  		?>
  


</div>

</body>
</html>