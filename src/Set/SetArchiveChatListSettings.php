<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Archive\ArchiveChatListSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes settings for automatic moving of chats to and from the Archive chat lists
 */
class SetArchiveChatListSettings extends TdFunction
{
    public const TYPE_NAME = 'setArchiveChatListSettings';

    /**
     * New settings
     *
     * @var ArchiveChatListSettings
     */
    protected ArchiveChatListSettings $settings;

    public function __construct(ArchiveChatListSettings $settings)
    {
        $this->settings = $settings;
    }

    public static function fromArray(array $array): SetArchiveChatListSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getSettings(): ArchiveChatListSettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'settings' => $this->settings->typeSerialize(),
        ];
    }
}
