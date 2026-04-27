<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\Reaction\ReactionUnavailabilityReason;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of reactions that can be added to a message.
 */
class AvailableReactions extends TdObject
{
    public const string TYPE_NAME = 'availableReactions';

    public function __construct(
        /**
         * True, if any custom emoji reaction can be added by Telegram Premium subscribers.
         */
        protected bool                          $allowCustomEmoji,
        /**
         * True, if the reactions will be tags and the message can be found by them.
         */
        protected bool                          $areTags,
        /**
         * List of popular reactions.
         *
         * @var AvailableReaction[]
         */
        protected array                         $popularReactions,
        /**
         * List of recently used reactions.
         *
         * @var AvailableReaction[]
         */
        protected array                         $recentReactions,
        /**
         * List of reactions to be shown at the top.
         *
         * @var AvailableReaction[]
         */
        protected array                         $topReactions,
        /**
         * The reason why the current user can't add reactions to the message, despite some other users can; may be null if none.
         */
        protected ?ReactionUnavailabilityReason $unavailabilityReason,
    ) {}

    public static function fromArray(array $array): AvailableReactions
    {
        return new static(
            allowCustomEmoji    : $array['allow_custom_emoji'],
            areTags             : $array['are_tags'],
            popularReactions    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['popular_reactions']),
            recentReactions     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_reactions']),
            topReactions        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['top_reactions']),
            unavailabilityReason: (isset($array['unavailability_reason']) ? TdSchemaRegistry::fromArray($array['unavailability_reason']) : null),
        );
    }

    public function getAllowCustomEmoji(): bool
    {
        return $this->allowCustomEmoji;
    }

    public function getAreTags(): bool
    {
        return $this->areTags;
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

    public function getUnavailabilityReason(): ?ReactionUnavailabilityReason
    {
        return $this->unavailabilityReason;
    }

    public function setAllowCustomEmoji(bool $value): static
    {
        $this->allowCustomEmoji = $value;

        return $this;
    }

    public function setAreTags(bool $value): static
    {
        $this->areTags = $value;

        return $this;
    }

    public function setPopularReactions(array $value): static
    {
        $this->popularReactions = $value;

        return $this;
    }

    public function setRecentReactions(array $value): static
    {
        $this->recentReactions = $value;

        return $this;
    }

    public function setTopReactions(array $value): static
    {
        $this->topReactions = $value;

        return $this;
    }

    public function setUnavailabilityReason(?ReactionUnavailabilityReason $value): static
    {
        $this->unavailabilityReason = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'allow_custom_emoji'    => $this->allowCustomEmoji,
            'are_tags'              => $this->areTags,
            'popular_reactions'     => array_map(static fn($x) => $x->jsonSerialize(), $this->popularReactions),
            'recent_reactions'      => array_map(static fn($x) => $x->jsonSerialize(), $this->recentReactions),
            'top_reactions'         => array_map(static fn($x) => $x->jsonSerialize(), $this->topReactions),
            'unavailability_reason' => (null !== $this->unavailabilityReason ? $this->unavailabilityReason->jsonSerialize() : null),
        ];
    }
}
