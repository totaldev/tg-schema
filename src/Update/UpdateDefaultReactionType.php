<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The type of default reaction has changed
 */
class UpdateDefaultReactionType extends Update
{
    public const TYPE_NAME = 'updateDefaultReactionType';

    /**
     * The new type of the default reaction
     *
     * @var ReactionType
     */
    protected ReactionType $reactionType;

    public function __construct(ReactionType $reactionType)
    {
        parent::__construct();

        $this->reactionType = $reactionType;
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
            '@type' => static::TYPE_NAME,
            'reaction_type' => $this->reactionType->typeSerialize(),
        ];
    }
}
