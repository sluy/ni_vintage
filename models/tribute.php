<?php

class Tribute extends Model {
    public $tableName = T_TRIBUTE;


    protected function get_oculto_tipo_value ($value) {
        if (is_string($value)) {
            $value = trim($value);
            if (!empty($value)) {
                return $value;
            }
        }
        return null;
    }

    protected function get_vela_abrazo_value($value) {
        if (is_string($value)) {
            $value = intval($value);
        }
        return is_int($value) && $value > 0 ? $value : 0;
    }

    protected function get_predisenada_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    protected function get_foto_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }


    protected function get_link_video_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

}
