<?php
error_reporting(0);
class Login_model extends CI_Model
{

    private $_user = "users";

    public function doLogin()
    {
        $post = $this->input->post();
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_user)->row();
        if ($post["username"] == null && $post["password"] == null) {
            header('Content-Type: application/json');
            $output = array(
                "error_code" => 404,
                "message" => "Not Found",
            );
            echo json_encode($output);
        } else {
            if ($user) {
                $isPasswordTrue = password_verify($post["password"], $user->password);
                // jika password benar dan dia admin
                if ($isPasswordTrue) {
                    $username = $post["username"];
                    $this->session->set_userdata(['SeS-imunisasi' => $username]);
                    // $this->_updateLastLogin($user->id);
                    $output = array(
                        "error_code" => 0,
                        "message" => "Login Sukses",
                        "type" => "success"
                    );
                } else {
                    $output = array(
                        "error_code" => 2,
                        "message" => "Data yang anda masukan salah !",
                        "type" => "error",
                    );
                }
            } else {
                $output = array(
                    "error_code" => 2,
                    "message" => "Data yang anda masukan salah !",
                    "type" => "error",
                );
            }
        }
        echo json_encode($output);
    }

    public function isNotLogin()
    {
        return $this->session->userdata('SeS-imunisasi') == null;
    }

    private function _updateLastLogin($id)
    {
        $sql = "UPDATE {$this->_user} SET last_login=now() WHERE id={$id}";
        $this->db->query($sql);
    }
}
