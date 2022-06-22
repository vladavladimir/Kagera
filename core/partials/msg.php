<?php 
$pag = $_SERVER['REQUEST_URI']; 
  $page = parse_url($pag);

  if (isset($page['query']) && $page['query'] == 'sucposad') { 
        echo '<script>
            setTimeout(
                function(){
                    alert("You added new position");
                    }
                    ,500 /// milliseconds = 10 seconds
                    );</script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errextcv') {
      	echo '<script>setTimeout(
      	function(){
                alert("Use only PDF extension for your CV");
            }
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errsizecv') {
      	echo '<script>setTimeout(
      	function(){
                alert("To large CV, must be up to 30MB");
            }
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errwrongcv') {
      	echo '<script>setTimeout(function(){
                alert("Something went wrrong pls do contact Admin");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'err-ext') {
      	echo '<script>setTimeout(function(){
                alert("Use only the folowing extension for IMG like JPG,PNG and JPEG");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errsize') {
      	echo '<script>setTimeout(function(){
                alert("Use pic size up to 5MB only");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errwrong') {
      	echo '<script>setTimeout(function(){
                alert("Something went wrrong pls do contact Admin");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'sucinsert') {
      	echo '<script>setTimeout(function(){
                alert("You added New User");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errform') {
      	echo '<script>setTimeout(function(){
                alert("Something went wrrong pls do contact Admin");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'error=stmtfailed') {
      	echo '<script>setTimeout(function(){
                alert("Something went wrrong pls do contact Admin");}
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'error=emptyinput') {
      	echo '<script>setTimeout(function(){
                alert("All fields must be filled in");}
                ,500 /// milliseconds = 10 seconds
                 );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'error=checkinput') {
      	echo '<script>setTimeout(
      	function(){
                alert("Pls use destinct charset designetet per input field");
            }
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }elseif (isset($page['query']) && $page['query'] == 'errinbase') {
      	echo '<script>setTimeout(
      	function(){
                alert("This position is added already");
            }
                ,500 /// milliseconds = 10 seconds
                );
               </script> ';
      }