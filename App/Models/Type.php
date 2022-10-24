<?php

namespace App\Models;

class Type extends Model
{
    public $name;

    public $options;

    public function __construct()
    {
        parent::__construct();
    }

     public static function findAll()
     {
         $sql = "
             SELECT `type`.id AS type_id, `type`.name AS type_name, `option`.`id` AS option_id, `option`.`name` AS option_name
             FROM `type`
             JOIN `type_option`
                 ON `type`.id = `type_option`.type_id
             JOIN `option`
                 ON `option`.id = `type_option`.option_id;
         ";

         $statement = self::$pdo->prepare($sql);
         $statement->execute();

         $types = [];

         while(($row = $statement->fetch()) !== false) {
             $typeId = $row['type_id'];
             $type = null;
             if (!array_key_exists($typeId, $types)) {
                 $type = new Type();
                 $type->id = $typeId;
                 $type->name = $row['type_name'];
                 $type->options = [];
             } else {
                 $type = $types[$typeId];
             }
             $optionId = $row['option_id'];
             if (!array_key_exists($optionId, $type->options)) {
                 $option = new Option();
                 $option->id = $row['option_id'];
                 $option->name = $row['option_name'];
                 $type->options[$optionId] = $option;
             }

             $types[$typeId] = $type;
         }

         return $types;
     }
}