<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of active emoji reactions has changed.
 */
class UpdateActiveEmojiReactions extends Update
{
    public const TYPE_NAME = 'updateActiveEmojiReactions';

    public function __construct(
        /**
         * The new list of active emoji reactions.
         *
         * @var string[]
         */
        protected array $emojis
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateActiveEmojiReactions
    {
        return new static(
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }
}
