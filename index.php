<?php

require __DIR__ . '/public/app.php';

use Src\Lamp;
use Src\Document;
use Src\Invoker\SwitchInvoker;
use Src\Commands\Switch\OnCommand;
use Src\Commands\Switch\OffCommand;
use Src\Commands\Menu\OpenDocumentCommand;
use Src\Commands\Menu\SaveDocumentCommand;
use Src\Commands\Menu\CloseDocumentCommand;
use Src\Invoker\MenuInvoker;

// Example_1 {Lamp}
$lamp = new Lamp;
$onCommand = new OnCommand($lamp);
$offCommand = new OffCommand($lamp);

$switch = new SwitchInvoker($onCommand, $offCommand);

$switch->on();
$switch->off();

echo '<hr>';

// Example_2 {Document}
$document = new Document;
$openDocument = new OpenDocumentCommand($document);
$closeDocument = new CloseDocumentCommand($document);
$saveDocument = new SaveDocumentCommand($document);

$menu = new MenuInvoker($openDocument, $closeDocument, $saveDocument);

$menu->open();
$menu->close();
$menu->save();
