<?php

namespace App\Models;

abstract class Model
{
    public static function find($id) {
        return $sql = "SELECT * FORM user WHERE id = ". $id;
    }

    protected function tableName()
    {
        return strtolower(substr(static::class, strripos(static::class, "\\") + 1));
    }

    public function property()
    {
        $data = get_object_vars($this);
        $keys = array_keys($data);
        $property = array_map(function ($item){
            return ':'.$item;
        }, $keys);
        return $property;
    }

    public function create()
    {
        return $sql = "INSERT INTO ". $this->tableName(). " (". str_replace(":", ' ', implode(', ', $this->property())).
            " ) VALUES (". implode(', ', $this->property()).")";
    }

    public function update()
    {
        return $sql = "UPDATE ". $this->tableName(). " SET ".
            str_replace(":", '',$this->property()[1])." = ". $this->property()[1]. ", ".
            str_replace(":", '',$this->property()[2])." = ". $this->property()[2]. " ".
            "WHERE " . str_replace(":", '',$this->property()[0])." = ". $this->property()[0];
    }

    public function delete()
    {
        return $sql = "DELETE FROM ". $this->tableName(). " WHERE ". str_replace(":", '',$this->property()[0])." = ". $this->property()[0];
    }

    public function save()
    {
        if (self::find($this->id) != null)
        {
            return $this->create();
        }
        return $this->update();
    }
}

final class UserHillel extends Model
{
    public $id;
    public $name;
    public $email;
}
