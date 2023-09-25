<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message was imported from an exported message history
 */
class MessageForwardOriginMessageImport extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginMessageImport';

    /**
     * Name of the sender
     *
     * @var string
     */
    protected string $senderName;

    public function __construct(string $senderName)
    {
        parent::__construct();

        $this->senderName = $senderName;
    }

    public static function fromArray(array $array): MessageForwardOriginMessageImport
    {
        return new static(
            $array['sender_name'],
        );
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_name' => $this->senderName,
        ];
    }
}
