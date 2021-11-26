<?php
    class User {
        private $userID = "1";
        public $name = "Trọng Lâm";
        public $address = "xóm 7, thôn Thọ Trung";
        protected $email = "yumi@gmail.com";
        protected $account = "conchimtolon";
        protected $password = "1234567";

        function lay_ID() {
            return $this->userID;
        }
        function lay_email() {
            return $this->email;
        }
        function lay_account() {
            return $this->account;
        }
        function lay_password() {
            return $this->password;
        }
    }

?>