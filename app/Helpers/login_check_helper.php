<?php
function loginCheck()
{
    $CustomerModel = new \App\Models\CustomerModel();
    $data = [];

    if (session()->has('login_status')) {
        $statusLog = session()->get('login_status');
        if ($statusLog) {
            if (session()->get('username')) {
                $username = session()->get('username');
                $customerData = $CustomerModel->select('customer_id, username, first_name')->where('username', $username)->first();
                if ($customerData) {
                    if (session()->get('key')) {
                        $key = session()->get('key');
                        if (password_verify($customerData['customer_id'], $key)) {
                            $data['user'] = $customerData;
                            $data['key'] = $key;
                            $data['login_status'] = session()->get('login_status');
                        }
                    }
                }
            }
        } else {
            $data = [
                'login_status' => false
            ];
        }
    } else {
        $data = [
            'login_status' => false
        ];
    }

    return $data;
}
