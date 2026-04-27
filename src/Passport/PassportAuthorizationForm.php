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
    public const string TYPE_NAME = 'passportAuthorizationForm';

    public function __construct(
        /**
         * Unique identifier of the authorization form.
         */
        protected int    $id,
        /**
         * URL for the privacy policy of the service; may be empty.
         */
        protected string $privacyPolicyUrl,
        /**
         * Telegram Passport elements that must be provided to complete the form.
         *
         * @var PassportRequiredElement[]
         */
        protected array  $requiredElements,
    ) {}

    public static function fromArray(array $array): PassportAuthorizationForm
    {
        return new static(
            id              : $array['id'],
            privacyPolicyUrl: $array['privacy_policy_url'],
            requiredElements: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['required_elements']),
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

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setPrivacyPolicyUrl(string $value): static
    {
        $this->privacyPolicyUrl = $value;

        return $this;
    }

    public function setRequiredElements(array $value): static
    {
        $this->requiredElements = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'id'                 => $this->id,
            'privacy_policy_url' => $this->privacyPolicyUrl,
            'required_elements'  => array_map(static fn($x) => $x->jsonSerialize(), $this->requiredElements),
        ];
    }
}
