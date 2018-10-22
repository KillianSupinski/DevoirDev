<?php

class ctrl_home extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_index');
    }

    public function afficherLesTechnologie()
    {
        $this->load->model('Model_Technologie');
        $data['lesTechs'] = $this->Model_Technologie->getAllTech();
        $this->load->model('Model_Conference');
        $data['lesIDConf'] = $this->Model_Conference->getIdConf();
        $data['lesNomsNiveau'] = $this->Model_Conference->getNomNiveau();
        $data['lesNomsTheme'] = $this->Model_Conference->getNomTheme();
        $this->load->view('view_Technologie', $data);
    }
}
