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
    public const string TYPE_NAME = 'messageUsersShared';

    public function __construct(
        /**
         * Identifier of the keyboard button with the request.
         */
        protected int   $buttonId,
        /**
         * The shared users.
         *
         * @var SharedUser[]
         */
        protected array $users,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUsersShared
    {
        return new static(
            buttonId: $array['button_id'],
            users   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['users']),
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

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

        return $this;
    }

    public function setUsers(array $value): static
    {
        $this->users = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'button_id' => $this->buttonId,
            'users'     => array_map(static fn($x) => $x->jsonSerialize(), $this->users),
        ];
    }
}
