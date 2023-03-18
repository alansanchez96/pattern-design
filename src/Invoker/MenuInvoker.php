<?php

namespace Src\Invoker;

use Src\Commands\Menu\OpenDocumentCommand;
use Src\Commands\Menu\SaveDocumentCommand;
use Src\Commands\Menu\CloseDocumentCommand;

class MenuInvoker
{
    protected OpenDocumentCommand $openDocument;

    protected CloseDocumentCommand $closeDocument;

    protected SaveDocumentCommand $saveDocuemnt;

    public function __construct(
        OpenDocumentCommand $openDocument,
        CloseDocumentCommand $closeDocument,
        SaveDocumentCommand $saveDocuemnt
    ) {
        $this->openDocument = $openDocument;
        $this->closeDocument = $closeDocument;
        $this->saveDocuemnt = $saveDocuemnt;
    }

    public function open()
    {
        $this->openDocument->execute();
    }

    public function close()
    {
        $this->closeDocument->execute();
    }

    public function save()
    {
        $this->saveDocuemnt->execute();
    }
}
