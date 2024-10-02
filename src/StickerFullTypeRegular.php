<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The sticker is a regular sticker
 */
class StickerFullTypeRegular extends StickerFullType
{
    public const TYPE_NAME = 'stickerFullTypeRegular';

    /**
     * Premium animation of the sticker; may be null. If present, only Telegram Premium users can use the sticker
     *
     * @var File|null
     */
    protected ?File $premiumAnimation;

    public function __construct(?File $premiumAnimation)
    {
        parent::__construct();

        $this->premiumAnimation = $premiumAnimation;
    }

    public static function fromArray(array $array): StickerFullTypeRegular
    {
        return new static(
            (isset($array['premium_animation']) ? TdSchemaRegistry::fromArray($array['premium_animation']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'premium_animation' => (isset($this->premiumAnimation) ? $this->premiumAnimation : null),
        ];
    }

    public function getPremiumAnimation(): ?File
    {
        return $this->premiumAnimation;
    }
}
