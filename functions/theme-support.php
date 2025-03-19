<?php

function dragon_theme_support()
{
    //dynamically add title tag to header
    add_theme_support('title-tag');
    //dynamically add logo to header
    add_theme_support('custom-logo');
    //dynamically add thumbnails and featured images to posts
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dragon_theme_support');


// custom web form
add_action('wp_ajax_nlf-form', 'dragon_enquiry');
add_action('wp_ajax_nopriv_nlf-form', 'dragon_enquiry');

function dragon_enquiry()
{

    $form_data = [];

    wp_parse_str($_POST['nlf-form'], $form_data);

    //admin email
    $admin_email = get_option('admin_email');

    // email headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: Template Argon Website < ' . $admin_email . ' >';
    $headers[] = 'Reply to: ' . $form_data['form-email'];
    $headers[] = 'BCC: marvinoka4@gmail.com';

    //email recipient
    $send_to = $admin_email;

    // subject
    $subject = "Template Argon [Website] - " . $form_data['form-enquiry'] . " Enquiry - " . $form_data['form-name'];

    // message
    $message = '';

    foreach ($form_data as $index => $field) {
        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
    }

    try {
        if (wp_mail($send_to, $subject, $message, $headers)) {

            wp_send_json_success('Thank you for contacting us, a member of our team would get back to you shortly!');
        } else {

            wp_send_json_error('There was an error, please check servers and try again!');
        }
    } catch (Exception $e) {

        wp_send_json_error($e->getMessage());
    }
}

// custom formidable morgages form
add_action('wp_ajax_submit_to_formidable', 'handle_formidable_submission');
add_action('wp_ajax_nopriv_submit_to_formidable', 'handle_formidable_submission');

function handle_formidable_submission()
{
    // Verify nonce
    check_ajax_referer('submit_to_formidable_nonce', 'nonce');

    // Get raw POST data
    $rawFormData = isset($_POST['formData']) ? $_POST['formData'] : '';
    error_log('Raw POST formData: ' . $rawFormData);

    // Decode URL-encoded string
    $decodedRawFormData = urldecode($rawFormData);
    error_log('URL-decoded formData: ' . $decodedRawFormData);

    // Remove backslashes (if double-escaped)
    $cleanedFormData = stripslashes($decodedRawFormData);
    error_log('Cleaned formData (after stripslashes): ' . $cleanedFormData);

    // Decode the JSON string
    $formData = json_decode($cleanedFormData, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log('JSON decode error: ' . json_last_error_msg());
        error_log('JSON last error code: ' . json_last_error());
    } else {
        error_log('JSON decoded successfully');
    }
    error_log('Decoded formData: ' . print_r($formData, true));

    // Define the Formidable Form ID
    $form_id = 2;

    // Format the data for Formidable
    $entry_data = array(
        'form_id' => $form_id,
        'item_meta' => array(
            7 => isset($formData['mortgageType']) ? ucwords(str_replace('-', ' ', $formData['mortgageType'])) : '', // e.g., "purchase" -> "Purchase"
            8 => isset($formData['reason']) ? ucwords(str_replace('-', ' ', $formData['reason'])) : '', // e.g., "new-build" -> "New Build"
            10 => isset($formData['propertyPrice']) ? '£' . number_format((int) $formData['propertyPrice'], 0, '.', ',') : '£0', // e.g., "250000" -> "£250,000"
            11 => isset($formData['loanAmount']) ? '£' . number_format((int) $formData['loanAmount'], 0, '.', ',') : '£0', // e.g., "25000" -> "£25,000"
            31 => isset($formData['currentMortgageOutstanding']) ? '£' . number_format((int) $formData['currentMortgageOutstanding'], 0, '.', ',') : '£0', // e.g., "25000" -> "£25,000"
            32 => isset($formData['additionalLoanAmount']) ? '£' . number_format((int) $formData['additionalLoanAmount'], 0, '.', ',') : '£0', // e.g., "25000" -> "£25,000"
            12 => isset($formData['mortgageTerm']) ? (int) $formData['mortgageTerm'] . ' years' : '0 years', // e.g., "5" -> "5 years"
            13 => isset($formData['firstName']) ? (string) $formData['firstName'] : '',
            14 => isset($formData['lastName']) ? (string) $formData['lastName'] : '',
            15 => isset($formData['email']) ? (string) $formData['email'] : '',
            16 => isset($formData['employmentStatus']) ? ucwords(str_replace('-', ' ', $formData['employmentStatus'])) : '', // e.g., "self-employed" -> "Self Employed"
            17 => isset($formData['grossAnnualIncome']) ? '£' . number_format((int) $formData['grossAnnualIncome'], 0, '.', ',') : '£0' // e.g., "544433564345535344" -> "£544,433,564,345,535,344"
        )
    );

    // Log the entry data before submission
    error_log('Entry data to be submitted: ' . print_r($entry_data, true));

    // Create the entry using Formidable's API
    if (class_exists('FrmEntry')) {
        $entry_id = FrmEntry::create($entry_data);
        if ($entry_id) {
            error_log('Entry created with ID: ' . $entry_id);
            wp_send_json_success(array('entry_id' => $entry_id));
        } else {
            error_log('Failed to create entry');
            wp_send_json_error('Failed to create entry');
        }
    } else {
        error_log('Formidable Forms not active');
        wp_send_json_error('Formidable Forms not active');
    }

    wp_die();
}

// custom formidable protection form
add_action('wp_ajax_submit_protection_to_formidable', 'handle_protection_formidable_submission');
add_action('wp_ajax_nopriv_submit_protection_to_formidable', 'handle_protection_formidable_submission');

function handle_protection_formidable_submission()
{
    // Verify nonce
    check_ajax_referer('submit_to_formidable_nonce', 'nonce');

    // Get raw POST data
    $rawFormData = isset($_POST['formData']) ? $_POST['formData'] : '';
    error_log('Raw POST formData: ' . $rawFormData);

    // Decode URL-encoded string
    $decodedRawFormData = urldecode($rawFormData);
    error_log('URL-decoded formData: ' . $decodedRawFormData);

    // Remove backslashes (if double-escaped)
    $cleanedFormData = stripslashes($decodedRawFormData);
    error_log('Cleaned formData (after stripslashes): ' . $cleanedFormData);

    // Decode the JSON string
    $formData = json_decode($cleanedFormData, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log('JSON decode error: ' . json_last_error_msg());
        wp_send_json_error('Invalid form data');
    }
    error_log('Decoded formData: ' . print_r($formData, true));

    // Define the Formidable Form ID (replace with your actual form ID)
    $form_id = 3; // Adjust this to your Protection Form ID

    // Map formData to Formidable field IDs (replace with your actual field IDs)
    $entry_data = array(
        'form_id' => $form_id,
        'item_meta' => array(
            19 => isset($formData['protectionOption']) ? ucwords(str_replace('-', ' ', $formData['protectionOption'])) : '', // e.g., "life-insurance" -> "Life Insurance"
            20 => isset($formData['coverAmount']) ? '£' . number_format((int) $formData['coverAmount'], 0, '.', ',') : '£0', // e.g., "3000094" -> "£3,000,094"
            21 => isset($formData['coverTerm']) ? (int) $formData['coverTerm'] . ' years' : '0 years', // e.g., "15" -> "15 years"
            22 => isset($formData['firstName']) ? (string) $formData['firstName'] : '',
            23 => isset($formData['lastName']) ? (string) $formData['lastName'] : '',
            24 => isset($formData['phone']) ? '+' . (string) $formData['phone'] : '',
            25 => isset($formData['email']) ? (string) $formData['email'] : '',
            26 => isset($formData['dob']) ? (string) $formData['dob'] : '', // "DD/MM/YYYY"
            27 => isset($formData['smokerStatus']) ? ucwords(str_replace('-', ' ', $formData['smokerStatus'])) : '', // e.g., "non-smoker" -> "Non Smoker"
            28 => isset($formData['employmentStatus']) ? ucwords(str_replace('-', ' ', $formData['employmentStatus'])) : '', // e.g., "self-employed" -> "Self Employed"
            29 => isset($formData['grossAnnualIncome']) ? '£' . number_format((int) $formData['grossAnnualIncome'], 0, '.', ',') : '£0', // e.g., "100000" -> "£100,000"
            30 => isset($formData['additionalInfo']) ? (string) $formData['additionalInfo'] : ''
        )
    );

    // Log the entry data before submission
    error_log('Entry data to be submitted: ' . print_r($entry_data, true));

    // Create the entry using Formidable's API
    if (class_exists('FrmEntry')) {
        $entry_id = FrmEntry::create($entry_data);
        if ($entry_id) {
            error_log('Entry created with ID: ' . $entry_id);
            wp_send_json_success(array('entry_id' => $entry_id));
        } else {
            error_log('Failed to create entry');
            wp_send_json_error('Failed to create entry');
        }
    } else {
        error_log('Formidable Forms not active');
        wp_send_json_error('Formidable Forms not active');
    }

    wp_die();
}


// custom formidable contact form
add_action('wp_ajax_submit_contact_to_formidable', 'submit_contact_to_formidable_handler');
add_action('wp_ajax_nopriv_submit_contact_to_formidable', 'submit_contact_to_formidable_handler');

function submit_contact_to_formidable_handler()
{
    check_ajax_referer('submit_to_formidable_nonce', 'nonce');

    if (!isset($_POST['formData'])) {
        wp_send_json_error('No form data provided.');
        return;
    }

    $formData = json_decode(stripslashes($_POST['formData']), true);
    if (!$formData) {
        wp_send_json_error('Invalid form data.');
        return;
    }

    // Define your Formidable form ID
    $form_id = 4; // Replace with your actual Contact Form ID

    // Map form data to Formidable field IDs (replace with your field IDs)
    $entry_data = [
        32 => $formData['contactName'],    // Field ID for Name
        33 => $formData['contactEmail'],   // Field ID for Email
        34 => $formData['contactMessage'], // Field ID for Message
    ];

    // Create Formidable entry
    if (function_exists('frm_create_entry')) {
        $entry_id = frm_create_entry([
            'form_id' => $form_id,
            'item_meta' => $entry_data,
        ]);

        if ($entry_id && !is_wp_error($entry_id)) {
            wp_send_json_success(['entry_id' => $entry_id]);
        } else {
            wp_send_json_error('Failed to create entry.');
        }
    } else {
        wp_send_json_error('Formidable Forms not active.');
    }
}
