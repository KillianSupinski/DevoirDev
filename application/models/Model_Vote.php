<?php

class Model_Vote extends CI_Model
{
    public function getAllVote()
    {
        $sql = $this->db->query('select IDCONFERENCE, TITRE, NBVOTES from conference');

        return $sql->result();
    }
}
