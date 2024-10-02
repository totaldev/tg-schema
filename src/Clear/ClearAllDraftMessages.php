<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears message drafts in all chats.
 */
class ClearAllDraftMessages extends TdFunction
{
    public const TYPE_NAME = 'clearAllDraftMessages';

    public function __construct(
        /**
         * Pass true to keep local message drafts in secret chats.
         */
        protected bool $excludeSecretChats
    ) {}

    public static function fromArray(array $array): ClearAllDraftMessages
    {
        return new static(
            $array['exclude_secret_chats'],
        );
    }

    public function getExcludeSecretChats(): bool
    {
        return $this->excludeSecretChats;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'exclude_secret_chats' => $this->excludeSecretChats,
        ];
    }
}
