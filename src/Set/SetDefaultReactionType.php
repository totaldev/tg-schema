<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes type of default reaction for the current user.
 */
class SetDefaultReactionType extends TdFunction
{
    public const TYPE_NAME = 'setDefaultReactionType';

    public function __construct(
        /**
         * New type of the default reaction. The paid reaction can't be set as default.
         */
        protected ReactionType $reactionType
    ) {}

    public static function fromArray(array $array): SetDefaultReactionType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reaction_type']),
        );
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'reaction_type' => $this->reactionType->typeSerialize(),
        ];
    }
}
