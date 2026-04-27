<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns outline of a sticker as an SVG path. This is an offline method. Returns an empty string if the outline isn't known.
 */
class GetStickerOutlineSvgPath extends TdFunction
{
    public const string TYPE_NAME = 'getStickerOutlineSvgPath';

    public function __construct(
        /**
         * Pass true to get the outline scaled for animated emoji.
         */
        protected bool $forAnimatedEmoji,
        /**
         * Pass true to get the outline scaled for clicked animated emoji message.
         */
        protected bool $forClickedAnimatedEmojiMessage,
        /**
         * File identifier of the sticker.
         */
        protected int  $stickerFileId,
    ) {}

    public static function fromArray(array $array): GetStickerOutlineSvgPath
    {
        return new static(
            forAnimatedEmoji              : $array['for_animated_emoji'],
            forClickedAnimatedEmojiMessage: $array['for_clicked_animated_emoji_message'],
            stickerFileId                 : $array['sticker_file_id'],
        );
    }

    public function getForAnimatedEmoji(): bool
    {
        return $this->forAnimatedEmoji;
    }

    public function getForClickedAnimatedEmojiMessage(): bool
    {
        return $this->forClickedAnimatedEmojiMessage;
    }

    public function getStickerFileId(): int
    {
        return $this->stickerFileId;
    }

    public function setForAnimatedEmoji(bool $value): static
    {
        $this->forAnimatedEmoji = $value;

        return $this;
    }

    public function setForClickedAnimatedEmojiMessage(bool $value): static
    {
        $this->forClickedAnimatedEmojiMessage = $value;

        return $this;
    }

    public function setStickerFileId(int $value): static
    {
        $this->stickerFileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'for_animated_emoji'                 => $this->forAnimatedEmoji,
            'for_clicked_animated_emoji_message' => $this->forClickedAnimatedEmojiMessage,
            'sticker_file_id'                    => $this->stickerFileId,
        ];
    }
}
