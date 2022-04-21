<?php

namespace Barryvdh\Composer;

class CleanupRules
{
    public static function getRules()
    {
        // Default patterns for common files
        $docs = 'README* CHANGELOG* FAQ* CONTRIBUTING* HISTORY* UPGRADING* UPGRADE* package* demo example examples doc docs readme* changelog* composer*';
        $tests = '.travis.yml .scrutinizer.yml phpcs.xml* phpcs.php phpunit.xml* phpunit.php test tests Tests travis patchwork.json .github .github/* .gitignore .editorconfig .php_cs* .phpcs* .pullapprove.yml phpstan.neon';

        return array(
            'atgp/factur-x'                         => array($docs, $tests, 'img'),
            'cloudconvert/cloudconvert-php'         => array($docs, $tests),
            'anahkiasen/former'                     => array($docs, $tests),
            'anahkiasen/html-object'                => array($docs, 'phpunit.xml* tests/*'),
            'anahkiasen/rocketeer'                  => array($docs, $tests),
            'anahkiasen/underscore-php'             => array($docs, $tests),
            'aws/aws-sdk-php'                 	    => array($docs, $tests),
            'bacon/bacon-qr-code'                   => array($docs, $tests),
            'barryvdh/composer-cleanup-plugin'      => array($docs, $tests),
            'barryvdh/laravel-debugbar'             => array($docs, $tests),
            'barryvdh/laravel-ide-helper'           => array($docs, $tests),
            'bllim/datatables'                      => array($docs, $tests),
            'cartalyst/sentry'                      => array($docs, $tests),
            'classpreloader/classpreloader'         => array($docs, $tests),
            'clue/stream-filter'                    => array($docs, $tests),
            'd11wtq/boris'                          => array($docs, $tests),
            'dasprid/enum'                          => array($docs, $tests),
            'danielstjules/stringy'                 => array($docs, $tests),
            'dflydev/markdown'                      => array($docs, $tests),
            'dnoegel/php-xdg-base-dir'              => array($docs, $tests),
            'doctrine/annotations'                  => array($docs, $tests, 'bin'),
            'doctrine/cache'                        => array($docs, $tests, 'bin'),
            'doctrine/collections'                  => array($docs, $tests),
            'doctrine/common'                       => array($docs, $tests, 'bin lib/vendor'),
            'doctrine/dbal'                         => array($docs, $tests, 'bin build* docs2 lib/vendor'),
            'doctrine/inflector'                    => array($docs, $tests),
            'dompdf/dompdf'                         => array($docs, $tests, 'www'),
            'endroid/qr-code'                       => array($docs, $tests, 'assets'),
            'ezyang/htmlpurifier'                   => array($docs, $tests, 'VERSION'),
            'firebase/php-jwt'                      => array($docs, $tests),
            'filp/whoops'                           => array($docs, $tests),
            
            'graham-campbell/guzzle-factory'        => array($docs, $tests),
            'guzzle/guzzle'                         => array($docs, $tests),
            'guzzlehttp/guzzle'                     => array($docs, $tests, 'DOCKERFILE vendor-bin'),
            'guzzlehttp/oauth-subscriber'           => array($docs, $tests),
            'guzzlehttp/promises'                   => array($docs, $tests, 'Makefile'),
            'guzzlehttp/psr7'                       => array($docs, $tests),
            'guzzlehttp/streams'                    => array($docs, $tests),
            
            'imagine/imagine'                       => array($docs, $tests, 'lib/Imagine/Test'),
            'intervention/image'                    => array($docs, $tests, 'public'),
            'ircmaxell/password-compat'             => array($docs, $tests),
            'jakub-onderka/php-console-color'       => array($docs, $tests, 'build.xml example.php'),
            'jakub-onderka/php-console-highlighter' => array($docs, $tests, 'build.xml'),
            'jasonlewis/basset'                     => array($docs, $tests),
            'jeremeamia/SuperClosure'               => array($docs, $tests, 'demo'),
            'khanamiryan/qrcode-detector-decoder'   => array($docs, $tests),
            'kriswallsmith/assetic'                 => array($docs, $tests),
            'kunalvarma05/dropbox-php-sdk'          => array($docs, $tests, 'phpunit.xml*'),
            'kmukku/php-iso11649'                   => array($docs, $tests),
            'laravel/framework'                     => array($docs, $tests, 'build'),
            'leafo/lessphp'                         => array($docs, $tests, 'Makefile package.sh'),
            'league/flysystem'                      => array($docs, $tests),
            'league/oauth2-client'                  => array($docs, $tests),
            'league/stack-robots'                   => array($docs, $tests),
            'maennchen/zipstream-php'               => array($docs, $tests, 'psalm.xml'),
            'markbaker/complex'                     => array($docs, $tests),
            'markbaker/matrix'                      => array($docs, $tests, 'infection.json.dist'),
            'maximebf/debugbar'                     => array($docs, $tests, 'demo'),
            'netresearch/jsonmapper'                => array($docs, $tests),
            'mccool/laravel-auto-presenter'         => array($docs, $tests),
            
            'meng-tian/async-soap-guzzle'           => array($docs, $tests, 'phpunit.xml* tests/*'),
            'meng-tian/php-async-soap'              => array($docs, $tests, 'phpunit.xml* tests/*'),
            'meng-tian/php-soap-interpreter'        => array($docs, $tests, 'phpunit.xml* tests/*'),
            'meng-tian/soap-http-binding'           => array($docs, $tests, 'phpunit.xml* tests/*'),
            
            'microsoft/microsoft-graph'             => array($docs, $tests, 'msgraph-sdk-php.yml src/Beta'),
            'mockery/mockery'                       => array($docs, $tests),
            'monolog/monolog'                       => array($docs, $tests),
            'myclabs/php-enum'                      => array($docs, $tests, 'psalm.xml SECURITY.md'),
            'mrclay/minify'                         => array($docs, $tests, 'MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php'),
            'mtdowling/cron-expression'             => array($docs, $tests),
            'mustache/mustache'                     => array($docs, $tests, 'bin'),
            'nesbot/carbon'                         => array($docs, $tests),
            'nikic/php-parser'                      => array($docs, $tests, 'test_old'),
            'oyejorge/less.php'                     => array($docs, $tests),
            'patchwork/utf8'                        => array($docs, $tests),
            'paragonie/random_compat'               => array($docs, $tests, 'dist other psalm.xml'),
            'phenx/php-font-lib'                    => array($docs, $tests. 'www'),
            'phpdocumentor/reflection-docblock'     => array($docs, $tests),
            'phpoffice/phpexcel'                    => array($docs, $tests, 'Examples unitTests changelog.txt'),
            'phpoffice/phpspreadsheet'              => array($docs, $tests, 'samples'),
            'phpseclib/phpseclib'                   => array($docs, $tests, 'build'),
            'predis/predis'                         => array($docs, $tests, 'bin'),
            
            'php-http/client-common'                => array($docs, $tests),
            'php-http/discovery'                    => array($docs, $tests),
            'php-http/guzzle7-adapter'              => array($docs, $tests),
            'php-http/httplug'                      => array($docs, $tests),
            'php-http/message'                      => array($docs, $tests),
            'php-http/message-factory'              => array($docs, $tests),
            'php-http/multipart-stream-builder'     => array($docs, $tests),
            'php-http/promise'                      => array($docs, $tests),
            
            'psr/cache'                             => array($docs, $tests),
            'psr/container'                         => array($docs, $tests),
            'psr/log'                               => array($docs, $tests, 'Psr/Log/Test'),
            'psr/http-client'                       => array($docs, $tests),
            'psr/http-factory'                      => array($docs, $tests),
            'psr/http-message'                      => array($docs, $tests),
            'psy/psysh'                             => array($docs, $tests),
            'psr/simple-cache'                      => array($docs, $tests),
            'quickbooks/v3-php-sdk'                 => array($docs, $tests, 'docs docs/* src/XSD2PHP/test src/XSD2PHP/test/*'),
            'ralouphie/getallheaders'               => array($docs, $tests),
            'rcrowe/twigbridge'                     => array($docs, $tests),
            
            'sabre/dav'                             => array($docs, $tests, 'bin'),
            'sabre/event'                           => array($docs, $tests, 'bin'),
            'sabre/http'                            => array($docs, $tests, 'bin'),
            'sabre/uri'                             => array($docs, $tests, 'bin'),
            'sabre/vobject'                         => array($docs, $tests, 'bin'),
            'sabre/xml'                             => array($docs, $tests, 'bin'),
            
            'setasign/fpdf'                         => array($docs, $tests, 'changelog.htm install.txt tutorial'),
            'setasign/fpdi'                         => array($docs, $tests),
            'simplepie/simplepie'                   => array($docs, $tests, 'build compatibility_test ROADMAP.md'),
            'spatie/dropbox-api'                    => array($docs, $tests),
            'stack/builder'                         => array($docs, $tests),
            'sprain/swiss-qr-bill'                  => array($docs, $tests),
            'swiftmailer/swiftmailer'               => array($docs, $tests, 'build* notes test-suite create_pear_package.php'),
            
            'symfony/cache'                         => array($docs, $tests),
            'symfony/cache-contracts'               => array($docs, $tests),
            'symfony/config'                        => array($docs, $tests),
            'symfony/browser-kit'                   => array($docs, $tests),
            'symfony/class-loader'                  => array($docs, $tests),
            'symfony/console'                       => array($docs, $tests),
            'symfony/css-selector'                  => array($docs, $tests),
            'symfony/debug'                         => array($docs, $tests),
            'symfony/deprecation-contracts'         => array($docs, $tests),
            'symfony/dom-crawler'                   => array($docs, $tests),
            'symfony/dotenv'                        => array($docs, $tests),
            'symfony/event-dispatcher'              => array($docs, $tests),
            'symfony/filesystem'                    => array($docs, $tests),
            'symfony/finder'                        => array($docs, $tests),
            'symfony/http-foundation'               => array($docs, $tests),
            'symfony/http-kernel'                   => array($docs, $tests),
            'symfony/intl'                          => array($docs, $tests, 'Resources/data/*/a* Resources/data/*/b* Resources/data/*/c* Resources/data/*/es* Resources/data/*/g* Resources/data/*/h* Resources/data/*/i* Resources/data/*/j* Resources/data/*/k* Resources/data/*/l* Resources/data/*/n* Resources/data/*/o* Resources/data/*/p* Resources/data/*/q* Resources/data/*/r* Resources/data/*/s* Resources/data/*/t* Resources/data/*/u* Resources/data/*/v* Resources/data/*/w* Resources/data/*/x* Resources/data/*/y* Resources/data/*/z*'),
            'symfony/options-resolver'              => array($docs, $tests),
            'symfony/polyfill-ctype'                => array($docs, $tests),
            'symfony/polyfill-intl-grapheme'        => array($docs, $tests),
            'symfony/polyfill-intl-icu'             => array($docs, $tests),
            'symfony/polyfill-intl-idn'             => array($docs, $tests),
            'symfony/polyfill-intl-normalizer'      => array($docs, $tests),
            'symfony/polyfill-php70'                => array($docs, $tests),
            'symfony/polyfill-php72'                => array($docs, $tests),
            'symfony/polyfill-php73'                => array($docs, $tests),
            'symfony/polyfill-php74'                => array($docs, $tests),
            'symfony/polyfill-php80'                => array($docs, $tests),
            'symfony/process'                       => array($docs, $tests),
            'symfony/property-access'               => array($docs, $tests),
            'symfony/property-info'                 => array($docs, $tests),
            'symfony/routing'                       => array($docs, $tests),
            'symfony/security'                      => array($docs, $tests),
            'symfony/security-core'                 => array($docs, $tests),
            'symfony/service-contracts'             => array($docs, $tests),
            'symfony/string'                        => array($docs, $tests),
            'symfony/translation'                   => array($docs, $tests),
            'symfony/translation-contracts'         => array($docs, $tests),
            'symfony/validator'                     => array($docs, $tests, 'Resources/*/validators.a* Resources/*/validators.b* Resources/*/validators.c* Resources/*/validators.es* Resources/*/validators.g* Resources/*/validators.h* Resources/*/validators.i* Resources/*/validators.j* Resources/*/validators.k* Resources/*/validators.l* Resources/*/validators.m* Resources/*/validators.n* Resources/*/validators.o* Resources/*/validators.p* Resources/*/validators.q* Resources/*/validators.r* Resources/*/validators.s* Resources/*/validators.t* Resources/*/validators.u* Resources/*/validators.v* Resources/*/validators.w* Resources/*/validators.x* Resources/*/validators.y* Resources/*/validators.z*'),
            'symfony/var-dumper'                    => array($docs, $tests),
            
            'tecnickcom/tcpdf'                      => array($docs, $tests, 'fonts'),
            'tightenco/collect'                     => array($docs, $tests, 'collect-logo.png'),
            'tijsverkoyen/css-to-inline-styles'     => array($docs, $tests),
            'twig/twig'                             => array($docs, $tests),
            'venturecraft/revisionable'             => array($docs, $tests),
            'vlucas/phpdotenv'                      => array($docs, $tests),
            'willdurand/geocoder'                   => array($docs, $tests),
            'willdurand/geocoder'                   => array($docs, $tests),
            'zendframework/zend-diactoros'          => array($docs, $tests, 'mkdocs.yml CONDUCT.md'),
            'box/spout'                             => array($docs, $tests),
        );
    }
}
