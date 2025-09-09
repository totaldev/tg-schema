<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether chat folder tags are enabled.
 */
class ToggleChatFolderTags extends TdFunction
{
    public const TYPE_NAME = 'toggleChatFolderTags';

    public function __construct(
        /**
         * Pass true to enable folder tags; pass false to disable them.
         */
        protected bool $areTagsEnabled
    ) {}

    public static function fromArray(array $array): ToggleChatFolderTags
    {
        return new static(
            $array['are_tags_enabled'],
        );
    }

    public function getAreTagsEnabled(): bool
    {
        return $this->areTagsEnabled;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'are_tags_enabled' => $this->areTagsEnabled,
        ];
    }
}
