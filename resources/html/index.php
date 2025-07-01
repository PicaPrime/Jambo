<?php

require 'vendor/autoload.php';

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Factory;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Compilers\BladeCompiler;

// Set paths
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

// Setup blade compiler
$bladeCompiler = new BladeCompiler(new Illuminate\Filesystem\Filesystem, $cache);

$resolver = new EngineResolver();
$resolver->register('blade', function () use ($bladeCompiler) {
    return new CompilerEngine($bladeCompiler);
});

$finder = new FileViewFinder(new Illuminate\Filesystem\Filesystem, [$views]);
$factory = new Factory($resolver, $finder, new Dispatcher(new Container()));
$factory->addExtension('blade.php', 'blade');

// Render view
echo $factory->make('home', ['name' => 'Naimul'])->render();
