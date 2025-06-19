<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes parameters of verification that is provided by a bot.
 */
class BotVerificationParameters extends TdObject
{
    public const TYPE_NAME = 'botVerificationParameters';

    public function __construct(
        /**
         * Identifier of the custom emoji that is used as the verification sign.
         */
        protected int            $iconCustomEmojiId,
        /**
         * Name of the organization that provides verification.
         */
        protected string         $organizationName,
        /**
         * Default custom description of verification reason to be used as placeholder in setMessageSenderBotVerification; may be null if none.
         */
        protected ?FormattedText $defaultCustomDescription,
        /**
         * True, if the bot is allowed to provide custom description for verified entities.
         */
        protected bool           $canSetCustomDescription,
    ) {}

    public static function fromArray(array $array): BotVerificationParameters
    {
        return new static(
            $array['icon_custom_emoji_id'],
            $array['organization_name'],
            isset($array['default_custom_description']) ? TdSchemaRegistry::fromArray($array['default_custom_description']) : null,
            $array['can_set_custom_description'],
        );
    }

    public function getCanSetCustomDescription(): bool
    {
        return $this->canSetCustomDescription;
    }

    public function getDefaultCustomDescription(): ?FormattedText
    {
        return $this->defaultCustomDescription;
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'icon_custom_emoji_id'       => $this->iconCustomEmojiId,
            'organization_name'          => $this->organizationName,
            'default_custom_description' => (isset($this->defaultCustomDescription) ? $this->defaultCustomDescription : null),
            'can_set_custom_description' => $this->canSetCustomDescription,
        ];
    }
}
