<?php 

    class Comment{
        private $user;
        private $recipe;
        private $comment;
        private $rate;

        public function __construct()
        {
            
        }

        public function getUser(){
            return $this->user;
        }

        public function getRecipe(){
            return $this->recipe;
        }

        public function getComment(){
            return $this->comment;
        }

        public function getRate(){
            return $this->rate;
        }

        public function setUser($user){
            $this->user = $user;
        }

        public function setRecipe($recipe){
            $this->recipe = $recipe;
        }

        public function setComment($comment){
            $this->comment = $comment;
        }

        public function setRate($rate){
            $this->rate = $rate;
        }
    }
?>