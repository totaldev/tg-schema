<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about the current localization target. This is an offline method if only_local is true. Can be called before authorization.
 */
class GetLocalizationTargetInfo extends TdFunction
{
    public const TYPE_NAME = 'getLocalizationTargetInfo';

    public function __construct(
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal
    ) {}

    public static function fromArray(array $array): GetLocalizationTargetInfo
    {
        return new static(
            $array['only_local'],
        );
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'only_local' => $this->onlyLocal,
        ];
    }
}
