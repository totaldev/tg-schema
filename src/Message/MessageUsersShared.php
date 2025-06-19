<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Shared\SharedUser;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The current user shared users, which were requested by the bot.
 */
class MessageUsersShared extends MessageContent
{
    public const TYPE_NAME = 'messageUsersShared';

    public function __construct(
        /**
         * The shared users.
         *
         * @var SharedUser[]
         */
        protected array $users,
        /**
         * Identifier of the keyboard button with the request.
         */
        protected int   $buttonId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUsersShared
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['users']),
            $array['button_id'],
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->users),
            'button_id' => $this->buttonId,
        ];
    }
}
