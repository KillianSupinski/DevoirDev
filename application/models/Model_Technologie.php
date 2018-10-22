<?php

class Model_Technologie extends CI_Model
{
    public function getAllTech()
    {
        $sql = $this->db->query('select IDTECHNO, NOMTECHNO from technologie');

        return $sql->result();
    }
}
