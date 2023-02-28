<?php
/**
 *
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $id_online
 * @property integer $sala_id
 * @property string  $nombres
 * @property string  $apellidos
 * @property string  $fecha_nac
 * @property string  $fecha_fac
 * @property string  $salida
 * @property string  $domicilio_id
 * @property integer $destino_id
 * @property string  $servicio_cementerio
 * @property integer $religion_id
 * @property integer $epitafio_id
 * @property string  $foto
 * @property string $foto_redonda
 * @property integer $status
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $fecha_update
 * @property integer $empresa_id
 * @property string $logo_empresa
 * @property string $domicilio
 * @property mixed  $confirmar
 * @property string $responso
 * @property integer $responso_id
 * @property integer $tipo_responso
 * @property string $qrcode1
 * @property string $qrcode2
 * @property string $url1
 * @property string $url2
 * @property integer $cotejo_act
 * @property string  $cotejo_link
 * @property string  $id_unique
 * @property string $observacion
 * @property integer $vista
 * @property integer $papelera
 * @property integer $hv_act
 * @property string $creacion
 * @property string $envio_wp
 * @property int|null $sector_id
 * @property int|null $manzana_id
 * @property int|null $parcela_id
 * @property string|null $direccion_web
 * @property string      $clave_vo
 * @property int         $publicar
 * @property integer $link_video_id
 * @property integer $video_mode
 * @property string  $homenajes_images
 * @property string $wsapp_contratante
 * @property string $correo_contratante
 * @property integer $es_evento
 * @property integer $es_publico
 * @property integer $aniversario_f
 * @property string $invitado_wsapp_1
 * @property string $invitado_wsapp_2
 * @property integer $id_encuesta
 * @property string $periodo_contratantes
 * @property string $periodo_participantes
 * @property string $numero_presupuesto
 * @property integer $envio_encuestas
 * @property integer $envio_encuestas_part
 * @property string $url_encuestas_process
 * @property integer $visitas
 * @property integer $ad
 * @property integer $sin_publicidad
 * @property string $servicio_id_externo
 * @property integer $hv
 * @property integer $gf_id
 * @property integer $encuesta_pausada
 * @property integer $heredado
 * @property integer $btn_vo
 * @property integer $btn_seguir_servicio
 * @property integer $btn_personalizado
 * @property string $link_donacion
 * @property string $data_lat_lon
 * @property string $ubicacion
 * @property string $cartelera_destino
 *
 * @property string|\Destination $destino
 */
class Service extends Model {
    public static function find($id, $hashed = true) {
        if (!is_string($id) && !is_int($id)) {
            return null;
        }
        $id = trim(strval($id));
        if (empty($id)) {
            return null;
        }
        $table = T_SERVICES;
        $sql = "SELECT * FROM `{$table}` WHERE ";
        if ($hashed) {
            $id = strval($id);
            $sql .= "md5(id) = ?";
        } else {
            $id = intval($id);
            $sql .= "id = ?";
        }
        $sql .= ' LIMIT 1';
        $stmt = self::db()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if (is_array($data) && isset($data['id'])) {
            return new Service($data);
        }
        return null;
    }

    public function get_sala_value($value, $existsKey) {
        if (!$existsKey) {
            $tmp = Room::find($this->get('sala_id'));
            $this->set('sala', Room::find($this->get('sala_id')));
            return $this->get('sala');
        }
        return $value;
    }

    public function get_epitafio_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('epitafio', Epitaph::find($this->get('epitafio_id')));
        }
        return $value;
    }

    public function get_destino_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('destino', Destination::find($this->get('destino_id')));
        }
        return $value;
    }

    public function get_misa_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('misa', Mass::find($this->get('responso_id')));
        }
        return $value;
    }

    public function get_velatorios_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('velatorios', Wake::many(['servicio_id' => $this->get('id')]));
        }
        return $value;
    }

    public function get_abrazo_velas_value($value, $existsKey) {
        if (!$existsKey) {
            return $this->set('abrazo_velas', Events::many(['servicio_id' => $this->get('id')]));
        }
        return $value;
    }

    public function get_assets_value($value, $existsKey) {
        if ($existsKey && is_array($value)) {
            return $value;
        }
        $table = T_TRIBUTE_CONFIG;
        $cliente_id = intval($this->get('cliente_id'));
        $sql = "SELECT * FROM `{$table}` WHERE `cliente_id` = ?";
        $stmt = $this->db()->prepare($sql);
        $stmt->execute([$cliente_id]);
        $raw = $stmt->fetch(PDO::FETCH_ASSOC);

        $data = [];
        if (is_array($raw) && !empty($raw)) {
            foreach ($raw as $current) {
                if (is_array($current) && !empty($current)) {
                    ksort($current);
                    $data[] = $current;
                    $subpath = isset($data[0]) && $cliente_id != 0 ? $cliente_id : 'bydefault';
                    $dirs = [
                        'bg' => '/homenajes_online/imagen_por_defecto',
                        'hugs' => '/homenajes_online/abrazos',
                        'candles' => '/homenajes_online/velas',
                        'hp' => '/homenajes_online/homenajes_predisenados',
                    ];
                    foreach ($dirs as $key => $path) {
                        $data[$key] = [];
                        $path = '/home/neofo/ni.neo.fo/images/' . $subpath . $path;
                        if (file_exists($path) && is_dir($path) && is_readable($path)) {
                            $files = @scandir($path);
                            foreach ($files as $file) {
                                $data[$key][] = str_replace('\\', '/', (string)$file);
                            }
                        }
                    }
                }
            }
        }
        return $data;
    }
}