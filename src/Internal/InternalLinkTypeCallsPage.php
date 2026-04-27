<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Call tab or page.
 */
class InternalLinkTypeCallsPage extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeCallsPage';

    public function __construct(
        /**
         * Section of the page; may be one of "", "all", "missed", "edit", "show-tab", "start-call".
         */
        protected string $section
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeCallsPage
    {
        return new static(
            section: $array['section'],
        );
    }

    public function getSection(): string
    {
        return $this->section;
    }

    public function setSection(string $value): static
    {
        $this->section = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'section' => $this->section,
        ];
    }
}
