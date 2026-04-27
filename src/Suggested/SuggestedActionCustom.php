<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A custom suggestion to be shown at the top of the chat list.
 */
class SuggestedActionCustom extends SuggestedAction
{
    public const string TYPE_NAME = 'suggestedActionCustom';

    public function __construct(
        /**
         * Description of the suggestion.
         */
        protected FormattedText $description,
        /**
         * Unique name of the suggestion.
         */
        protected string        $name,
        /**
         * Title of the suggestion.
         */
        protected FormattedText $title,
        /**
         * The link to open when the suggestion is clicked.
         */
        protected string        $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionCustom
    {
        return new static(
            description: TdSchemaRegistry::fromArray($array['description']),
            name       : $array['name'],
            title      : TdSchemaRegistry::fromArray($array['title']),
            url        : $array['url'],
        );
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): FormattedText
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setDescription(FormattedText $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setTitle(FormattedText $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'description' => $this->description->jsonSerialize(),
            'name'        => $this->name,
            'title'       => $this->title->jsonSerialize(),
            'url'         => $this->url,
        ];
    }
}
