<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a General topic is hidden in a forum supergroup chat; requires can_manage_topics administrator right in the supergroup
 */
class ToggleGeneralForumTopicIsHidden extends TdFunction
{
    public const TYPE_NAME = 'toggleGeneralForumTopicIsHidden';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true to hide and close the General topic; pass false to unhide it
     *
     * @var bool
     */
    protected bool $isHidden;

    public function __construct(int $chatId, bool $isHidden)
    {
        $this->chatId = $chatId;
        $this->isHidden = $isHidden;
    }

    public static function fromArray(array $array): ToggleGeneralForumTopicIsHidden
    {
        return new static(
            $array['chat_id'],
            $array['is_hidden'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'is_hidden' => $this->isHidden,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }
}
