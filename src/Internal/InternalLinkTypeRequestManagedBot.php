<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a dialog for creating of a managed bot. Call searchPublicChat with the given manager bot username. If the chat is found, the chat is a
 * chat with a bot and the bot has can_manage_bots == true, then show bot creation confirmation dialog with the given suggested_bot_username and
 * suggested_bot_name. If user agrees, call createBot with via_link == true to create the bot.
 */
class InternalLinkTypeRequestManagedBot extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeRequestManagedBot';

    public function __construct(
        /**
         * Username of the bot which will manage the new bot.
         */
        protected string $managerBotUsername,
        /**
         * Suggested name for the bot; may be empty if not specified.
         */
        protected string $suggestedBotName,
        /**
         * Suggested username for the bot.
         */
        protected string $suggestedBotUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeRequestManagedBot
    {
        return new static(
            managerBotUsername  : $array['manager_bot_username'],
            suggestedBotName    : $array['suggested_bot_name'],
            suggestedBotUsername: $array['suggested_bot_username'],
        );
    }

    public function getManagerBotUsername(): string
    {
        return $this->managerBotUsername;
    }

    public function getSuggestedBotName(): string
    {
        return $this->suggestedBotName;
    }

    public function getSuggestedBotUsername(): string
    {
        return $this->suggestedBotUsername;
    }

    public function setManagerBotUsername(string $value): static
    {
        $this->managerBotUsername = $value;

        return $this;
    }

    public function setSuggestedBotName(string $value): static
    {
        $this->suggestedBotName = $value;

        return $this;
    }

    public function setSuggestedBotUsername(string $value): static
    {
        $this->suggestedBotUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'manager_bot_username'   => $this->managerBotUsername,
            'suggested_bot_name'     => $this->suggestedBotName,
            'suggested_bot_username' => $this->suggestedBotUsername,
        ];
    }
}
