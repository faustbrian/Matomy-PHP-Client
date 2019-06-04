<?php

declare(strict_types=1);

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Matomy\API;

use Plients\Http\HttpResponse;

class Codes extends AbstractAPI
{
    public function search(array $parameters = []): HttpResponse
    {
        return $this->client->get('getcodes', $parameters);
    }
}
