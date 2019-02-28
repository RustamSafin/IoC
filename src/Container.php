<?php


class Container implements \ArrayAccess
{
    private $values = array();

    private $keys = array();

    public function __construct(array $values = array())
    {
        foreach ($values as $key => $value) {
            $this->offsetSet($key, $value);
        }
    }

    public function offsetSet($id, $value)
    {
        $this->values[$id] = $value;
        $this->keys[$id] = true;
    }

    public function offsetGet($id)
    {
        if (
             !is_object($this->values[$id])
            || !method_exists($this->values[$id], '__invoke')
        ) {
            return $this->values[$id];
        }

        $val = $this->values[$id];
        return $val;
    }

    public function offsetExists($id)
    {
        return isset($this->keys[$id]);
    }

    public function offsetUnset($id)
    {
        if (isset($this->keys[$id])) {
            unset($this->values[$id], $this->keys[$id]);
        }
    }

}