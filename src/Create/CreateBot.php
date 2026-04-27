<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a bot which will be managed by another bot. Returns the created bot. May return an error with a message "BOT_CREATE_LIMIT_EXCEEDED" if the user
 * already owns the maximum allowed number of bots as per premiumLimitTypeOwnedBotCount. An internal link "https://t.me/BotFather?start=deletebot" can be
 * processed to handle the error.
 */
class CreateBot extends TdFunction
{
    public const string TYPE_NAME = 'createBot';

    public function __construct(
        /**
         * Identifier of the bot that will manage the created bot.
         */
        protected int    $managerBotUserId,
        /**
         * Name of the bot; 1-64 characters.
         */
        protected string $name,
        /**
         * Username of the bot. The username must end with "bot". Use checkBotUsername to find whether the name is suitable.
         */
        protected string $username,
        /**
         * Pass true if the bot is created from an internalLinkTypeRequestManagedBot link.
         */
        protected bool   $viaLink,
    ) {}

    public static function fromArray(array $array): CreateBot
    {
        return new static(
            managerBotUserId: $array['manager_bot_user_id'],
            name            : $array['name'],
            username        : $array['username'],
            viaLink         : $array['via_link'],
        );
    }

    public function getManagerBotUserId(): int
    {
        return $this->managerBotUserId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getViaLink(): bool
    {
        return $this->viaLink;
    }

    public function setManagerBotUserId(int $value): static
    {
        $this->managerBotUserId = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function setViaLink(bool $value): static
    {
        $this->viaLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'manager_bot_user_id' => $this->managerBotUserId,
            'name'                => $this->name,
            'username'            => $this->username,
            'via_link'            => $this->viaLink,
        ];
    }
}
