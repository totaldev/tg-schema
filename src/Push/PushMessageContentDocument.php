<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A document message (a general file).
 */
class PushMessageContentDocument extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentDocument';

    public function __construct(
        /**
         * Message content; may be null.
         */
        protected ?Document $document,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool      $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentDocument
    {
        return new static(
            isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null,
            $array['is_pinned'],
        );
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'document'  => (isset($this->document) ? $this->document : null),
            'is_pinned' => $this->isPinned,
        ];
    }
}
