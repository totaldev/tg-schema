<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns outline of a sticker. This is an offline method. Returns a 404 error if the outline isn't known.
 */
class GetStickerOutline extends TdFunction
{
    public const TYPE_NAME = 'getStickerOutline';

    public function __construct(
        /**
         * File identifier of the sticker.
         */
        protected int  $stickerFileId,
        /**
         * Pass true to get the outline scaled for animated emoji.
         */
        protected bool $forAnimatedEmoji,
        /**
         * Pass true to get the outline scaled for clicked animated emoji message.
         */
        protected bool $forClickedAnimatedEmojiMessage
    ) {}

    public static function fromArray(array $array): GetStickerOutline
    {
        return new static(
            $array['sticker_file_id'],
            $array['for_animated_emoji'],
            $array['for_clicked_animated_emoji_message'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'sticker_file_id'                    => $this->stickerFileId,
            'for_animated_emoji'                 => $this->forAnimatedEmoji,
            'for_clicked_animated_emoji_message' => $this->forClickedAnimatedEmojiMessage,
        ];
    }
}
