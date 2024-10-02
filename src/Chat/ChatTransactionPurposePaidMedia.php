<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Paid media were bought.
 */
class ChatTransactionPurposePaidMedia extends ChatTransactionPurpose
{
    public const TYPE_NAME = 'chatTransactionPurposePaidMedia';

    public function __construct(
        /**
         * Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message.
         */
        protected int   $messageId,
        /**
         * The bought media if the trancastion wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTransactionPurposePaidMedia
    {
        return new static(
            $array['message_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
        );
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'message_id' => $this->messageId,
            array_map(fn($x) => $x->typeSerialize(), $this->media),
        ];
    }
}
