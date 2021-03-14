<?php

#===============================================================================
#-------------------------------- Settings -------------------------------------
#===============================================================================

/*  Database */
define('HOST','mysql80-afe9.euw2.cloud.ametnes.com'); # Database host name
define('DBNAME','Raina Lohar'); # Database name
define('DBUSERNAME','hFwvCugdZU'); # Database username
define('DBPASSWORD','gHqLbx4UPq2YVoY9HksF'); # Database password

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

/*  Telegram Bot API Key */
define('API_KEY','1370150385:AAH36xDrK0aMeoIrDvfFQ6lAVUKzuVETWPE');  # Enter bot api token
define('APP_URL','https://api.telegram.org/bot'.API_KEY);   ## Don't edit this line ##

#===============================================================================
#-------------------------- Connect to database --------------------------------
#===============================================================================
try {
    $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8mb4', DBUSERNAME, DBPASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create tables
    include_once __DIR__ . '/tables.php';
    $conn->exec($filesTable);
    $conn->exec($usersTable);
}catch(PDOException $e) {
    file_put_contents('Error_log.txt', $e->getMessage());   # Save Errors in: 'Error_log.txt'
}

#\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\

/*  Folders */
$folder         =   'upload';   # Save All Files In Folder Name
$imageFolder    =   'image';    # Save Images In Folder Name
$videoFolder    =   'video';    # Save Videos In Folder Name
$musicFolder    =   'music';    # Save Musics In Folder Name
$fileFolder     =   'file';     # Save Other Files In Folder Name

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

/*  Files Delete After... 
*   
*   You should enter in second, For example:
*   
*   60          =>      one minute
*   3600        =>      one hour
*   86400       =>      one day
*   172800      =>      two days
*   604800      =>      one week
*   
*/
$FilesDeleteAfter = 604800;

#\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\

/* lang */
$lang = 'en';

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

include_once __DIR__ . "/langs/$lang.php";
