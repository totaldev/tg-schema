<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A kicker
 */
class PageBlockKicker extends PageBlock
{
    public const TYPE_NAME = 'pageBlockKicker';

    /**
     * Kicker
     *
     * @var RichText
     */
    protected RichText $kicker;

    public function __construct(RichText $kicker)
    {
        parent::__construct();

        $this->kicker = $kicker;
    }

    public static function fromArray(array $array): PageBlockKicker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['kicker']),
        );
    }

    public function getKicker(): RichText
    {
        return $this->kicker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'kicker' => $this->kicker->typeSerialize(),
        ];
    }
}
