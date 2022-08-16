<?php
namespace Deployer;

require 'recipe/composer.php';

// Config

set('repository', 'git@github.com:mrmuminov/deployer-test.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('193.109.79.174')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/deployer/');

// Hooks

after('deploy:failed', 'deploy:unlock');
