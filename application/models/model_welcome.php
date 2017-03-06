<?php
class model_welcome extends CI_Model {

    function tampilkan_data() {

        return $this->db->get('rakor_id');
    }

    function post($data) {
        $this->db->insert('rakor_id', $data);
    }

}
