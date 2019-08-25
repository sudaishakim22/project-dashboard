<?php

    class Dashboard extends CI_Controller{


        public function index(){
            $component["header"] = $this->load->view("../views/layouts/header.php");
            $component["sidebar"] = $this->load->view("../views/layouts/sidebar.php");
            $component["footer"] = $this->load->view("../views/layouts/footer.php");
            
            return $this->load->view("../views/layouts/page.php", $component);
        }
    }


?>