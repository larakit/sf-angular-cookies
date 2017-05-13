<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-cookies')
                            ->usePackage('larakit/sf-angular')
                            ->setSourceDir('public')
                            ->jsPackage('angular-cookies.min.js');
