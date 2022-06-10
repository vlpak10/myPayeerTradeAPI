<?php
    
class Api {
    private $name;
    private $scope;
    private $credentialsPath;
    private $tokenPath;

    public function __construct(array $params)
    {
        if (!$params['credentials']) {
          throw new Exception("Path to credentials is required");
        }
        $this->credentialsPath = $params['credentials'];

        if (!$params['token']) {
          throw new Exception("Path to token is required");
        }
        $this->tokenPath = $params['token'];
        $this->name = $params['name'] ?? 'Gmail API PHP';
        $this->scope = $params['scope'] ?? Google_Service_Gmail::GMAIL_READONLY;
    }

    public function getService()
    {
        $client = self::getClient();
        return new Google_Service_Gmail($client);
    }
    
    private function makeNewToken(Google_Client $client)
    {
        // Request authorization from the user.
        $authUrl = $client->createAuthUrl();
        printf("Open the following link in your browser:\n%s\n", $authUrl);
        print 'Enter verification code: ';
        $authCode = trim(fgets(STDIN));

        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        $client->setAccessToken($accessToken);

        // Check to see if there was an error.
        if (array_key_exists('error', $accessToken)) {
          throw new Exception(join(', ', $accessToken));
        }
    }

    private function saveToken(Google_Client $client)
    {
        if (!file_exists(dirname($this->tokenPath))) {
          mkdir(dirname($this->tokenPath), 0700, true);
        }
        file_put_contents($this->tokenPath, json_encode($client->getAccessToken()));
    }
}
