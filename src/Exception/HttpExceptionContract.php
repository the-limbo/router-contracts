<?php declare(strict_types=1);

/*
 * This file is part of the TheLimbo package.
 *
 * (c) dr0n1k <a.dronov4job@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limbo\Contracts\Router\Exception;

use Throwable;

/**
 * Interface HttpExceptionContract
 *
 * @package   Limbo\Contracts\Router\Exception
 * @author    dr0n1k <a.dronov4job@yandex.ru>
 * @copyright TheLimbo 2022
 * @license   MIT
 */
interface HttpExceptionContract extends Throwable
{
    /**
     * Get response status code.
     *
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * Get response headers.
     *
     * @return array
     */
    public function getHeaders(): array;
}
