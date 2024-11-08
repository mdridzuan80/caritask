<?php
class Pages extends CI_Controller {

        public function view($page = 'Services')
    {
        if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->helper('url');
        $this->load->view('/'.$page, $data);
       
    }
}
