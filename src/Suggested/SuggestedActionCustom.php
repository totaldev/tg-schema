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
    public const TYPE_NAME = 'suggestedActionCustom';

    public function __construct(
        /**
         * Unique name of the suggestion.
         */
        protected string        $name,
        /**
         * Title of the suggestion.
         */
        protected FormattedText $title,
        /**
         * Description of the suggestion.
         */
        protected FormattedText $description,
        /**
         * The link to open when the suggestion is clicked.
         */
        protected string        $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionCustom
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['title']),
            TdSchemaRegistry::fromArray($array['description']),
            $array['url'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'name'        => $this->name,
            'title'       => $this->title->typeSerialize(),
            'description' => $this->description->typeSerialize(),
            'url'         => $this->url,
        ];
    }
}
