<?php

class Model_InsertConf extends CI_Model
{
    public function insertConference($tab, $tabTech)
    {
        $sql = $this->db->insert('conference', $tab);
        $sql = $this->db->insert('utiliser', $tabTech);
    }
}
