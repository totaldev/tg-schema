<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Quick;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of quick reply messages.
 */
class QuickReplyMessages extends TdObject
{
    public const TYPE_NAME = 'quickReplyMessages';

    public function __construct(
        /**
         * List of quick reply messages; messages may be null.
         *
         * @var QuickReplyMessage[]|null
         */
        protected ?array $messages
    ) {}

    public static function fromArray(array $array): QuickReplyMessages
    {
        return new static(
            isset($array['messages']) ? array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']) : null,
        );
    }

    public function getMessages(): ?array
    {
        return $this->messages;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'messages' => (isset($this->messages) ? array_map(static fn($x) => $x->typeSerialize(), $this->messages) : null),
        ];
    }
}
