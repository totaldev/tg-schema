<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Link\LinkPreview;
use Totaldev\TgSchema\Link\LinkPreviewOptions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text message.
 */
class MessageText extends MessageContent
{
    public const TYPE_NAME = 'messageText';

    public function __construct(
        /**
         * Text of the message.
         */
        protected FormattedText       $text,
        /**
         * A link preview attached to the message; may be null.
         */
        protected ?LinkPreview        $linkPreview,
        /**
         * Options which were used for generation of the link preview; may be null if default options were used.
         */
        protected ?LinkPreviewOptions $linkPreviewOptions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            isset($array['link_preview']) ? TdSchemaRegistry::fromArray($array['link_preview']) : null,
            isset($array['link_preview_options']) ? TdSchemaRegistry::fromArray($array['link_preview_options']) : null,
        );
    }

    public function getLinkPreview(): ?LinkPreview
    {
        return $this->linkPreview;
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'text'                 => $this->text->typeSerialize(),
            'link_preview'         => $this->linkPreview ?? null,
            'link_preview_options' => $this->linkPreviewOptions ?? null,
        ];
    }
}
