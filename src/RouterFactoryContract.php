<?php declare(strict_types=1);

/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\Router;

use Limbo\Contracts\Factory\FactoryContract;
use Limbo\Contracts\Container\ContainerContract;

/**
 * Interface RouterFactoryContract
 *
 * @package   Limbo\Contracts\Router
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface RouterFactoryContract extends FactoryContract
{
    /**
     * Create router.
     *
     * @return RouterContract
     */
    public static function create(): RouterContract;

    /**
     * Create router with given container.
     *
     * @param ContainerContract $container
     * @return RouterContract
     */
    public function createRouter(ContainerContract $container): RouterContract;
}
