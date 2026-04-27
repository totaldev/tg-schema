<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Link\LinkPreviewOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a link preview by the text of a message. Do not call this function too often. Returns a 404 error if the text has no link preview.
 */
class GetLinkPreview extends TdFunction
{
    public const string TYPE_NAME = 'getLinkPreview';

    public function __construct(
        /**
         * Message text with formatting.
         */
        protected FormattedText       $text,
        /**
         * Options to be used for generation of the link preview; pass null to use default link preview options.
         */
        protected ?LinkPreviewOptions $linkPreviewOptions = null,
    ) {}

    public static function fromArray(array $array): GetLinkPreview
    {
        return new static(
            linkPreviewOptions: (isset($array['link_preview_options']) ? TdSchemaRegistry::fromArray($array['link_preview_options']) : null),
            text              : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
    }

    public function getText(): FormattedText
    {
        return $this->text;
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
            'link_preview_options' => (null !== $this->linkPreviewOptions ? $this->linkPreviewOptions->jsonSerialize() : null),
            'text'                 => $this->text->jsonSerialize(),
        ];
    }
}
