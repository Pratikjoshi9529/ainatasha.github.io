<?php 
include("db.php");
?>
<!doctype html>
	<head>
		<style>
			/* CSS comes here */
			body {
			    font-family: arial;
			}
			button {
			 
			    border: none;
			    background-color: transparent;
			}
			
			#output {
			    background-color:#F9F9F9;
			    padding:10px;
			    width: 100%;
			    margin-top:20px;
			    line-height:30px;
			}
			.hide {
			    display:none;
			}
			.show {
			    display:block;
			}
		</style>
		<title>Natasha AI Buddy</title>
		<!-- <script src="https://code.responsivevoice.com/responsivevoice.js?key=x7ZRZzj4"></script> -->
		<meta charset="UTF-8">
  <meta name="description" content="Simple voicebot using JavaScript named as Natasha, she can help you to search something on google ,play music or video on youtube,open instagram profile etc .... She is learning too many things yet.......">
  <meta name="keywords" content="Natasha,AIBuddy, #Giverespecttakerespect....">
  <meta name="author" content="Pratik Joshi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://cdn-icons.flaticon.com/png/512/1698/premium/1698535.png?token=exp=1637695164~hmac=f64d5293550119e6fd3d0d7c0fe8cf3e">
	</head>
	<body onload="">
		
		<h2>Hii I am Natasha Click Me to Speak....</h2>
        <p><button type="button" onclick="runSpeechRecognition()"><img src="natasha2.png"></button> &nbsp; <!-- <span id="action"></span> --></p>
		<script>	
 
       // responsiveVoice.speak("Hi I am Natasha Click me to continue......");
   		    function runSpeechRecognition() {
   		    	
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
                  
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    // action.innerHTML = "<small>listening, please speak...</small>";
                };
                
                recognition.onspeechend = function() {
                    // action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                    recognition.stop();
                    // runSpeechRecognition();
                }
              
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    
                    transcript=transcript.toLowerCase();
                    //natasha Will Start If you call her

                   if(transcript.includes("natasha")){
                   	 transcript=transcript.replace("natasha","");
                   	 transcript=transcript.replace("?","");
                    // responsiveVoice.speak("Initialising Search");
                    if(transcript.includes("what is")){
                    	var x=transcript.replace("what is","");
                    	window.open('https://www.google.com/search?q='+x, '_blank');

                    }else if (transcript.includes("play")) {

                    	var x=transcript.replace("play","");
                    	window.open('https://www.youtube.com/results?search_query='+x, '_blank');
                    }
                    <?php 

                 $sql2 = "SELECT *  FROM command";
                    
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  
  $x=1;
  
  while($row2 = $result2->fetch_assoc()) {
?>
                      else if(transcript.includes("<?php echo $row2['command']?>")){
                      		// responsiveVoice.speak("Search Initialization Suceesfull ...");
                    	window.open("<?php echo $row2['uoc']  ?>", "_blank");
                      }
  <?php
}
}
                ?>
                  
                     else if (transcript.includes("new command is there")) {

                    
                    	window.open('command.php', '_blank');

                    }
                      else if (transcript.includes("sign up")) {

                    
                    	window.open('signup.php', '_blank');

                    }
                    else if (transcript.includes("commands please")) {

                    responsiveVoice.speak("Following are my some commands");
                      <?php 

                 $sql3 = "SELECT *  FROM command";
                    
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  
  $x=1;
                       
  while($row3 = $result3->fetch_assoc()) {
?>
                      document.write("<?php echo "<h3>natasha  ".$row3['command']."</h3><br>" ?> ");
                      responsiveVoice.speak("<?php echo "natasha  ".$row3['command'] ?> ");
  <?php
}
}
                ?>

                    }

                    }
                };
              
                 // start recognition
              
                  recognition.start();
	        }
	    
		</script>
	</body>
</html>