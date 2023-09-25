<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message was originally sent by a known user
 */
class MessageForwardOriginUser extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginUser';

    /**
     * Identifier of the user that originally sent the message
     *
     * @var int
     */
    protected int $senderUserId;

    public function __construct(int $senderUserId)
    {
        parent::__construct();

        $this->senderUserId = $senderUserId;
    }

    public static function fromArray(array $array): MessageForwardOriginUser
    {
        return new static(
            $array['sender_user_id'],
        );
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_user_id' => $this->senderUserId,
        ];
    }
}
