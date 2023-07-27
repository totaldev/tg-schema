<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

/**
 * A sticker message
 */
class MessageSticker extends MessageContent
{
    public const TYPE_NAME = 'messageSticker';

    /**
     * The sticker description
     *
     * @var Sticker
     */
    protected Sticker $sticker;

    /**
     * True, if premium animation of the sticker must be played
     *
     * @var bool
     */
    protected bool $isPremium;

    public function __construct(Sticker $sticker, bool $isPremium)
    {
        parent::__construct();

        $this->sticker = $sticker;
        $this->isPremium = $isPremium;
    }

    public static function fromArray(array $array): MessageSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['is_premium'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'is_premium' => $this->isPremium,
        ];
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }
}
