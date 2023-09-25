<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link contains a message draft text. A share screen needs to be shown to the user, then the chosen chat must be opened and the text is added to the input
 * field
 */
class InternalLinkTypeMessageDraft extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMessageDraft';

    /**
     * True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected
     *
     * @var bool
     */
    protected bool $containsLink;

    /**
     * Message draft text
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    public function __construct(FormattedText $text, bool $containsLink)
    {
        parent::__construct();

        $this->text = $text;
        $this->containsLink = $containsLink;
    }

    public static function fromArray(array $array): InternalLinkTypeMessageDraft
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['contains_link'],
        );
    }

    public function getContainsLink(): bool
    {
        return $this->containsLink;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'contains_link' => $this->containsLink,
        ];
    }
}
