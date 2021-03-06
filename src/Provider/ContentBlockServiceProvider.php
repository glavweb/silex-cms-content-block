<?php

/*
 * This file is part of the GLAVWEB.cms SilexCmsContentBlock package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glavweb\SilexCmsContentBlock\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Glavweb\CmsContentBlock\Service\ContentBlockService;

/**
 * ContentBlockServiceProvider
 *
 * @package Glavweb\SilexCmsContentBlock
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class ContentBlockServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $app)
    {
        $app['content_block_service'] = function () use ($app) {
            return new ContentBlockService(
                $app['cms_rest_client']
            );
        };
    }
}
