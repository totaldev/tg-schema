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
    public const string TYPE_NAME = 'emojiStatusTypeUpgradedGift';

    public function __construct(
        /**
         * Colors of the backdrop of the upgraded gift.
         */
        protected UpgradedGiftBackdropColors $backdropColors,
        /**
         * Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift.
         */
        protected string                     $giftName,
        /**
         * The title of the upgraded gift.
         */
        protected string                     $giftTitle,
        /**
         * Custom emoji identifier of the model of the upgraded gift.
         */
        protected int                        $modelCustomEmojiId,
        /**
         * Custom emoji identifier of the symbol of the upgraded gift.
         */
        protected int                        $symbolCustomEmojiId,
        /**
         * Identifier of the upgraded gift.
         */
        protected int                        $upgradedGiftId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): EmojiStatusTypeUpgradedGift
    {
        return new static(
            backdropColors     : TdSchemaRegistry::fromArray($array['backdrop_colors']),
            giftName           : $array['gift_name'],
            giftTitle          : $array['gift_title'],
            modelCustomEmojiId : $array['model_custom_emoji_id'],
            symbolCustomEmojiId: $array['symbol_custom_emoji_id'],
            upgradedGiftId     : $array['upgraded_gift_id'],
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

    public function setBackdropColors(UpgradedGiftBackdropColors $value): static
    {
        $this->backdropColors = $value;

        return $this;
    }

    public function setGiftName(string $value): static
    {
        $this->giftName = $value;

        return $this;
    }

    public function setGiftTitle(string $value): static
    {
        $this->giftTitle = $value;

        return $this;
    }

    public function setModelCustomEmojiId(int $value): static
    {
        $this->modelCustomEmojiId = $value;

        return $this;
    }

    public function setSymbolCustomEmojiId(int $value): static
    {
        $this->symbolCustomEmojiId = $value;

        return $this;
    }

    public function setUpgradedGiftId(int $value): static
    {
        $this->upgradedGiftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'backdrop_colors'        => $this->backdropColors->jsonSerialize(),
            'gift_name'              => $this->giftName,
            'gift_title'             => $this->giftTitle,
            'model_custom_emoji_id'  => $this->modelCustomEmojiId,
            'symbol_custom_emoji_id' => $this->symbolCustomEmojiId,
            'upgraded_gift_id'       => $this->upgradedGiftId,
        ];
    }
}
