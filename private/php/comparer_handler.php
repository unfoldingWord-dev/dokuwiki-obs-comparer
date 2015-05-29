<?php
    class ComparerHanlder
    {
        private $source;
        private $target;
        private $ignore_ws;
        private $ignore_punct;
        private $json;
        private $languages;
        private $catalog;

        public function __construct($source = 'en'){
            $this->source = $source;
        }
    }
