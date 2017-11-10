<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 10.11.2017
 * Time: 14:36
 */

//lista taskow
//wraz linkami get

$create = 'CREATE TABLE `Task`.`Tasks` ( `id` INT NOT NULL AUTO_INCREMENT , `todo` VARCHAR(200) NOT NULL , `done` BOOLEAN NOT NULL DEFAULT FALSE , `deadline` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';