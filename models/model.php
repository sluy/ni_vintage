<?php
/**
 * Base Model file.
 * Provides a simple inject and obtain data as a object.
 */
class Model {
    protected $_data = [];

    public $tableName = null;

    public function __construct($data = null) {
        if (is_array($data) && !empty($data)) {
            foreach ($data as $key => $value) {
                $this->set($key, $value);
            }
        }
    }
    /**
     *
     * Returns database connection instance.
     * @return \PDO
     */
    public static function db(): \PDO {
        return $GLOBALS['db'];
    }

    /**
     * Returns first row with provided conditions.
     * @param mixed $where Where clausules to apply.
     * @return self|null
     */
    public static function first($where = null) {
        $tmp = self::many($where, $limit = 1);
        return count($tmp) > 0 ? $tmp[0] : null;
    }
    /**
     *
     * Returns a collection of current model.
     * @param mixed $where Where clausules to apply.
     * @param mixed $limit Limit results.
     * @return array<self>
     */
    public static function many($where = null, $limit = 0) {
        $class = get_called_class();
        $i = new $class();
        $table = $i->tableName;
        $sql = "SELECT * FROM `{$table}`";
        $params = [];
        if (is_array($where) && !empty($where)) {
            $sql.= ' WHERE ';
            foreach ($where as $key => $value) {
                $sql .= "`{$key}` = ?";
                $params[] = $value;
            }
        }
        if (is_int($limit) && $limit > 0) {
            $sql .= ' LIMIT ' . $limit;
        }
        $stmt = self::db()->prepare($sql);
        $stmt->execute($params);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $res = [];
        if (is_array($data) && !empty($data)) {
            foreach ($data as $current) {
                $res[] = new $class($current);
            }
        }
        return $res;
    }

    /**
     * Returns first record of current model by identifier.
     * @param  string|number $id
     * @return self|null
     */
    public static function find($id) {
        $class = get_called_class();
        if ((!is_string($id) && !is_int($id)) || empty($id)) {
            return null;
        }
        $id = intval($id);
        if ($id < 1) {
            return null;
        }

        $i = new $class();
        $table = $i->tableName;

        $sql = "SELECT * FROM `{$table}` WHERE `id` = ? LIMIT 1";

        $stmt = self::db()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return is_array($data) && !empty($data) ? new $class($data) : null;
    }
    public function get($key, $defaultValue = null) {
        $value = null;
        if (is_string($key) && !empty($key)) {
            $exists = array_key_exists($key, $this->_data);
            $value = $exists ? $this->_data[$key] : null;
            $getter = 'get_' . $key . '_value';
            if (method_exists($this, $getter)) {
                $value = call_user_func_array(
                    [$this, $getter],
                    [$value, $exists]);
            }
        }
        return $value === null ? $defaultValue : $value;
    }
    /**
     * Sets a value in model.
     * @param string $key
     * @param mixed $value
     * @return mixed|null
     */
    public function set($key, $value) {
        if (is_string($key) && !empty($key)) {
            $setter = 'set_' . $key . '_value';
            try {
                if (method_exists($this, $setter)) {
                    $this->_data[$key] = call_user_func_array(
                        [$this, $setter],
                        [$value, isset($this->_data[$key]) ? $this->_data[$key] : null]);
                } else {
                    $this->_data[$key] = $value;
                }
                return $this->_data[$key];
            } catch (\Throwable $th) {
                //
            }
        }
        return null;
    }


    public function getKeys() {
        $keys = array_keys($this->_data);
        foreach(get_class_methods($this) as $method) {
            if (strlen($method) > 10 && substr($method, 0, 4) === 'get_' && substr($method, -6) === '_value') {
                $key = substr($method, 4, -6);
                if (!in_array($key, $keys)) {
                    $keys[] = $key;
                }
            }
        }
        return $keys;
    }

    public function toArray() {
        $data = [];
        foreach ($this->getKeys() as $key) {
            $value = $this->get($key);
            if ($value instanceof Model) {
                $data[$key] = $value->toArray();
            } else if (is_array($value)) {
                $data[$key] = [];
                foreach($value as $k => $v) {
                    if ($v instanceof Model) {
                        $data[$key][$k] = $v->toArray();
                    } else {
                        $data[$key][$k] = $v;
                    }
                }
            } else {
                $data[$key] = $value;
            }
        }
        ksort($data);
        return $data;
    }

    public function __isset($key) {
        return $this->get($key) !== null;
    }

    public function __set($key, $value) {
        $this->set($key, $value);
    }

    public function __get($key) {
        return $this->get($key);
    }
}
