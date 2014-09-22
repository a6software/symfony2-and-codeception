<?php

namespace A6\CodeceptIsAwesomeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzerCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('a6:fizz-buzz')
            ->setDescription('Do fizz buzz')
            ->addArgument('start', InputArgument::OPTIONAL, 'Number to start at...', 1)
            ->addArgument('end', InputArgument::OPTIONAL, 'Number to end at...', 100)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $service = $this->getContainer()->get('a6_codecept_is_awesome.service.fizz_buzz');

        $results = $service->doFizzBuzzer($input->getArgument('start'), $input->getArgument('end'));

        foreach ($results as $result) {
            $output->writeln($result);
        }

    }
}