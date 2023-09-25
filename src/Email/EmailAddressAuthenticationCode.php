<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code delivered to a user's email address
 */
class EmailAddressAuthenticationCode extends EmailAddressAuthentication
{
    public const TYPE_NAME = 'emailAddressAuthenticationCode';

    /**
     * The code
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        parent::__construct();

        $this->code = $code;
    }

    public static function fromArray(array $array): EmailAddressAuthenticationCode
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
