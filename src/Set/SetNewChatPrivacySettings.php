<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\New\NewChatPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes privacy settings for new chat creation; can be used only if getOption("can_set_new_chat_privacy_settings").
 */
class SetNewChatPrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'setNewChatPrivacySettings';

    public function __construct(
        /**
         * New settings.
         */
        protected NewChatPrivacySettings $settings
    ) {}

    public static function fromArray(array $array): SetNewChatPrivacySettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getSettings(): NewChatPrivacySettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'settings' => $this->settings->typeSerialize(),
        ];
    }
}
