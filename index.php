<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = '1/sp2ijon3lAeLqonFh0s/XZ3xQ7B83PnFo7kcSdjK/xfD90HeLFYjiWKEeKxWDs+U0QNRFuKJLy449HaggviiHxhIDJZQvX7Czk988tj0MuIm/tGh9+5c/hNSTFq2L6QQOa7pQj+WhPtMLg4PK2zQdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = 'cffa8dc2d6131312fc170c281a00eca2';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Hi')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo'
									)
							)
						);
				
	}

}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
