<?php

class Destination extends Model {
    public $tableName = T_DESTINATIONS;

    protected function get_ubicaciones_generales_value($value, $defaultValue) {
        if (!is_array($value)) {
            try {
                $obj = json_decode($value, true);
                if (is_array($obj)) {
                    return $obj;
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        return [];
    }

    protected function get_tipo_value($value) {
        return intval($value);
    }

    protected function get_tipo_str_value() {
        return $this->get('tipo') === 1 ? 'Cementerio' : 'Crematorio';
    }
}
