<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A sticker message
 */
class MessageSticker extends MessageContent
{
    public const TYPE_NAME = 'messageSticker';

    /**
     * True, if premium animation of the sticker must be played
     *
     * @var bool
     */
    protected bool $isPremium;

    /**
     * The sticker description
     *
     * @var Sticker
     */
    protected Sticker $sticker;

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

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
            'is_premium' => $this->isPremium,
        ];
    }
}
