<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link contains an authentication code. Call checkAuthenticationCode with the code if the current authorization state is authorizationStateWaitCode
 */
class InternalLinkTypeAuthenticationCode extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeAuthenticationCode';

    /**
     * The authentication code
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        parent::__construct();

        $this->code = $code;
    }

    public static function fromArray(array $array): InternalLinkTypeAuthenticationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code' => $this->code,
        ];
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
