<?php
/**
 * Created by PhpStorm.
 * User: friedkiwi
 * Date: 30/06/2017
 * Time: 09:30
 */

function get_payout_address() {
    return shell_exec("/usr/bin/get_btc_address");
}

function get_miner_name() {
    return "stub";
}