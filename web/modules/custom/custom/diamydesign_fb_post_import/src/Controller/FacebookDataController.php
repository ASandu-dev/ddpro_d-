<?php

namespace Drupal\diamydesign_fb_post_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\Client;

class FacebookDataController extends ControllerBase {

  public function getFacebookData() {
    $config = \Drupal::config('diamydesign_fb_post_import.settings');
    $accessToken = $config->get('api_key');
    if (!$accessToken) {
      echo '<h1>No API key defined</h1>';
    }

    // Set your Facebook app ID
    $appId = '6258313534230149';

    $client = new Client();
    // Retrieve the access token
    // Set the fields you want to retrieve as an array
    $fields = ['id', 'message', 'full_picture', 'attachments'];
    // Convert the fields array to a comma-separated string
    $fieldsString = implode(',', $fields);
    // Make a request to fetch the public posts from Adrian Ferariu M's Facebook page
    try {
      $postsResponse = $client->get('https://graph.facebook.com/v18.0/adrian.ferariu.m/feed', [
        'query' => [
          'access_token' => $accessToken,
          'fields' => $fieldsString,
          'app_id' => $appId,
        ],
      ]);
      return json_decode($postsResponse->getBody(), TRUE);
    } catch (\Exception $e) {
      // Handle exceptions
      echo 'An error occurred: ' . $e->getMessage();
    }
  }
}
