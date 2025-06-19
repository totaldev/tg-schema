<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftBackdropColors;

/**
 * An upgraded gift set as emoji status.
 */
class EmojiStatusTypeUpgradedGift extends EmojiStatusType
{
    public const TYPE_NAME = 'emojiStatusTypeUpgradedGift';

    public function __construct(
        /**
         * Identifier of the upgraded gift.
         */
        protected int                        $upgradedGiftId,
        /**
         * The title of the upgraded gift.
         */
        protected string                     $giftTitle,
        /**
         * Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift.
         */
        protected string                     $giftName,
        /**
         * Custom emoji identifier of the model of the upgraded gift.
         */
        protected int                        $modelCustomEmojiId,
        /**
         * Custom emoji identifier of the symbol of the upgraded gift.
         */
        protected int                        $symbolCustomEmojiId,
        /**
         * Colors of the backdrop of the upgraded gift.
         */
        protected UpgradedGiftBackdropColors $backdropColors,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiStatusTypeUpgradedGift
    {
        return new static(
            $array['upgraded_gift_id'],
            $array['gift_title'],
            $array['gift_name'],
            $array['model_custom_emoji_id'],
            $array['symbol_custom_emoji_id'],
            TdSchemaRegistry::fromArray($array['backdrop_colors']),
        );
    }

    public function getBackdropColors(): UpgradedGiftBackdropColors
    {
        return $this->backdropColors;
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function getGiftTitle(): string
    {
        return $this->giftTitle;
    }

    public function getModelCustomEmojiId(): int
    {
        return $this->modelCustomEmojiId;
    }

    public function getSymbolCustomEmojiId(): int
    {
        return $this->symbolCustomEmojiId;
    }

    public function getUpgradedGiftId(): int
    {
        return $this->upgradedGiftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'upgraded_gift_id'       => $this->upgradedGiftId,
            'gift_title'             => $this->giftTitle,
            'gift_name'              => $this->giftName,
            'model_custom_emoji_id'  => $this->modelCustomEmojiId,
            'symbol_custom_emoji_id' => $this->symbolCustomEmojiId,
            'backdrop_colors'        => $this->backdropColors->typeSerialize(),
        ];
    }
}
