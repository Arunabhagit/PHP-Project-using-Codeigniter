<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImageController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary libraries, models, etc.
    }

    public function show_image($filename) {
        // Load the image helper (you can autoload it in the config/autoload.php)
        $this->load->helper('url');

        // Get the path to the image file
        $image_path = FCPATH.'public/uploads/'.$filename;

        // Check if the image exists
        if (file_exists($image_path)) {
            // Get the image MIME type to set proper headers
            $mime = mime_content_type($image_path);
            header("Content-type: $mime");

            // Output the image
            readfile($image_path);
        } else {
            // If the image doesn't exist, show a placeholder image or error message
            // For example, you could redirect to a 404 page
            // redirect('error404');
            // or display a placeholder image
            // $this->load->view('placeholder_image');
        }
    }
}