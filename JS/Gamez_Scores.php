

<?php 
   //Display errors : 
   //ini_set('display_errors', 1);
   //ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   
   
   //Session start
   session_start();
   
     
   //Get the head
   $head = file_get_contents('../HTML/Head.html');
   echo $head;

   //Getting the score from the url 
   //------------------------------------------------------------------------------------
   //collect the query string : 
   $queryString = $_SERVER['QUERY_STRING'];

   //split it after '=' 
   list($query_1, $query_2) = explode("=", $queryString);
   $score = $query_2; 

   //Getting the first and second parts of the URL ('greetings', 'jobs' / 'vocab', 'convo') as variables
   //collect the url again : 
   $basename_again =  basename($_SERVER['PHP_SELF']);
   //------------------------------------------------------------------------------------   
   //split it after '_' and using 'list' create variables for each part of the array (eg - greetings, vocab, page)
   list($topic_name, $learning_point, $third, $fourth) = explode("_", $basename_again);

   //------------------------------------------------------------------------
   //CONNECT TO MYSQL : 
   //------------------------------------------------------------------------
   
   //Set the variables to connect to the database : 
   $username="mikeo158_ezyeng";
   $password="ezyenglishsparkle";
   $database="mikeo158_ezyenglish";
   $servername = "127.0.0.1";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $database);
   
   // Check connection
   if ($conn->connect_error) {
       die("Connection was not successful: " . $conn->connect_error);
   } 
   //echo "Connection was successful <br />";
   
   
   //PHP variable for persons name
   $ykp_personsname = $_POST["personsname"];
   
   // sql to insert data into table
   $sql = "INSERT INTO " .  $topic_name . "_"  . $learning_point . " (Name, Score) VALUES ('$ykp_personsname', '$score')";
   

   //split it after 'id' 
   list($part_1, $part_2) = explode("id=", $queryString);



   //The appropriate left nav heading to be hightlighted 
         if ($topic_name == 'greetings' ) {

         $TopScoresLeftHeading = "TopScores_1_pages"; 
         }

          if ($topic_name == 'jobs' ) {

         $TopScoresLeftHeading = "TopScores_2_pages"; 
         }


          if ($topic_name == 'hobbies' ) {

         $TopScoresLeftHeading = "TopScores_3_pages"; 
         }
    

   $camefromggamepage = "http://www.michael-r-oneill.ie/development/ezyeng/SitePages/" .  $topic_name . "_" . $learning_point .  "_game.php"; 


   //If got to here from the game page, set these variables, which will be used in the JS code : 
   if (strstr($_SERVER['HTTP_REFERER'], $camefromggamepage))
   {
   $came_from_game_page = "true"; 
    }
   else
   {    

      if (strstr($_SERVER['QUERY_STRING'], "id"))
      {
         $came_from_game_page = "true";
      }
      else
      {
         $came_from_game_page = "false";
      } 
   }

   
   
   
   
   ?>
<script>


   //---------Angular collected code for filter without ng-repeat : ------------------------------------------------------------
   
   var app = angular.module('plunker', []);
   
   app.controller('MainCtrl', function($scope) {
     $scope.name = 'World';
   });
   
   app.directive('filterList', function($timeout) {
       return {
           link: function(scope, element, attrs) {
               
               var li = Array.prototype.slice.call(element[0].children);
               
               function filterBy(value) {
                   li.forEach(function(el) {
                       el.className = el.textContent.toLowerCase().indexOf(value.toLowerCase()) !== -1 ? '' : 'ng-hide';
                   });
               }
               
               scope.$watch(attrs.filterList, function(newVal, oldVal) {
                   if (newVal !== oldVal) {
                       filterBy(newVal);
                   }
               });
           }
       };
   });
   
   //-------------------------------------------------------------------------------------------------
   
   function scroll_to_name(){
   		$(document).ready(function(){
   					//Highlighting the name entered
   					var yk_name = '<?php echo $ykp_personsname ;?>';
   					//Scrolling to the position on the page :
   					$('html, body').animate({scrollTop: $("td:contains('" + yk_name + "')").parent().offset().top}, 500);
   					});	
   		}

         function getUrlPart(){

            $(document).ready(function(){
 

            //Getting the first part of the URL ('greetings', 'jobs', etc.) as a variable 
            var this_page_url = location.pathname; //collect url of page
            var res = this_page_url.split("/"); //split url with '/'
            var res2 = res[4].split("_"); //split the 5th part of the url with '_'
            var topic_for_this_page = res2[0]; //create as variable the 1st part of the string (which will be 'greetings', or 'hobbies', etc.)
            var learningpoint_for_this_page = res2[1]; //create as variable the 2nd part of the string (which will be 'vocab', or 'convo', etc.)



            $('.ykpageheadings').html(
                  topic_for_this_page + 
                  " - " +
                  learningpoint_for_this_page +
                  " Game Scores"
                  );

           });
      
         }


   
   	
   $(document).ready(function(){




   	
   		//Highlight the name as yellow, but only if you've got here from the game page : 
   	    
   		
   		var came_from_v_g_p = <?php echo $came_from_game_page; ?>	 //ie - 'true or false'	
   		if (came_from_v_g_p == true)
   		{
   		//Highlighting the name entered
   		var yk_name = '<?php echo $ykp_personsname;?>';		
   
   		$('.yk_high_score_table').find('*').filter(function() {
   			
       			return $(this).text() === yk_name;
   				
   			}).parent().css("background-color", "yellow");
   		}
   		
   	
   		
   	
   		$('.yk_hide_typing_what_ur_searching_for').hide(); 


          
   
   	
   	});
   
