<?php
use Mouf\MoufManager;

// Let's declare the contoller
MoufManager::getMoufManager()->declareComponent('basic-user-install', 'Security\\Daos\\Doctrine\\Installer\\Mouf\\UserInstallerController', true);
// Let's bind the 'template' property of the controller to the 'installTemplate' instance
MoufManager::getMoufManager()->bindComponents('basic-user-install', 'template', 'moufInstallTemplate');
MoufManager::getMoufManager()->bindComponents('basic-user-install', 'contentBlock', 'block.content');
?>
