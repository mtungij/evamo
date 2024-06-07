<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include APPPATH . 'third_party/sendgrid-php/sendgrid-php.php';
class Statements extends CI_Controller {
    public function loan_return_statement($customer_id) {
        $this->load->model('queries');
        $loan = $this->queries->get_loan_active_customer($customer_id);
        $total_days = $loan->day * $loan->session;


        $this->load->view('statements/loan_return', [
            'loan' => $loan,
            'total_days' => $total_days,
        ]);
    }
}