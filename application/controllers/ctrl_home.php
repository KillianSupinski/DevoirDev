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
        $data['lesIdConf'] = $this->Model_Conference->getIdConf();
        $data['lesNomsNiveau'] = $this->Model_Conference->getNomNiveau();
        $data['lesNomsTheme'] = $this->Model_Conference->getNomTheme();
        $this->load->view('view_Technologie', $data);
    }

    public function insererConference()
    {
        $titre = $this->input->post('txtTitre');
        $contenue = $this->input->post('txtContenue');
        $idTech = $this->input->post('idTech');
        $idTheme = $this->input->post('idTheme');
        $idNiveau = $this->input->post('idNiveau');
        $idConfe = $this->input->post('txtIdConf');
        $tab = array(
            'IDCONFERENCE' => $idConfe,
            'TITRE' => $titre,
            'CONTENU' => $contenue,
            'IDTHEME' => $idTheme,
            'IDNIVEAU' => $idNiveau,
        );
        $tabTech = array(
            'IDCONFERENCE' => $idConfe,
            'mdp' => $idTech,
        );
        $this->load->model('Model_InsertConf');
        $this->Model_InsertConf->insertConference($tab, $tabTech);
    }
}
