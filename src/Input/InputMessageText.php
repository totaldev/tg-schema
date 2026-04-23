<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Link\LinkPreviewOptions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text message.
 */
class InputMessageText extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageText';

    public function __construct(
        /**
         * Formatted text to be sent; 0-getOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, Code, Pre, PreCode, TextUrl and MentionName entities are allowed to be specified manually.
         */
        protected FormattedText       $text,
        /**
         * True, if a chat message draft must be deleted.
         */
        protected bool                $clearDraft,
        /**
         * Options to be used for generation of a link preview; may be null if none; pass null to use default link preview options.
         */
        protected ?LinkPreviewOptions $linkPreviewOptions = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['clear_draft'],
            isset($array['link_preview_options']) ? TdSchemaRegistry::fromArray($array['link_preview_options']) : null,
        );
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptions
    {
        return $this->linkPreviewOptions;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setClearDraft(bool $value): static
    {
        $this->clearDraft = $value;

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
            'text'                 => $this->text->typeSerialize(),
            'clear_draft'          => $this->clearDraft,
            'link_preview_options' => $this->linkPreviewOptions ?? null,
        ];
    }
}
