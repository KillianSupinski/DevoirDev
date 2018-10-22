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
            'TITRE' => $titre,
            'CONTENU' => $contenue,
            'IDTHEME' => $idTheme,
            'IDNIVEAU' => $idNiveau,
            'IDCONFERENCE' => $idConfe,
        );
        $tabTech = array(
            'IDCONFERENCE' => $idConfe,
            'IDTECHNO' => $idTech,
        );
        $this->load->model('Model_InsertConf');
        $this->Model_InsertConf->insertConference($tab, $tabTech);
    }

    public function afficherLesVotes()
    {
        $this->load->model('Model_Vote');
        $data['lesVotes'] = $this->Model_Vote->getAllVote();
        $this->load->view('view_Vote', $data);
    }
}
