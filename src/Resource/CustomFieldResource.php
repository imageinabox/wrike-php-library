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
use Zibios\WrikePhpLibrary\Resource\Traits\CreateForAccountTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllForAccountTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetByIdsTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetByIdTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\UpdateTrait;

/**
 * Custom Field Resource.
 */
class CustomFieldResource extends AbstractResource
{
    use GetAllTrait;
    use GetAllForAccountTrait;
    use GetByIdTrait;
    use GetByIdsTrait;
    use CreateForAccountTrait;
    use UpdateTrait;

    /**
     * @return array
     */
    protected function getResourceMethodConfiguration()
    {
        return [
            ResourceMethodEnum::GET_ALL => RequestPathFormatEnum::CUSTOM_FIELDS,
            ResourceMethodEnum::GET_ALL_FOR_ACCOUNT => RequestPathFormatEnum::CUSTOM_FIELDS_FOR_ACCOUNT,
            ResourceMethodEnum::GET_BY_ID => RequestPathFormatEnum::CUSTOM_FIELDS_BY_ID,
            ResourceMethodEnum::GET_BY_IDS => RequestPathFormatEnum::CUSTOM_FIELDS_BY_IDS,
            ResourceMethodEnum::CREATE_FOR_ACCOUNT => RequestPathFormatEnum::CUSTOM_FIELDS_FOR_ACCOUNT,
            ResourceMethodEnum::UPDATE => RequestPathFormatEnum::CUSTOM_FIELDS_BY_ID,
        ];
    }
}
