<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears message drafts in all chats
 */
class ClearAllDraftMessages extends TdFunction
{
    public const TYPE_NAME = 'clearAllDraftMessages';

    /**
     * Pass true to keep local message drafts in secret chats
     *
     * @var bool
     */
    protected bool $excludeSecretChats;

    public function __construct(bool $excludeSecretChats)
    {
        $this->excludeSecretChats = $excludeSecretChats;
    }

    public static function fromArray(array $array): ClearAllDraftMessages
    {
        return new static(
            $array['exclude_secret_chats'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'exclude_secret_chats' => $this->excludeSecretChats,
        ];
    }

    public function getExcludeSecretChats(): bool
    {
        return $this->excludeSecretChats;
    }
}
