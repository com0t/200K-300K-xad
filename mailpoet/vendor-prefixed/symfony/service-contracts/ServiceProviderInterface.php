<?php
 namespace MailPoetVendor\Symfony\Contracts\Service; if (!defined('ABSPATH')) exit; use MailPoetVendor\Psr\Container\ContainerInterface; interface ServiceProviderInterface extends \MailPoetVendor\Psr\Container\ContainerInterface { public function getProvidedServices() : array; } 