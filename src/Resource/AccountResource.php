<?php

/*
 * This file is part of the zibios/wrike-php-library package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpLibrary\Resource;

use Zibios\WrikePhpLibrary\Enum\Api\RequestPathFormatEnum;
use Zibios\WrikePhpLibrary\Enum\Api\ResourceMethodEnum;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetByIdTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\UpdateTrait;

/**
 * Account Resource.
 */
class AccountResource extends AbstractResource
{
    use GetAllTrait;
    use GetByIdTrait;
    use UpdateTrait;

    /**
     * @return array
     */
    protected function getResourceMethodConfiguration()
    {
        return [
            ResourceMethodEnum::GET_ALL => RequestPathFormatEnum::ACCOUNTS,
            ResourceMethodEnum::GET_BY_ID => RequestPathFormatEnum::ACCOUNTS_BY_ID,
            ResourceMethodEnum::UPDATE => RequestPathFormatEnum::ACCOUNTS_BY_ID,
        ];
    }
}