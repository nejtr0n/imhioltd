<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 26.03.18
 * Time: 21:10
 */

use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;

$view = new View();

$view->setViewsDir(config("views.dir"));

$view->registerEngines(
    [
        config("views.volt.extension") => function ($view, $di) {
            $volt = new Volt($view, $di);
            $volt->setOptions([
                'compileAlways'     => config("views.volt.compileAlways"),
                'compiledPath' => function($templatePath) {
                    $cacheFile = str_replace(config("views.dir"),
                        config("views.volt.compiledPath"),
                        $templatePath
                    );
                    $dirName = dirname($cacheFile);
                    if (!is_dir($dirName)) {
                        mkdir($dirName, 0777, true);
                    }
                    return $cacheFile;
                },
                'compiledSeparator'      => config("views.volt.compiledSeparator"),
                'compiledExtension' => config("views.volt.compiledExtension")
            ]);
            $compiler = $volt->getCompiler();
            $compiler
                ->addFilter('arrayColumn', function ($resolvedArgs, $exprArgs) {
                    return vsprintf('array_column(%s, %s)', explode(', ', $resolvedArgs));
                })
                ->addFilter('dateFormat', function ($resolvedArgs, $exprArgs) {
                    return vsprintf('(new DateTime(%s))->format(%s)', explode(', ', $resolvedArgs));
                });
            return $volt;
        }
    ]
);

return $view;