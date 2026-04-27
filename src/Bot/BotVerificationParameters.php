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
    public const string TYPE_NAME = 'botVerificationParameters';

    public function __construct(
        /**
         * True, if the bot is allowed to provide custom description for verified entities.
         */
        protected bool           $canSetCustomDescription,
        /**
         * Default custom description of verification reason to be used as placeholder in setMessageSenderBotVerification; may be null if none.
         */
        protected ?FormattedText $defaultCustomDescription,
        /**
         * Identifier of the custom emoji that is used as the verification sign.
         */
        protected int            $iconCustomEmojiId,
        /**
         * Name of the organization that provides verification.
         */
        protected string         $organizationName,
    ) {}

    public static function fromArray(array $array): BotVerificationParameters
    {
        return new static(
            canSetCustomDescription : $array['can_set_custom_description'],
            defaultCustomDescription: (isset($array['default_custom_description']) ? TdSchemaRegistry::fromArray($array['default_custom_description']) : null),
            iconCustomEmojiId       : $array['icon_custom_emoji_id'],
            organizationName        : $array['organization_name'],
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

    public function setCanSetCustomDescription(bool $value): static
    {
        $this->canSetCustomDescription = $value;

        return $this;
    }

    public function setDefaultCustomDescription(?FormattedText $value): static
    {
        $this->defaultCustomDescription = $value;

        return $this;
    }

    public function setIconCustomEmojiId(int $value): static
    {
        $this->iconCustomEmojiId = $value;

        return $this;
    }

    public function setOrganizationName(string $value): static
    {
        $this->organizationName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'can_set_custom_description' => $this->canSetCustomDescription,
            'default_custom_description' => (null !== $this->defaultCustomDescription ? $this->defaultCustomDescription->jsonSerialize() : null),
            'icon_custom_emoji_id'       => $this->iconCustomEmojiId,
            'organization_name'          => $this->organizationName,
        ];
    }
}
