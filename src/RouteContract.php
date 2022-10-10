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
use Limbo\Contracts\Router\Middleware\MiddlewareContract;

/**
 * Interface RouteContract
 *
 * @package   Limbo\Contracts\Router
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface RouteContract extends HasConditionContract, HasContainerContract, MiddlewareContract
{
    /**
     * Constructor.
     *
     * @param string                     $method
     * @param string                     $path
     * @param callable|array|string      $callback
     * @param string|null                $name
     * @param array                      $args
     * @param RouteGroupContract|null $group
     */
    public function __construct(
        string                  $method,
        string                  $path,
        callable|array|string   $callback,
        string|null             $name = null,
        array                   $args = [],
        RouteGroupContract|null $group = null
    );

    /**
     * Get method for route.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Get URI path for route.
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Get callback function or controller action for route.
     *
     * @return callable
     */
    public function getCallback(): callable;

    /**
     * Get name for route.
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Set name for route.
     *
     * @param string|null $name
     * @return static
     */
    public function setName(string|null $name = null): static;

    /**
     * Get required arguments for route.
     *
     * @return array
     */
    public function getArgs(): array;

    /**
     * Set required arguments for route.
     *
     * @param array $args
     * @return static
     */
    public function setArgs(array $args = []): static;

    /**
     * Get parent group for route.
     *
     * @return RouteGroupContract|null
     */
    public function getGroup(): RouteGroupContract|null;

    /**
     * Set parent group for route.
     *
     * @param RouteGroupContract|null $group
     * @return static
     */
    public function setGroup(RouteGroupContract|null $group = null): static;
}