</script>
<body class="TopScoresPages <?php echo $TopScoresLeftHeading; ?>">
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
      <div class="medium-6 columns" ng-app="plunker" ng-controller="MainCtrl">
         <div class="ykscores">
            <?php
               //If have come here from the game page : 
               if ($came_from_game_page == "true")
               {
                 //If the connection is made correctly and the record is added successfully :
                 if ($conn->query($sql) === TRUE) {
               
               		//echo "<br />New record created successfully";
                 
               		//Echo out the Angular search feature
               		//echo "<input class='yk_search_names' type='search' ng-model='search' placeholder='Search for a name' /> {{search}}";
               		
               		//Populate the table with the Game High Scores table from the ezy english db :
               		$sql2 = "SELECT Name, Score FROM " .  $topic_name . "_" . $learning_point . " ORDER BY Score DESC";
               		$result = $conn->query($sql2);
               		$position_in_table = 1; 
                 
               		//Populate the table with the rows :   
               		if ($result->num_rows > 0) {
               				
               						 echo 
               						  "
               						  <script>scroll_to_name();</script>
               						  <h2 class='ykpageheadings'><script>getUrlPart();</script></h2>
               						  ";
               						  //If you've come here from the Game page : 
               						  if (strstr($_SERVER['HTTP_REFERER'],"http://www.michael-r-oneill.ie/development/ezyeng/SitePages/" .  $topic_name . "_" . $learning_point .  "_game.php"))
               						  {
               						  echo
               						  "
               						  <p>Well done ".$_POST["personsname"]."&#x21;</p>
               						  ";
               						  }
               						  echo
               						  "									  
               						  <input class='yk_search_names' type='search' ng-model='search' placeholder='Search for a name' /> {{search}}
               						  <table class='yk_high_score_table'>
               						  <thead>
               							  <tr>
               								<th>Position</th>
               								<th>Name</th>
               								<th>Score</th>
               							  </tr>
               							</thead>
               						  <tbody filter-list='search'>"; 
               				
               				
               						 // output data of each row
               						while($row = $result->fetch_assoc())
               										{
               											echo "       
               										 <tr>	
               												<td>".$position_in_table."</td> 
               												<td>".$row["Name"]."</td> 
               												<td>".$row["Score"]."</td>
               										 </tr>
               										";
               										$position_in_table++;
               										
               										
               										
               										}					
               							echo 
               							" 
               						   </tbody>
               						   </table>
               						   <div class='yk_tryagain'>
               						   <a class='button' href='index.php'>Back to home</a>
               						   </div>
               						   "; 
               		}
               		else 
               		{
               		echo "0 results";
               		}
               
               
               } 
               //If the connection has not been made successfully : 
               else
               {
               			//echo "<br />Error: " . $sql . "<br />" . $conn->error;
               			//echo "<p>Please note the following:<br />". $conn->error;
               			echo "<p>Try another name.</p>			
               			<form action='" .
                        $topic_name .
                         "_" . $learning_point .  "_game_scores.php?val=" . 
                         $score .
                         "?id=renamed'method='post'>
               			<input type='text' name='personsname' value=''><br />
               			<input type='submit' class='button'><br />          
               			</form>		
               			"; 		
               }
               }
               
               // If got here just normally from the left nav	
               else if ($came_from_game_page == "false")
               {
	
               		//Populate the table with the Game High Scores table from the ezy english db : 
               		$sql2 = "SELECT Name, Score FROM " .  $topic_name . "_" . $learning_point . " ORDER BY Score DESC";
               		$result = $conn->query($sql2);
               		$position_in_table = 1; 
                 
               		//Populate the table with the rows :   
               		if ($result->num_rows > 0) {
               				
               						 echo 
               						  "
               						  <!-- just taking out the scroll to name function : <script>scroll_to_name();</script> -->
               						  <h2 class='ykpageheadings'><script>getUrlPart();</script></h2>
               						  ";
               						
               						  echo
               						  "									  
               						  <input class='yk_search_names' type='search' ng-model='search' placeholder='Search for a name' /> <span class='yk_hide_typing_what_ur_searching_for'>{{search}}</span>
               						  <table class='yk_high_score_table'>
               						  <thead>
               							  <tr>
               								<th>Position</th>
               								<th>Name</th>
               								<th>Score</th>
               							  </tr>
               							</thead>
               						  <tbody filter-list='search'>"; 
               				
               				
               						 // output data of each row
               						while($row = $result->fetch_assoc())
               										{
               											echo "       
               										 <tr>	
               												<td>".$position_in_table."</td> 
               												<td>".$row["Name"]."</td> 
               												<td>".$row["Score"]."</td>
               										 </tr>
               										";
               										$position_in_table++;
               										
               										
               										
               										}					
               							echo 
               							" 
               						   </tbody>
               						   </table>
               						   <div class='yk_tryagain'>
               						   <a class='button' href='index.php'>Back to home</a>
               						   </div>
               						   "; 
               		}
               		else 
               		{
               		echo "0 results";
               		}
               
               }
               
               
               ?>
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