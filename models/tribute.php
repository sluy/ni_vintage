<?php
/**
 * Modelo de los homenajes.
 * @property integer $id
 * @property integer $id_cliente
 * @property integer $id_online
 * @property string  $link_video
 * @property string  $mensaje
 * @property string  $monitored
 * @property string  $nombre
 * @property string  $ocultado_por
 * @property string  $oculto_email
 * @property string  $oculto_fecha
 * @property string  $oculto_telefono
 * @property string  $oculto_tipo
 * @property string  $domicilio_id
 * @property string  $predisenada
 * @property string  $servicio_id
 * @property string  $status
 * @property string  $updated_at
 * @property string  $vela_abrazo
 * @property string  $wp_numero
 */
class Tribute extends Model {
    public $tableName = T_TRIBUTE;

    protected function get_created_at_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }
    protected function get_deleted_at_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    protected function get_updated_at_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    protected function get_nombre_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    protected function get_correo_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

    protected function get_mensaje_value($value) {
        if (is_string($value)) {
            $value = trim($value);
            if ($value !== '') {
                return $value;
            }
        }
        return null;
    }

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
