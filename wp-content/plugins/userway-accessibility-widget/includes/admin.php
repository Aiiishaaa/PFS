<?php
$true_page = 'userway';

function usw_userway_settings() {
    add_options_page( 'UserWay', 'UserWay', 'manage_options', 'userway', 'usw_userway_settings_page');
}
add_action('admin_menu', 'usw_userway_settings');

function usw_userway_settings_page(){
    global $true_page;
    $all_options = get_option('usw_userway_settings');
    ?><div class="wrap">
    <div id="logo_user_way">
        <img src="<?= USW_USERWAY_URL ?>assets/images/userway_logo_color.svg" alt="UserWay">
    </div>

    <?php if($all_options['status'] === 'error'): ?>
        <div class="userway_code_error">
            <?php foreach($all_options['errors'] as $err) { ?>
            <p><strong>Error:</strong> <?= $err ?></p>
            <?php } ?>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('usw_userway_settings');
        do_settings_sections($true_page);
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>

    <?php if(!empty($all_options['code'])): ?>
        <div class="userway_code">
            <p>Your plugin was successfully registered. Your unique UserWay Account ID: <strong><?= $all_options['code']; ?></strong></p>
        </div>
    <?php endif; ?>

    <?php if(empty($all_options['code'])): ?>
        <div class="userway_code">
            <p>Please configure the plugin to complete your setup.</p>
        </div>
    <?php endif; ?>

    <div id="instr">
        <hr />
        <h3>Instructions for completing the form of default plugin settings:</h3>
        <ol>
            <li>Enter your email address</li>
            <li>Enter your first name</li>
            <li>Enter your last name</li>
            <li>Enter the URL of your website</li>
            <li>Click the "Save Changes" button</li>
            <li>Get your unique UserWay code below</li>
        </ol>
        <strong>For individual settings, go to the widget's "Manage" menu from your site</strong>
        <br /><br />
        <img src="https://userway.org/promo/images/manage_example.jpg" width="546" style="width:90%; max-width:546px" />
    </div>

    </div><?php
}


function true_option_settings() {
    global $true_page;
    register_setting( 'usw_userway_settings', 'usw_userway_settings', 'true_validate_settings' );
    add_settings_section( 'true_section_1', '', '', $true_page );

    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'email',
        'label_for' => 'email'
    );
    add_settings_field( 'usw_email_field', 'Email', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'first_name',
        'label_for' => 'first_name'
    );
    add_settings_field( 'usw_first_name_field', 'First name', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'last_name',
        'label_for' => 'last_name'
    );
    add_settings_field( 'usw_last_name_field', 'Last name', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'url',
        'label_for' => 'url'
    );
    add_settings_field( 'usw_url_field', 'URL', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

}
add_action( 'admin_init', 'true_option_settings' );

function true_option_display_settings($args) {

    extract( $args );

    $option_name = 'usw_userway_settings';

    $o = get_option( $option_name );
    $all_options = get_option('usw_userway_settings');

    switch ( $type ) {
        case 'text':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
            break;
    }
}

function true_validate_settings($input) {

    $errors = [];

    if (empty($input['email'])) {
        $errors[] = 'Email is empty';
    }

    if (empty($input['first_name'])) {
        $errors[] = 'First name is empty';
    }

    if (empty($input['last_name'])) {
        $errors[] = 'Last name is empty';
    }

    if (count($errors) > 0) {
        $input['errors'] = $errors;
        $input['status'] = 'error';
    }

    if (empty($input['errors'])) {
        $data_string = json_encode($input);
        if ($curl = curl_init()) {
            curl_setopt($curl, CURLOPT_URL, 'https://userway.org/api/users/registration');
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
            );
        }
        $result = json_decode(curl_exec($curl));

        if ($result->code === 200) {
            $input['code'] = $result->data->user->code;
            $input['status'] = 'success';
        } else {
            $input['status'] = 'error';
            $input['errors'][] = 'All fields are required';
            foreach($input as $k => $v) {
                $valid_input[$k] = trim($v);
                if(($input[$k]) == '') {
                    $input['errors'][$k] = '_error';
                }
            }
        }
    }
    return $input;
}