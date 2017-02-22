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
use Zibios\WrikePhpLibrary\Resource\Traits\CreateForFolderTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\CreateForTaskTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\DeleteTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\DownloadPreviewTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\DownloadTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllForAccountTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllForFolderTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetAllForTaskTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetByIdTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\GetPublicUrlTrait;
use Zibios\WrikePhpLibrary\Resource\Traits\UpdateTrait;

/**
 * Attachment Resource.
 */
class AttachmentResource extends AbstractResource
{
    use GetAllForAccountTrait;
    use GetAllForFolderTrait;
    use GetAllForTaskTrait;
    use GetByIdTrait;
    use DownloadTrait;
    use DownloadPreviewTrait;
    use GetPublicUrlTrait;
    use CreateForFolderTrait;
    use CreateForTaskTrait;
    use UpdateTrait;
    use DeleteTrait;

    /**
     * @return array
     */
    protected function getResourceMethodConfiguration()
    {
        return [
            ResourceMethodEnum::GET_ALL_FOR_ACCOUNT => RequestPathFormatEnum::ATTACHMENTS_FOR_ACCOUNT,
            ResourceMethodEnum::GET_ALL_FOR_FOLDER => RequestPathFormatEnum::ATTACHMENTS_FOR_FOLDER,
            ResourceMethodEnum::GET_ALL_FOR_TASK => RequestPathFormatEnum::ATTACHMENTS_FOR_TASK,
            ResourceMethodEnum::GET_BY_ID => RequestPathFormatEnum::ATTACHMENTS_BY_ID,
            ResourceMethodEnum::DOWNLOAD => RequestPathFormatEnum::ATTACHMENTS_DOWNLOAD,
            ResourceMethodEnum::DOWNLOAD_PREVIEW => RequestPathFormatEnum::ATTACHMENTS_DOWNLOAD_PREVIEW,
            ResourceMethodEnum::GET_PUBLIC_URL => RequestPathFormatEnum::ATTACHMENTS_URL,
            ResourceMethodEnum::CREATE_FOR_FOLDER => RequestPathFormatEnum::ATTACHMENTS_FOR_FOLDER,
            ResourceMethodEnum::CREATE_FOR_TASK => RequestPathFormatEnum::ATTACHMENTS_FOR_TASK,
            ResourceMethodEnum::UPDATE => RequestPathFormatEnum::ATTACHMENTS_BY_ID,
            ResourceMethodEnum::DELETE => RequestPathFormatEnum::ATTACHMENTS_BY_ID,
        ];
    }
}