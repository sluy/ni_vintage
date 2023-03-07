<?php

class NI extends Model {
    public $tableName = T_NI;

    public function get_cliente_id_value($raw) {
        if (is_string($raw)) {
            $raw = intval($raw);
        }
        return is_int($raw) && $raw > 0 ? $raw : null;
    }

    public function get_logo_src_value() {
        $clientId = $this->get('cliente_id');
        if ($clientId) {
            foreach (['logo_encabezado', 'logo_pie'] as $source) {
                $raw = $this->get($source);
                if ($raw) {
                    return 'https://ni.neo.fo/images/' . $clientId . '/empresa/' . $raw;
                }
            }
        }
        return null;
    }


    public function get_logo_encabezado_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    public function get_logo_pie_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }
}
