<?php

namespace Mix\Database\Coroutine;

use Mix\Pool\ConnectionTrait;

/**
 * PDOCoroutine组件
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class PDOConnection extends \Mix\Database\Persistent\PDOConnection
{

    use ConnectionTrait;

}
