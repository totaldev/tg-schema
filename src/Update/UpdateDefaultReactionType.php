<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

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
