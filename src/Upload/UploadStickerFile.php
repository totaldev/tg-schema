<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upload;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\Sticker\StickerFormat;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Uploads a file with a sticker; returns the uploaded file.
 */
class UploadStickerFile extends TdFunction
{
    public const string TYPE_NAME = 'uploadStickerFile';

    public function __construct(
        /**
         * Sticker file owner; ignored for regular users.
         */
        protected int           $userId,
        /**
         * Sticker format.
         */
        protected StickerFormat $stickerFormat,
        /**
         * File file to upload; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements.
         */
        protected InputFile     $sticker,
    ) {}

    public static function fromArray(array $array): UploadStickerFile
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['sticker_format']),
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getStickerFormat(): StickerFormat
    {
        return $this->stickerFormat;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setSticker(InputFile $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setStickerFormat(StickerFormat $value): static
    {
        $this->stickerFormat = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'user_id'        => $this->userId,
            'sticker_format' => $this->stickerFormat->typeSerialize(),
            'sticker'        => $this->sticker->typeSerialize(),
        ];
    }
}
