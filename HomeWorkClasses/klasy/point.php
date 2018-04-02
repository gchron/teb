<?php

class Point {

    public $x, $y;

    public function __construct($x = null, $y = null) {
        $this->x = (int) $x;
        $this->y = (int) $y;
    }

    public function setData($data = array()) {
        $this->x = $data['x'];
        $this->y = $data['y'];
    }

    public function getXY() {
        return array(
            'x' => $this->x,
            'y' => $this->y);
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

// od tegomiejsca moje wypociny 

    public function read($fileName = "punkty_10") {
        $file = $fileName . '.txt';
        if (file_exists($file)) {
            $fp = fopen($file, 'r');
            $read = fread($fp, filesize($file));
//            print_r($read);
            echo '<br/><br/>';
            $firstCut = explode(";", $read);
//            print_r($firstCut);
//            echo '<br/> ciecie drugie <br/>';
//            echo '<br/>';
        } else {
            echo 'nieprawid³owa nazwa pliku';
            echo'<br/>';
        }
        fclose($fp);
        $punkt[] = new Point();
        for ($i = 0; $i < count($firstCut) - 1; $i++) {
            $secondCut[$i] = explode(":", $firstCut[$i]);
            print_r($secondCut[$i]);
            $this->x = $secondCut[$i]['0'];
            $this->y = $secondCut[$i]['1'];
            $punkt[$i] = new Point($this->x, $this->y);
            //print_r($punkt[$i]);
            echo '<br/><br/>';
        }
        print_r($punkt);
        return($punkt);
        
    }
}
?>

