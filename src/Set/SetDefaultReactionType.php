<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes type of default reaction for the current user
 */
class SetDefaultReactionType extends TdFunction
{
    public const TYPE_NAME = 'setDefaultReactionType';

    /**
     * New type of the default reaction
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    public function __construct(ReactionType $reactionType)
    {
        $this->reactionType = $reactionType;
    }

    public static function fromArray(array $array): SetDefaultReactionType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['reaction_type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'reaction_type' => $this->reactionType->typeSerialize(),
        ];
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }
}
