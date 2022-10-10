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

use Limbo\Contracts\Container\HasContainerContract;

/**
 * Interface RouterContract
 *
 * @package   Limbo\Contracts\Router
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface RouterContract extends HasContainerContract
{
    /**
     * Get URI path for route by name and with required arguments.
     *
     * @param string $name
     * @param array  $args
     * @return string
     */
    public function getPath(string $name, array $args = []): string;

    /**
     * Get route by name from collection.
     *
     * @param string $name
     * @return RouteContract
     */
    public function getRoute(string $name): RouteContract;

    /**
     * Check is route with name exists in collection.
     *
     * @param string $name
     * @return bool
     */
    public function hasRoute(string $name): bool;

    /**
     * Get all routes from collection.
     *
     * @return iterable<RouteContract>
     */
    public function getRoutes(): iterable;
}
