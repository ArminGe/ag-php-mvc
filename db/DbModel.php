<?php
/**
 * Project: armin - Filename: DbModel.php
 * Namespace: app\core
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 28.01.22 16:07
 */

namespace app\core\db;
use app\core\Application;
use app\core\Model;

/**
 * Class DbModel
 * @package app\core
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
abstract class DbModel extends Model
{
    abstract public function tableName() : string;

    abstract public function attributes() : array;

    abstract public function primaryKey(): string;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $sql =
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")
                VALUES(".implode(',', $params).")");
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }

    public function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        //Create select statement for where
        $sql = implode("AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key =>$item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
}