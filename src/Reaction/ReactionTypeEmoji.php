<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A reaction with an emoji
 */
class ReactionTypeEmoji extends ReactionType
{
    public const TYPE_NAME = 'reactionTypeEmoji';

    /**
     * Text representation of the reaction
     *
     * @var string
     */
    protected string $emoji;

    public function __construct(string $emoji)
    {
        parent::__construct();

        $this->emoji = $emoji;
    }

    public static function fromArray(array $array): ReactionTypeEmoji
    {
        return new static(
            $array['emoji'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
