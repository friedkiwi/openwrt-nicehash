<?php
/**
 * Created by PhpStorm.
 * User: friedkiwi
 * Date: 30/06/2017
 * Time: 13:10
 */

$cmd = $_GET["cmd"];

if (! is_null($cmd)) {
    if ($cmd != "") {
        if ($cmd == "reboot") {
            echo "Please wait - rebooting...";
            $outcome = shell_exec("/usr/bin/sudo /sbin/reboot");
            exit(0);

        }
    }
}

header("Location: /");