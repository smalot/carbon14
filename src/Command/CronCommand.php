<?php

namespace Carbon14\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CronCommand
 * @package Carbon14\Command
 */
class CronCommand extends Command
{
    /**
     *
     */
    protected function configure()
    {
        $this
          ->setName('cron')
          ->setDescription('Cron process')
          ->setHelp('')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}
