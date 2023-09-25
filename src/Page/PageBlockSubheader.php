<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A subheader
 */
class PageBlockSubheader extends PageBlock
{
    public const TYPE_NAME = 'pageBlockSubheader';

    /**
     * Subheader
     *
     * @var RichText
     */
    protected RichText $subheader;

    public function __construct(RichText $subheader)
    {
        parent::__construct();

        $this->subheader = $subheader;
    }

    public static function fromArray(array $array): PageBlockSubheader
    {
        return new static(
            TdSchemaRegistry::fromArray($array['subheader']),
        );
    }

    public function getSubheader(): RichText
    {
        return $this->subheader;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'subheader' => $this->subheader->typeSerialize(),
        ];
    }
}
