<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Target\TargetChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that forces an inline query to the bot to be inserted in the input field
 */
class InlineKeyboardButtonTypeSwitchInline extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeSwitchInline';

    /**
     * Inline query to be sent to the bot
     *
     * @var string
     */
    protected string $query;

    /**
     * Target chat from which to send the inline query
     *
     * @var TargetChat
     */
    protected TargetChat $targetChat;

    public function __construct(string $query, TargetChat $targetChat)
    {
        parent::__construct();

        $this->query = $query;
        $this->targetChat = $targetChat;
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeSwitchInline
    {
        return new static(
            $array['query'],
            TdSchemaRegistry::fromArray($array['target_chat']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
            'target_chat' => $this->targetChat->typeSerialize(),
        ];
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getTargetChat(): TargetChat
    {
        return $this->targetChat;
    }
}
