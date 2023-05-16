<?php


	$secret = "secrethere";


	/* ############################################################################################## */
	/*            Call http://localhost/update_song_info.php?token=secrethere&song=Artist - Title     */
	/*            to update currentsong.json  to  "Artist - Title"                                    */
	/* ############################################################################################## */


	$song 	= $_GET['song'];
	$token 	= $_GET['token'];

	if (isset($_GET['song']) && isset($_GET['token'])) {
      if($_GET['token'] == $secret){
      	$data = array('song' => $song);
      	$json = json_encode($data);

      	$fp = fopen('currentsong.json', 'w');
        fwrite($fp, $json);
        fclose($fp);
      }
    }

?>