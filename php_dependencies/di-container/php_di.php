<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


class App
{
    protected $config;
    protected $logger;

    public function __construct(ConfigInterface $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;
    }

    public function run()
    {
        $this->config->setValue('executed_at', time());
        $this->logger->log('executed');

        return $this;
    }
    public function execute()
    {
        $this->config->getValue();
    }
}

interface ConfigInterface
{
    public function getValue();

    public function setValue($path, $value);
}

interface LoggerInterface
{
    public function log($message);
}

class Config implements ConfigInterface
{
    protected $config = [];

    public function getValue()
    {
        // implementation
        echo $this->config["value"];
    }

    public function setValue($path, $value)
    {
        // implementation

        $this->config["path"]=$path;
        $this->config["value"]=$value;
    }
}

class Logger implements LoggerInterface
{
    public function log($message)
    {
        // implementation
        echo $message;
    }
}

// Bootstrapping
$container = new ContainerBuilder();

$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('container.yml');

$container->compile();

// Client code
$app = $container->get('my_app');
$app->run();
$app->execute();