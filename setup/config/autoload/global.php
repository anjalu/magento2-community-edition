<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

return [
    'parameters' => [
        'application' => [
            'base_path' => realpath(__DIR__ . '/../../'),
        ],
        'magento' => [
            'base_path' => realpath(__DIR__ . '/../../../'),
            'filesystem' => [
                'module' => '/app/code/',
                'config' => '/app/etc/',
                'framework' => '/lib/internal/Magento/Framework/',
                'permissions' => [
                    'etc' => ['path' => 'app/etc'], // this is needed for installation only
                    'var' => ['path' => 'var'], // to set maintenance mode, as well as for normal application runtime
                    'media' => ['path' => 'pub/media'], // for normal application runtime
                    'static' => ['path' => 'pub/static'] // for runtime, but actually depends on mode
                ],
            ],
        ],
    ],
];
