<?php

    class Dashboard extends CI_Controller{


        function __construct()
        {   
            parent::__construct();

            if($this->session->userdata('status') != "login"){
                redirect(base_url("login"));
            }
        }



        public function index(){
            $component["header"] = $this->load->view("layouts/header.php");
            $component["sidebar"] = $this->load->view("layouts/sidebar.php");
            $component["navbar"] = $this->load->view("layouts/navbar.php");
            $component["dashboard"] = $this->load->view("pages/dashboard.php");
            $component["footer"] = $this->load->view("layouts/footer.php");
            $component["js_under"] = $this->load->view("layouts/js_under.php");
            
            return $this->load->view("layouts/page.php", $component);
        }
    }


?>