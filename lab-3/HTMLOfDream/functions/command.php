<?php

use commands\PrintCommand;
use commands\SaveCommand;

$coreLogic = new FileLogic();
$printCommand = new PrintCommand($coreLogic,'id:user');
$saveCommand = new SaveCommand($coreLogic,'id');
$onlineDocument = new Document(saveFile: $saveCommand,printFile:$printCommand );
$onlineDocument->saveFile();
$onlineDocument->printFile();