<?php

class Promotion
{
		private $id_prom;
		private $pourcentage;
		private $id_produit;
		private $date_debut;
		private $date_fin;
		

		public function __construct($pourcentage,$id_produit,$date_debut,$date_fin)
		{
            $this->pourcentage = $pourcentage;
            $this->id_produit = $id_produit;
            $this->date_debut = $date_debut;
            $this->date_fin = $date_fin;
		}

		public function get_id_prom()
		{
			return $this->id_prom;
		}

		public function set_id_prom($id_prom)
		{
			$this->id_prom = $id_prom;
		}

		public function get_id_produit()
		{
			return $this->id_produit;
		}

		public function set_id_produit($id_produit)
		{
			$this->id_produit = $id_produit;
		}

		public function get_pourcentage()
		{
			return $this->pourcentage;
		}

		public function set_pourcentage($pourcentage)
		{
			$this->pourcentage = $pourcentage;
		}

		public function get_date_debut()
		{
			return $this->date_debut;
		}

		public function set_date_debut($date_debut)
		{
			$this->date_debut = $date_debut;
		}

		public function get_date_fin()
		{
			return $this->date_fin;
		}

		public function set_date_fin($date_fin)
		{
			$this->date_fin = $date_fin;
		}



}




?>