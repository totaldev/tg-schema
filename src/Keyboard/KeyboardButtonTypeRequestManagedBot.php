<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

/**
 * A button that requests creation of a managed bot by the current user; available only in private chats. Use the method createBot to complete the request.
 */
class KeyboardButtonTypeRequestManagedBot extends KeyboardButtonType
{
    public const string TYPE_NAME = 'keyboardButtonTypeRequestManagedBot';

    public function __construct(
        /**
         * Unique button identifier.
         */
        protected int    $id,
        /**
         * Suggested name for the bot; may be empty if not specified.
         */
        protected string $suggestedName,
        /**
         * Suggested username for the bot; may be empty if not specified.
         */
        protected string $suggestedUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestManagedBot
    {
        return new static(
            id               : $array['id'],
            suggestedName    : $array['suggested_name'],
            suggestedUsername: $array['suggested_username'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSuggestedName(): string
    {
        return $this->suggestedName;
    }

    public function getSuggestedUsername(): string
    {
        return $this->suggestedUsername;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setSuggestedName(string $value): static
    {
        $this->suggestedName = $value;

        return $this;
    }

    public function setSuggestedUsername(string $value): static
    {
        $this->suggestedUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'suggested_name'     => $this->suggestedName,
            'suggested_username' => $this->suggestedUsername,
        ];
    }
}
