<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Autosave;

/**
 * Autosave settings applied to a chat.
 */
class AutosaveSettingsScopeChat extends AutosaveSettingsScope
{
    public const TYPE_NAME = 'autosaveSettingsScopeChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AutosaveSettingsScopeChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
