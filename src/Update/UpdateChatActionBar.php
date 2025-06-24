<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatActionBar;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat action bar was changed.
 */
class UpdateChatActionBar extends Update
{
    public const TYPE_NAME = 'updateChatActionBar';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int            $chatId,
        /**
         * The new value of the action bar; may be null.
         */
        protected ?ChatActionBar $actionBar
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatActionBar
    {
        return new static(
            $array['chat_id'],
            isset($array['action_bar']) ? TdSchemaRegistry::fromArray($array['action_bar']) : null,
        );
    }

    public function getActionBar(): ?ChatActionBar
    {
        return $this->actionBar;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'action_bar' => $this->actionBar ?? null,
        ];
    }
}
