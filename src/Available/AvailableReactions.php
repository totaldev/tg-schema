<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of reactions that can be added to a message
 */
class AvailableReactions extends TdObject
{
    public const TYPE_NAME = 'availableReactions';

    /**
     * True, if custom emoji reactions could be added by Telegram Premium subscribers
     *
     * @var bool
     */
    protected bool $allowCustomEmoji;

    /**
     * List of popular reactions
     *
     * @var AvailableReaction[]
     */
    protected array $popularReactions;

    /**
     * List of recently used reactions
     *
     * @var AvailableReaction[]
     */
    protected array $recentReactions;

    /**
     * List of reactions to be shown at the top
     *
     * @var AvailableReaction[]
     */
    protected array $topReactions;

    public function __construct(
        array $topReactions,
        array $recentReactions,
        array $popularReactions,
        bool  $allowCustomEmoji,
    )
    {
        $this->topReactions = $topReactions;
        $this->recentReactions = $recentReactions;
        $this->popularReactions = $popularReactions;
        $this->allowCustomEmoji = $allowCustomEmoji;
    }

    public static function fromArray(array $array): AvailableReactions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['top_reactions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_reactions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['popular_reactions']),
            $array['allow_custom_emoji'],
        );
    }

    public function getAllowCustomEmoji(): bool
    {
        return $this->allowCustomEmoji;
    }

    public function getPopularReactions(): array
    {
        return $this->popularReactions;
    }

    public function getRecentReactions(): array
    {
        return $this->recentReactions;
    }

    public function getTopReactions(): array
    {
        return $this->topReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->topReactions),
            array_map(fn($x) => $x->typeSerialize(), $this->recentReactions),
            array_map(fn($x) => $x->typeSerialize(), $this->popularReactions),
            'allow_custom_emoji' => $this->allowCustomEmoji,
        ];
    }
}
