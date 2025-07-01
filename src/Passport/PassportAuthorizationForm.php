<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Telegram Passport authorization form that was requested.
 */
class PassportAuthorizationForm extends TdObject
{
    public const TYPE_NAME = 'passportAuthorizationForm';

    public function __construct(
        /**
         * Unique identifier of the authorization form.
         */
        protected int    $id,
        /**
         * Telegram Passport elements that must be provided to complete the form.
         *
         * @var PassportRequiredElement[]
         */
        protected array  $requiredElements,
        /**
         * URL for the privacy policy of the service; may be empty.
         */
        protected string $privacyPolicyUrl
    ) {}

    public static function fromArray(array $array): PassportAuthorizationForm
    {
        return new static(
            $array['id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['required_elements']),
            $array['privacy_policy_url'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPrivacyPolicyUrl(): string
    {
        return $this->privacyPolicyUrl;
    }

    public function getRequiredElements(): array
    {
        return $this->requiredElements;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'required_elements'  => array_map(static fn($x) => $x->typeSerialize(), $this->requiredElements),
            'privacy_policy_url' => $this->privacyPolicyUrl,
        ];
    }
}
