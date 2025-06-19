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
    public const TYPE_NAME = 'inputMessageText';

    public function __construct(
        /**
         * Formatted text to be sent; 0-getOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, Code, Pre, PreCode, TextUrl and MentionName entities are allowed to be specified manually.
         */
        protected FormattedText       $text,
        /**
         * Options to be used for generation of a link preview; may be null if none; pass null to use default link preview options.
         */
        protected ?LinkPreviewOptions $linkPreviewOptions,
        /**
         * True, if a chat message draft must be deleted.
         */
        protected bool                $clearDraft
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            isset($array['link_preview_options']) ? TdSchemaRegistry::fromArray($array['link_preview_options']) : null,
            $array['clear_draft'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'text'                 => $this->text->typeSerialize(),
            'link_preview_options' => (isset($this->linkPreviewOptions) ? $this->linkPreviewOptions : null),
            'clear_draft'          => $this->clearDraft,
        ];
    }
}
