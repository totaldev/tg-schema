<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Autosave\AutosaveSettingsScope;
use Totaldev\TgSchema\Scope\ScopeAutosaveSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets autosave settings for the given scope. The method is guaranteed to work only after at least one call to getAutosaveSettings.
 */
class SetAutosaveSettings extends TdFunction
{
    public const TYPE_NAME = 'setAutosaveSettings';

    public function __construct(
        /**
         * Autosave settings scope.
         */
        protected AutosaveSettingsScope  $scope,
        /**
         * New autosave settings for the scope; pass null to set autosave settings to default.
         */
        protected ?ScopeAutosaveSettings $settings = null
    ) {}

    public static function fromArray(array $array): SetAutosaveSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            isset($array['settings']) ? TdSchemaRegistry::fromArray($array['settings']) : null,
        );
    }

    public function getScope(): AutosaveSettingsScope
    {
        return $this->scope;
    }

    public function getSettings(): ?ScopeAutosaveSettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'scope'    => $this->scope->typeSerialize(),
            'settings' => $this->settings ?? null,
        ];
    }
}
