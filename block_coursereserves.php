<?php
    class block_coursereserves extends block_base {
        public function init() {
            $this->title = get_string('coursereserves', 'block_coursereserves');
        }
        
        public function get_content() {
            if ($this->content !== null) {
                return $this->content;
            }
            
            $this->content = new stdClass();
            $html = '<p>
                        <span style="font-size: large;"><a href="https://ares.up.edu/ares/" target="_blank">Course Reserves</a></span>
                    </p>
                    
                    <p>
                        <span style="font-size: small;">Login with your UP network username and password to see items on reserve for your courses.</span>
                    </p>';
            
            $this->content->text = $html;
            
            return $this->content;
        }
    }