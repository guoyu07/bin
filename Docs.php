<?php
class Docs extends AbstractCommand
{
    public function __invoke()
    {
        $package = basename(getcwd());
        $this->validateDocs($package);
    }
}
