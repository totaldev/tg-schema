<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A background previously set in the chat; for chat backgrounds only
 */
class InputBackgroundPrevious extends InputBackground
{
    public const TYPE_NAME = 'inputBackgroundPrevious';

    /**
     * Identifier of the message with the background
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $messageId)
    {
        parent::__construct();

        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): InputBackgroundPrevious
    {
        return new static(
            $array['message_id'],
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
        ];
    }
}
