<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Download or upload file speed for the user was limited, but it can be restored by subscription to Telegram Premium. The notification can be postponed until
 * a being downloaded or uploaded file is visible to the user. Use getOption("premium_download_speedup") or getOption("premium_upload_speedup") to get expected
 * speedup after subscription to Telegram Premium.
 */
class UpdateSpeedLimitNotification extends Update
{
    public const TYPE_NAME = 'updateSpeedLimitNotification';

    public function __construct(
        /**
         * True, if upload speed was limited; false, if download speed was limited.
         */
        protected bool $isUpload
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSpeedLimitNotification
    {
        return new static(
            $array['is_upload'],
        );
    }

    public function getIsUpload(): bool
    {
        return $this->isUpload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_upload' => $this->isUpload,
        ];
    }
}
