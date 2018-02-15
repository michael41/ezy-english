<?php 

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
$audio_dir = "../Audio/" . $topic_name . "/Vocab/";
$audioz = scandir($audio_dir);




?>

<script type='text/javascript'>


$(document).ready(function() {

	//--------------------------------------------------------------------------------------------
	//Populate the page with the file names from the html : 
	//------------------------------------------------------IMAGES AND WORDS-----------------------------------------------\\
	//--------------------------------------------------------------------------------------------


	//Getting the first part of the URL ('greetings', 'jobs', etc.) as a variable 
	var this_page_url = location.pathname; //collect url of page
	var res = this_page_url.split("/"); //split url with '/'
	var res2 = res[4].split("_"); //split the 5th part of the url with '_'
	var topic_for_this_page = res2[0]; //create as variable the 1st part of the string (which will be 'greetings', or 'hobbies', etc.)
	console.log(topic_for_this_page);


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
	var src1 = "<?php echo $img_dir; ?>" + word1;
	var src2 = "<?php echo $img_dir; ?>" + word2;
	var src3 = "<?php echo $img_dir; ?>" + word3;
	var src4 = "<?php echo $img_dir; ?>" + word4;
	var src5 = "<?php echo $img_dir; ?>" + word5;
	var src6 = "<?php echo $img_dir; ?>" + word6;
	var src7 = "<?php echo $img_dir; ?>" + word7;
	var src8 = "<?php echo $img_dir; ?>" + word8;

	
	//Assign picture srcs to the correct word
	$('.pic_no_1').attr("src", src1);	
	$('.pic_no_2').attr("src", src2);
	$('.pic_no_3').attr("src", src3);
	$('.pic_no_4').attr("src", src4);
	$('.pic_no_5').attr("src", src5);
	$('.pic_no_6').attr("src", src6);
	$('.pic_no_7').attr("src", src7);
	$('.pic_no_8').attr("src", src8);
	
		

	
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

	
	//Populate more advanced slideshow (prev, next slshow etc) words 
	$('.ykslideshowword1').html(true_word_1);
	$('.ykslideshowword2').html(true_word_2);
	$('.ykslideshowword3').html(true_word_3);
	$('.ykslideshowword4').html(true_word_4);
	$('.ykslideshowword5').html(true_word_5);
	$('.ykslideshowword6').html(true_word_6);
	$('.ykslideshowword7').html(true_word_7);
	$('.ykslideshowword8').html(true_word_8);
	
	//--------------------------------------------------------------------------------------------
	//Populate the page with the file names from the html : 
	//------------------------------------------------------AUDIO-----------------------------------------------\\
	//--------------------------------------------------------------------------------------------
	
    //Assign audio srcs to the correct word
	//Grab the audio for the php pulling it from the directory
	var audio1 = "<?php echo $audioz[2]; ?>";
	var audio2 = "<?php echo $audioz[3]; ?>";
	var audio3 = "<?php echo $audioz[4]; ?>";
	var audio4 = "<?php echo $audioz[5]; ?>";
	var audio5 = "<?php echo $audioz[6]; ?>";
	var audio6 = "<?php echo $audioz[7]; ?>";
	var audio7 = "<?php echo $audioz[8]; ?>";
	var audio8 = "<?php echo $audioz[9]; ?>";
	
	//Create .mp3 src variables calculated from the vocab in the html 
	var audiosrc1 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio1;
	var audiosrc2 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio2;
	var audiosrc3 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio3;
	var audiosrc4 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio4;
	var audiosrc5 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio5;
	var audiosrc6 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio6;
	var audiosrc7 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio7;
	var audiosrc8 = "../Audio/" + topic_for_this_page + "/Vocab/" + audio8;
	
	//Create the correct audio src attributes in the html
	$('.audio_1').attr("src", audiosrc1);	
	$('.audio_2').attr("src", audiosrc2);
	$('.audio_3').attr("src", audiosrc3);
	$('.audio_4').attr("src", audiosrc4);
	$('.audio_5').attr("src", audiosrc5);
	$('.audio_6').attr("src", audiosrc6);
	$('.audio_7').attr("src", audiosrc7);
	$('.audio_8').attr("src", audiosrc8);

});

</script>



