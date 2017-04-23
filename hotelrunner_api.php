<?php
    class HotelRunner{

        private $api;
        private $response;

        public function __construct(){
            $this->api;
            $this->response;
        }

        public function getHotelRunner(){
            $this->api="https://app.hotelrunner.com/api/v2/apps/reservations?token=xozXYTH5kRLXGLycq1voxu52VDOqo2a9RfwMNLKp&hr_id=580477806";

            $this->response = file_get_contents($this->api);
            return $this->response = json_decode($this->response);
        }
    }