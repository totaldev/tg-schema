<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Only specific reactions are available in the chat
 */
class ChatAvailableReactionsSome extends ChatAvailableReactions
{
    public const TYPE_NAME = 'chatAvailableReactionsSome';

    /**
     * The list of reactions
     *
     * @var ReactionType[]
     */
    protected array $reactions;

    public function __construct(array $reactions)
    {
        parent::__construct();

        $this->reactions = $reactions;
    }

    public static function fromArray(array $array): ChatAvailableReactionsSome
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reactions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->reactions),
        ];
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }
}
