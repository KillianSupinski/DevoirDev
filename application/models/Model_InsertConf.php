<?php

class Model_InsertConf extends CI_Model
{
    public function insertConference($tab)
    {
        $sql = $this->db->insert('user', $tab);

        return $this->db->insert_id();
    }
}
