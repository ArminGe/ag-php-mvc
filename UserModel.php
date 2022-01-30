<?php
/**
 * Project: armin - Filename: UserModel.php
 * Namespace: app\core
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 17:31
 */

namespace app\core;
use app\core\db\DbModel;

/**
 * Class UserModel
 * @package app\core
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}