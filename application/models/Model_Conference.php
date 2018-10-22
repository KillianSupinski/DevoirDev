<?php

class Model_Conference extends CI_Model
{
    public function getIdConf()
    {
        $sql = $this->db->query('select (MAX(conference.IDCONFERENCE) +1) as idConference from conference');

        return $sql->result();
    }

    public function getNomNiveau()
    {
        $sql = $this->db->query('select NIVEAU, IDNIVEAU  from  niveau');

        return $sql->result();
    }

    public function getNomTheme()
    {
        $sql = $this->db->query('select LIBELLETHEME, IDTHEME from theme');

        return $sql->result();
    }
}
