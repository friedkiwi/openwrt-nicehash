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
    return shell_exec("/usr/bin/get_miner_id");
}

function get_nheqminer_status_json() {
    return shell_exec("/usr/bin/get_nheqminer_status");
}


function write_nheqminer_status_html() {
    $data = json_decode(get_nheqminer_status_json());

    $speed = $data -> {"result"} -> {"speed_sps"};
    $accepted = $data -> {"result"} -> {"accepted_per_minute"};
    $rejected = $data -> {"result"} -> {"rejected_per_minute"};

    ?>
    <p>Currentl algorithm: nheqminer/equihash</p>
    <p>Speed: <?php echo $speed; ?> (accepted:  <?php echo $accepted; ?>, rejected:  <?php echo $rejected; ?>)</p>
    <?php
}


function get_algorithm() {
    return "nheqminer";
}

function write_status() {
    if (get_algorithm() == "nheqminer") {
        write_nheqminer_status_html();
    } else {
        ?>
<p>This host is currently not mining.</p>
<?php
    }
}


