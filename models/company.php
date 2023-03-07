<?php

class Company extends Model {
    public $tableName = T_COMPANIES;



    public function get_pagina_web_value($raw) {
        if (is_string($raw)) {
            $raw = trim($raw);
            if (!empty($raw) && filter_var($raw, FILTER_VALIDATE_URL)) {
                return $raw;
            }

        }
        return null;
    }
}
