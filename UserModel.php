<?php
/**
 * Project: armin - Filename: UserModel.php
 * Namespace: agellweiler\phpmvc
 * Initial version by: Armin Gellweiler, E-Mail: armin@gellweiler.net
 * Company: igus GmbH
 * Initial version created on: 29.01.22 17:31
 */

namespace agellweiler\phpmvc;
use agellweiler\phpmvc\db\DbModel;

/**
 * Class UserModel
 * @package agellweiler\phpmvc
 * @author Armin Gellweiler <armin@gellweiler.net>
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}