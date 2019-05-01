<?php
    class View{
        public static function createView($view,$param){
            foreach ($param as $key => $value) {
                $$key=$value;
            }
            ob_start();
            include 'View/'.$view;
            $content = ob_get_contents();
            ob_end_clean();
            ob_start();
            include 'Layout/layout.php';
            $layout = ob_get_contents();
            ob_end_clean();
            return $layout;
        }

        public static function createHomepage($view,$param){
            foreach ($param as $key => $value) {
                $$key=$value;
            }
            ob_start();
            include 'View/'.$view;
            $content = ob_get_contents();
            ob_end_clean();
            ob_start();
            include 'Layout/layoutHomepage.php';
            $layout = ob_get_contents();
            ob_end_clean();
            return $layout;
        }
    }
?>