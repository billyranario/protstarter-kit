<?php

namespace Billyranario\ProstarterKit\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{

    /**
     * Transform input value to string.
     * @param string $key
     * @param string|null $defaultValue
     * @return string|null
     */
    public function getInputAsString(string $key, ?string $defaultValue = ''): ?string
    {
        $value = $this->input($key);
        return is_null($value) ? $defaultValue : (string) $value;
    }

    /**
     * Transform input value to int.
     * @param string $key
     * @param int|null $defaultValue
     * @return int|null
     */
    public function getInputAsInt(string $key, ?int $defaultValue = 0): ?int
    {
        $value = $this->input($key);
        return is_null($value) ? $defaultValue : (int) $value;
    }

    /**
     * Transform input value to float.
     * @param string $key
     * @param float|null
     * @return float|null
     */
    public function getInputAsFloat(string $key, ?float $defaultValue = 0.0): ?float
    {
        $value = $this->input($key);
        return is_null($value) ? $defaultValue : (float) $value;
    }

    /**
     * Transform input value to boolean.
     * @param string $key
     * @param bool|null $defaultValue
     * @return bool|null
     */
    public function getInputAsBoolean(string $key, ?bool $defaultValue = false): ?bool
    {
        $value = $this->input($key);
        return is_null($value) ? $defaultValue : filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Transform input value to array.
     * @param string $key
     * @param array|null $defaultValue
     * @return array|null
     */
    public function getInputAsArray(string $key, ?array $defaultValue = []): ?array
    {
        $value = $this->input($key);
        return is_null($value) ? $defaultValue : (array) $value;
    }

    /**
     * Transform input value to array from a comma separated string.
     * @param string $key
     * @return array|null
     */
    public function getInputAsArrayFromCommaSeparatedString(string $key): ?array
    {
        $value = $this->input($key);

        if (empty($value)) {
            return null;
        }

        return explode(',', (string) $value);
    }

    /**
     * Get relations for a database query.
     * These are comma separated relations.
     * Example relation1,relation2,relation3
     * @return array|null
     */
    public function getRelations(): ?array
    {
        $value = $this->input('relations');

        if (!empty($value) && is_string($value) && str_contains($value, '|')) {
            return $this->getRelationsWithColumns();
        }

        $relations = [];

        if (is_null($value)) {
            $relations = null;
        } elseif (is_string($value) && !empty($value)) {
            $relations = explode(',', $value);
        } elseif (is_array($value) && !empty($value)) {
            $relations = $value;
        }

        return $relations;
    }

    /**
     * Get columns for database query.
     * @return array|null
     */
    public function getColumns(): ?array
    {
        $value = $this->input('columns');
        $columns = [];

        if (is_null($value)) {
            $columns = null;
        } elseif (is_string($value) && !empty($value)) {
            $columns = explode(',', $value);
        } elseif (is_array($value) && !empty($value)) {
            $columns = $value;
        }

        return $columns;
    }

    /**
     * Get relations for a database query.
     * These are pipe separated relations with columns.
     * Example: 'relation1:id,status,date_created|relation2:id,status,date_created|relation3:id,status,date_created'
     * @return array|null
     */
    public function getRelationsWithColumns(): ?array
    {
        $value = $this->input('relations');
        $relations = [];

        if (is_null($value)) {
            $relations = null;
        } elseif (is_string($value) && !empty($value)) {
            $relations = explode('|', $value);
        } elseif (is_array($value) && !empty($value)) {
            $relations = $value;
        }

        return $relations;
    }

    /**
     * Transform input value to url.
     *
     * @param string $key
     *
     * @return string
     */
    public function getInputAsUrl(string $key): string
    {
        return urldecode($this->getInputAsString($key));
    }
}
