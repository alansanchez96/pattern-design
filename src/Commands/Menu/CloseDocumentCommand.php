<?php

namespace Src\Commands\Menu;

use Src\Document;
use Src\Interface\Command;

class CloseDocumentCommand implements Command
{
    protected Document $document;

    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    public function execute()
    {
        $this->document->close();
    }
}
