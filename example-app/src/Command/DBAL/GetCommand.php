<?php
/**
 * Copyright © 2016 Elbek Azimov. Contacts: <atom.azimov@gmail.com>
 */

namespace ExampleApp\Command\DBAL;


use ExampleApp\Command\Base\DBALCommand;

class GetCommand extends DBALCommand
{

    protected function doConfigure()
    {
        $this->addIdOption();
    }

    protected function doExecute()
    {
        $uploadable = $this->getUploadable();
        $this->uploader->loaded($uploadable, 'dbal_uploadable');

        $this->view($this->getId(), $uploadable);
    }
}
