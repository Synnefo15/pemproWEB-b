<?php 
    class Tabung{
        private $diameter;
        private $tinggi;
        private $r;
        private $luassel;
		private $voltab;
        private $phi = 3.14;

        public function setDiameter($value) {
            $this->diameter = $value;
            $this->r = $this->diameter/2;
        }

        public function setTinggi ($value) {
            $this->tinggi = $value;
        }

        public function hitungLuas() {
            $this->luassel = 3.14* $this->diameter*$this->tinggi;
        }

        public function getLuasSelimut (){
            return $this->luassel;
        }
		
		public function hitungVol() {
			$this->voltab = 3.14* $this->r**2 *$this->tinggi;
		}
		
		public function getVol (){
            return $this->voltab;
        }
		
        public function tes(){
            echo 'tabung berhasil';
        }
    }
?>