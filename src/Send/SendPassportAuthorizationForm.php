<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Passport\PassportElementType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a Telegram Passport authorization form, effectively sharing data with the service. This method must be called after getPassportAuthorizationFormAvailableElements if some previously available elements are going to be reused
 */
class SendPassportAuthorizationForm extends TdFunction
{
    public const TYPE_NAME = 'sendPassportAuthorizationForm';

    /**
     * Authorization form identifier
     *
     * @var int
     */
    protected int $authorizationFormId;

    /**
     * Types of Telegram Passport elements chosen by user to complete the authorization form
     *
     * @var PassportElementType[]
     */
    protected array $types;

    public function __construct(int $authorizationFormId, array $types)
    {
        $this->authorizationFormId = $authorizationFormId;
        $this->types = $types;
    }

    public static function fromArray(array $array): SendPassportAuthorizationForm
    {
        return new static(
            $array['authorization_form_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['types']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'authorization_form_id' => $this->authorizationFormId,
            array_map(fn($x) => $x->typeSerialize(), $this->types),
        ];
    }

    public function getAuthorizationFormId(): int
    {
        return $this->authorizationFormId;
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}
