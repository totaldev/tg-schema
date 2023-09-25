<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of active emoji reactions has changed
 */
class UpdateActiveEmojiReactions extends Update
{
    public const TYPE_NAME = 'updateActiveEmojiReactions';

    /**
     * The new list of active emoji reactions
     *
     * @var string[]
     */
    protected array $emojis;

    public function __construct(array $emojis)
    {
        parent::__construct();

        $this->emojis = $emojis;
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
            '@type' => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }
}
