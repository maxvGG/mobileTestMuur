<?php

require_once 'db_connection.php';

class weburl extends Db_connection
{

    // temperary url to check if the url is valid
    public $tempUrl;
    // url of the website that will be send to db
    protected $url;
    // db connection
    protected $db;

    // initialize db and connect using pdo
    public function __construct()
    {
        $db = new Db_connection;
        // transfer db connection to usable var
        $this->dblink = $db->connect();
        return $this->dblink;
    }

    protected function prepareWebsiteToDb()
    {
        // prepare sql statement 
        $sql = $this->dblink->prepare("INSERT INTO `adress`(`url`) VALUES (:url)");
        // save url to db
        if ($this->url) {
            $url = $this->url;
            $sql->execute(array('url' => $url));
            return true;
        } else {
            return false;
        }
    }
    public function urlChecker($url)
    {
        // set the temp url
        $this->tempUrl = $url;
        // check if the url is valid
        if ($url = parse_url($this->tempUrl, PHP_URL_SCHEME) && parse_url($this->tempUrl, PHP_URL_HOST)) {
            // set url to temp url
            $this->url = $this->tempUrl;
            return true;
        } else {
            // if url is invalid make sure that the url doens't get saved to the db
            $this->url = false;
            echo 'please enter a valid url';
            return false;
        }
    }
    public function saveToDb($url)
    {

        // // check if url is valid
        $this->urlChecker($url);
        // send if url is true(valid) then send url to db;
        $this->prepareWebsiteToDb();
    }
    public function readFromDb($i)
    {
        $pdo = parent::$pdo;
        sleep(1);
        $sql = $pdo->prepare("SELECT `url` FROM `adress`  ORDER BY id DESC LIMIT $i;");
        $sql->execute();
        $count = $sql->rowCount();
        $results = $sql->fetchAll();
        if ($count > 0) {
            return $results[0]['url'];
        }
    }
}
