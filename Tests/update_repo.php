<?php

require_once __DIR__ . '/../autoload.php';

$factory = new \Beanstalk\BeanstalkFactory();
$beanstalk = $factory->create([
    'username' => 'seiffert',
    'accessToken' => '1d35889c5e26548aff763a37616c93a954463c7f1e15520468d4',
    'account' => 'seiffert'
]);

$beanstalk->updateRepository(556269, new \Beanstalk\Command\UpdateRepository('Test', 'red'));

$repositories = $beanstalk->findAllRepositories();
if (0 < count($repositories) && 'red' === $repositories[0]->getColorLabel() && 'Test' === $repositories[0]->getTitle()) {
    echo 'OK', PHP_EOL;
} else {
    echo 'NOT OK', PHP_EOL;
}

$beanstalk->updateRepository(556269, new \Beanstalk\Command\UpdateRepository('test-repository', 'blue'));
