<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The type of default reaction has changed.
 */
class UpdateDefaultReactionType extends Update
{
    public const TYPE_NAME = 'updateDefaultReactionType';

    public function __construct(
        /**
         * The new type of the default reaction.
         */
        protected ReactionType $reactionType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDefaultReactionType
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
