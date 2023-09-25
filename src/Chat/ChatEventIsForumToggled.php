<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The is_forum setting of a channel was toggled
 */
class ChatEventIsForumToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventIsForumToggled';

    /**
     * New value of is_forum
     *
     * @var bool
     */
    protected bool $isForum;

    public function __construct(bool $isForum)
    {
        parent::__construct();

        $this->isForum = $isForum;
    }

    public static function fromArray(array $array): ChatEventIsForumToggled
    {
        return new static(
            $array['is_forum'],
        );
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_forum' => $this->isForum,
        ];
    }
}
