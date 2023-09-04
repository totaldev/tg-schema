<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Autosave;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Autosave settings applied to a chat
 */
class AutosaveSettingsScopeChat extends AutosaveSettingsScope
{
    public const TYPE_NAME = 'autosaveSettingsScopeChat';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        parent::__construct();

        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): AutosaveSettingsScopeChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
