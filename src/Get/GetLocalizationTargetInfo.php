<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about the current localization target. This is an offline request if only_local is true. Can be called before authorization
 */
class GetLocalizationTargetInfo extends TdFunction
{
    public const TYPE_NAME = 'getLocalizationTargetInfo';

    /**
     * Pass true to get only locally available information without sending network requests
     *
     * @var bool
     */
    protected bool $onlyLocal;

    public function __construct(bool $onlyLocal)
    {
        $this->onlyLocal = $onlyLocal;
    }

    public static function fromArray(array $array): GetLocalizationTargetInfo
    {
        return new static(
            $array['only_local'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'only_local' => $this->onlyLocal,
        ];
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }
}