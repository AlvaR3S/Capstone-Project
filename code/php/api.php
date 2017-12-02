<?php
  
   /* connect to the db */
    $link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');

    $db = mysqli_select_db($link, 'corporate_directory') or die('Cannot select the DB');
 
  $query = "SELECT firstname FROM employee ORDER BY eid ";
    $result = mysqli_query($link, $query) or die('Errant query:  '.$query);
     
     
  echo $query;

  //echo json_encode($array);

  
  // /* require the user as the parameter */
  // if(isset($_GET['username'])) {

  //   /* soak in the passed variable or set our own */
  //   // $number_of_posts = isset($_GET['eid']) ? intval($_GET['eid']) : 10; //10 is the default
  //   $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
  //   $user_id = intval($_GET['username']); //no default

  //   /* connect to the db */
  //   $link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');

  //   $db = mysqli_select_db('corporate_directory',$link) or die('Cannot select the DB');

  //   /* grab the posts from the db */
  //   $query = "SELECT * FROM employee ORDER BY eid ";
  //   $result = mysql_query($query,$link) or die('Errant query:  '.$query);
  //   echo $query . "<br>";
  //   /* create one master array of the records */
  //   $posts = array();
  //   if(mysql_num_rows($result)) {
  //     while($post = mysql_fetch_assoc($result)) {
  //       $posts[] = array($query=>$post);
  //     }
  //   }

  //   echo $posts . "<br>";

  //   /* output in necessary format */
  //   if($format == 'json') {
  //     header('Content-type: application/json');
  //     echo json_encode(array($query=>$posts));
  //     echo "test1" . "<br>";
  //   }
  //   else {
  //     header('Content-type: text/xml');
  //     echo "test2" . "<br>";
  //     echo '<posts>';
  //     foreach($posts as $index => $post) {
  //       if(is_array($post)) {
  //         foreach($post as $key => $value) {
  //           echo '<',$key,'>';
  //           if(is_array($value)) {
  //             foreach($value as $tag => $val) {
  //               echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
  //             }
  //           } else {
  //             echo "problem b.";
  //           }
  //           echo '</',$key,'>';
  //         }
  //       } else {
  //         echo "problem a." . "<br>";
  //       }
  //     }
  //     echo '</posts>';
  //   }

  //   /* disconnect from the db */
  //     @mysql_close($link);
  // } 
  // else {
  //   echo "....oops";
  // }
?>