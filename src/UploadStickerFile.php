<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Uploads a file with a sticker; returns the uploaded file
 */
class UploadStickerFile extends TdFunction
{
    public const TYPE_NAME = 'uploadStickerFile';

    /**
     * Sticker file owner; ignored for regular users
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker format
     *
     * @var StickerFormat
     */
    protected StickerFormat $stickerFormat;

    /**
     * File file to upload; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(int $userId, StickerFormat $stickerFormat, InputFile $sticker)
    {
        $this->userId = $userId;
        $this->stickerFormat = $stickerFormat;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): UploadStickerFile
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['sticker_format']),
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'sticker_format' => $this->stickerFormat->typeSerialize(),
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getStickerFormat(): StickerFormat
    {
        return $this->stickerFormat;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }
}
