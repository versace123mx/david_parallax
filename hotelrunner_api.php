<?php
    class HotelRunner{

        private $api;
        private $response;
        private $hr_number;
        private $guest;
        private $firstname;
        private $lastname;
        private $checkin_date;
        private $checkout_date;
        private $note;

        public function __construct(){
            $this->api;
            $this->response;
            $this->hr_number;
            $this->guest;
            $this->firstname;
            $this->lastname;
            $this->checkin_date;
            $this->checkout_date;
            $this->note;
        }

        public function getHotelRunner(){
            $this->api="https://app.hotelrunner.com/api/v2/apps/reservations?token=xozXYTH5kRLXGLycq1voxu52VDOqo2a9RfwMNLKp&hr_id=580477806";

            $this->response = file_get_contents($this->api);
            $this->response = json_decode($this->response,true);

            foreach ($this->response as $k=>$v){
                return $v;
            }
        }

        public function gethr_number(){
            return $this->hr_number = self::getHotelRunner()[0]['hr_number'];
        }
        public function getguest(){
            return $this->guest = self::getHotelRunner()[0]['guest'];
        }
        public function getfirstname(){
            return $this->firstname = self::getHotelRunner()[0]['firstname'];
        }
        public function getlastname(){
            return $this->lastname = self::getHotelRunner()[0]['lastname'];;
        }
        public function getcheckin_date(){
            return $this->checkin_date = self::getHotelRunner()[0]['checkin_date'];;
        }
        public function getcheckout_date(){
            return $this->checkout_date = self::getHotelRunner()[0]['checkout_date'];;
        }
        public function getnote(){
            return $this->note = self::getHotelRunner()[0]['note'];;
        }
    }