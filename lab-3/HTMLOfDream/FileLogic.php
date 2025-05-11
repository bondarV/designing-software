<?php

use commands\ICommand;

class FileLogic
{
    public function printIntoFile(string $file, string $id): void
    {
        if(is_file($file)){
            file_put_contents($file, $id . " IS SAVED \n", FILE_APPEND);
        }else{
            echo "Sorry,we didn't indify you as our user";
        }

    }

    public function saveOnlineVersion(string $id): void
    {
//        echo 'Our GUI in the site each time when we fires up reveals these data' . PHP_EOL;
//        echo 'Remote storage rather than that which works as logging system' . PHP_EOL;
        echo "Saving version $id\n";
    }

}