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
	
	if($pesan_datang=='Caption' || $pesan_datang=='6')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
  'type' => 'template',
  'altText' => 'Caption',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://1.bp.blogspot.com/-Ac7CLfJQm-s/W3Lzo84TkhI/AAAAAAAABL4/1TB46mZ2Hqo4Fzcy6vrTlTKcuXXdBviagCLcBGAs/s320/CoreProject.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Caption',
    'text' => 'Silahkan pilih.',
    'defaultAction' => 
    array (
      'type' => 'message',
      'label' => 'Caption 1',
      'text' => 'Caption 1',
    ),
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'Caption 1',
        'text' => 'Caption 1',
      ),
      1 => 
      array (
        'type' => 'message',
        'label' => 'Caption 2',
        'text' => 'Caption 2',
      ),
    ),
  ),
)
							)
						);
				
	}
	
	if($pesan_datang=='Logo') {
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
                                      'type' => 'image',
                                      'originalContentUrl' => 'https://huskiest-takeoff.000webhostapp.com/CoreProject.jpg',
                                      'previewImageUrl' => 'https://huskiest-takeoff.000webhostapp.com/CoreProject.jpg',
                                    )
							)
						);
				
	}
	
	if($pesan_datang=='5' || $pesan_datang=='Admin') {
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
  'type' => 'template',
  'altText' => 'Admin CoreProject',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://3.bp.blogspot.com/-Ik5kF4Wg-S8/W3L9AyroiqI/AAAAAAAABMc/XtVi56F5O4kX4XOVRLDdb5omP6KgsQClwCLcBGAs/s1600/37044385_422047604981813_183265215138234368_n.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Owner',
        'text' => 'DitoBaskaran',
        'defaultAction' => 
        array (
          'type' => 'uri',
          'label' => 'Buka',
          'uri' => 'http://line.me/ti/p/~anonymousind',
        ),
        'actions' => 
        array (
        0 => 
          array (
           'type' => 'uri',
          'label' => 'Buka',
          'uri' => 'http://line.me/ti/p/~anonymousind',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://instagram.fcgk1-1.fna.fbcdn.net/vp/7e6de955871d7bfdd73c41d84b945495/5BFBCB68/t51.2885-15/e35/25016744_2019657204925710_834670805999681536_n.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Admin 1',
        'text' => 'Navyra',
        'defaultAction' => 
        array (
          'type' => 'uri',
          'label' => 'Buka',
          'uri' => 'http://line.me/ti/p/~navyraflp_',
        ),
        'actions' => 
        array (
        0 => 
          array (
           'type' => 'uri',
          'label' => 'Buka',
          'uri' => 'http://line.me/ti/p/~navyraflp_',
          ),
        ),
      ),
      2 => 
      array (
        'thumbnailImageUrl' => 'https://huskiest-takeoff.000webhostapp.com/CoreProject.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Admin 2',
        'text' => '-',
        'defaultAction' => 
        array (
          'type' => 'message',
          'label' => 'Buka',
          'text' => 'Admin 2',
        ),
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Buka',
            'text' => 'Admin 2',
          ),
        ),
      ),
      3 => 
      array (
        'thumbnailImageUrl' => 'https://huskiest-takeoff.000webhostapp.com/CoreProject.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Admin 3',
        'text' => '-',
        'defaultAction' => 
        array (
          'type' => 'message',
          'label' => 'Buka',
          'text' => 'Admin 3',
        ),
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Buka',
            'text' => 'Admin 3',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
							)
						);
				
	}
	
	if($pesan_datang=='Owner' || $pesan_datang=='Own') {
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
  'type' => 'template',
  'altText' => 'Owner CorePoject',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://instagram.fcgk1-1.fna.fbcdn.net/vp/fb611678be9b8dd1da7e3245d05d8682/5BF44FA0/t51.2885-15/e35/s480x480/37044385_422047604981813_183265215138234368_n.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Owner',
    'text' => 'Dia adalah owner CoreProject!',
    'defaultAction' => 
    array (
      'type' => 'uri',
      'label' => 'Buka',
      'uri' => 'https://www.instagram.com/_ditobskrn_',
    ),
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'label' => 'Buka',
        'uri' => 'https://www.instagram.com/_ditobskrn_',
      ),
    ),
  ),
)
							)
						);
				
	}
	
	if($pesan_datang=='Help') {
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
  'type' => 'template',
  'altText' => 'Help',
  'template' => 
  array (
    'type' => 'buttons',
    'thumbnailImageUrl' => 'https://huskiest-takeoff.000webhostapp.com/CoreProject.jpg',
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
    'imageBackgroundColor' => '#FFFFFF',
    'title' => 'Help',
    'text' => 'Silahkan pilih.',
    'defaultAction' => 
    array (
      'type' => 'message',
      'label' => 'Owner',
      'text' => 'https://www.instagram.com/_ditobskrn_',
    ),
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'message',
        'label' => 'Owner',
        'text' => 'Owner',
      ),
      1 => 
      array (
        'type' => 'message',
        'label' => 'Official Account',
        'text' => 'Official Account',
      ),
      2 => 
      array (
        'type' => 'message',
        'label' => 'Link',
        'text' => 'Link',
      ),
      3 => 
      array (
        'type' => 'message',
        'label' => 'Keywords',
        'text' => 'Key',
      ),
    ),
  ),
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
