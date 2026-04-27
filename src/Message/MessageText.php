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
    public const string TYPE_NAME = 'messageText';

    public function __construct(
        /**
         * A link preview attached to the message; may be null.
         */
        protected ?LinkPreview        $linkPreview,
        /**
         * Options which were used for generation of the link preview; may be null if default options were used.
         */
        protected ?LinkPreviewOptions $linkPreviewOptions,
        /**
         * Text of the message.
         */
        protected FormattedText       $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageText
    {
        return new static(
            linkPreview       : (isset($array['link_preview']) ? TdSchemaRegistry::fromArray($array['link_preview']) : null),
            linkPreviewOptions: (isset($array['link_preview_options']) ? TdSchemaRegistry::fromArray($array['link_preview_options']) : null),
            text              : TdSchemaRegistry::fromArray($array['text']),
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

    public function setLinkPreview(?LinkPreview $value): static
    {
        $this->linkPreview = $value;

        return $this;
    }

    public function setLinkPreviewOptions(?LinkPreviewOptions $value): static
    {
        $this->linkPreviewOptions = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'link_preview'         => (null !== $this->linkPreview ? $this->linkPreview->jsonSerialize() : null),
            'link_preview_options' => (null !== $this->linkPreviewOptions ? $this->linkPreviewOptions->jsonSerialize() : null),
            'text'                 => $this->text->jsonSerialize(),
        ];
    }
}
