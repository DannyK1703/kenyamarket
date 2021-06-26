<?php

    class utilisateur extends CI_Model
    {
        public $vendeur='vendeur';
        public $agent='agent';
        public $admin='admin';
        public $attribution='attribution';
        public $categorie='categorie';
        public $emplacement='emplacement';
        public $place='place';
        public $utilisateur='utilisateur';

        public function addUtilisateur($data)
        {
            $type=$data['type'];
            $info=array('nom'=>$data['nom'],'email'=>$data['email']);
            $this->db->insert($this->utilisateur,$info);
            $id=$this->db->insert_id();
            if($type=='vendeur'){
                $vendeur=array('matricule'=>$data['matricule'],'phone'=>$data['phone'],'adresse'=>$data['adresse'],'categorie_idcategorie'=>$data['categorie_idcategorie'],'utilisateur_idutilisateur'=>$id);
           
                $this->db->insert($this->vendeur,$vendeur);
                return 1;
 
            }
            else if($type=='agent'){
                $particulier= array('phone'=>$data['phone'],'adresse'=>$data['adresse'],'matricule'=>$data['matricule'], 'pwd'=>$data['pwd'],'utilisateur_idutilisateur'=>$id);
            
                $this->db->insert($this->agent,$particulier);
                return 1;
            }
            
            return 0;
        }

        public function AuthAgent($data){
                $this->db->where($data);
                $res=$this->db->get($this->agent)->result();
                if($res!=null)
                    return 1;
                return 0;
        }
        public function AuthAdmin($data){
            
            $this->db->where($data);
            $res=$this->db->get($this->admin)->result();
            if($res!=null)
                return 1;
            return 0;
        }

        public function getVendeurs()
        {
            $this->db->select('idVendeur, matricule, phone, titre, nom, email,adresse,idcategorie');
            $this->db->from($this->vendeur);
            $this->db->join($this->utilisateur, $this->vendeur.'.utilisateur_idUtilisateur = '.$this->utilisateur.'.idUtilisateur');
            $this->db->join($this->categorie, $this->vendeur.'.categorie_idcategorie = '.$this->categorie.'.idcategorie');
           
            $query = $this->db->get()->result();
            return $query;
        }

        public function CountVendeurbyCat($id){
            
            $this->db->select('idVendeur');
            $this->db->from($this->vendeur);
            $this->db->where('categorie_idcategorie', $id);
            $query =$this->db->count_all_results();
            return $query;
        }

        public function CountVendeurbyAttrib($id){
            
            $this->db->select('idVendeur');
            $this->db->from($this->vendeur);
            $this->db->join($this->categorie, $this->vendeur.'.categorie_idcategorie = '.$this->categorie.'.idcategorie');
            $this->db->join($this->attribution, $this->vendeur.'.idvendeur = '.$this->attribution.'.vendeur_idvendeur');
            $this->db->where('categorie_idcategorie', $id);
            $query =$this->db->count_all_results();
            return $query;
        }
        
        public function getAgents(){
            $this->db->select('phone,adresse,email,nom,idagent,matricule');
            $this->db->from($this->agent);
            $this->db->join($this->utilisateur, $this->agent.'.utilisateur_idutilisateur = '.$this->utilisateur.'.idutilisateur');
            $query = $this->db->get()->result();
            
            return $query;
        }
        public function getAdmin($login){
            $this->db->select('numero, email,nom');
            $this->db->from($this->admin);
            $this->db->join($this->utilisateur, $this->admin.'.utilisateur_idutilisateur = '.$this->utilisateur.'.idutilisateur');
            $this->db->where($login);
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAgent($matricule){
            $this->db->select('phone,adresse,email,nom,idagent,matricule');
            $this->db->from($this->agent);
            $this->db->join($this->utilisateur, $this->agent.'.utilisateur_idutilisateur = '.$this->utilisateur.'.idutilisateur');
            $this->db->where($matricule);
            $query = $this->db->get()->result();
            
            return $query;
        }
        public function getMatriculeAgent($id){
            $this->db->select('matricule');
            $this->db->from($this->agent);
            $this->db->where($id);
            $query = $this->db->get()->result();
            
            return $query[0]->matricule;
        }
        
        public function newCategorie($data){
            $this->db->insert($this->categorie,$data);
        }
        public function getCategories(){
            $this->db->select('idcategorie, titre, descriptions');
            $this->db->from($this->categorie);
            $query = $this->db->get()->result();
            return $query;
        }
        public function PlaceAttribuer($a){
            
        }
           
      public function getUtilisateurAttribuerbyCat($idCategorie)
      {
        $this->db->select('idVendeur, matricule, phone, nom, email');
        $this->db->from($this->vendeur);
        $this->db->join($this->utilisateur, $this->vendeur.'.utilisateur_idUtilisateur = '.$this->utilisateur.'.idUtilisateur');
        $this->db->join($this->categorie, $this->vendeur.'.categorie_idcategorie = '.$this->categorie.'.idcategorie');
        $this->db->join($this->attribution, $this->vendeur.'.idvendeur = '.$this->attribution.'.vendeur_idvendeur');
        $this->db->where($idCategorie);
        $query = $this->db->get()->result();
        return $query;
      } 

      public function VerifVendeur($id){
          $this->db->select('vendeur_idvendeur');
          $this->db->from($this->attribution);
          $this->db->where('vendeur_idvendeur',$id);
          $result = $this->db->get()->row();
          if($result == []){
              return 0;
          }
          return 1;
      }

        public function getVendeurs_Par_Categorie($idCategorie){
            $this->db->select('idVendeur, matricule, phone, nom, email');
            $this->db->from($this->vendeur);
            $this->db->join($this->utilisateur, $this->vendeur.'.utilisateur_idUtilisateur = '.$this->utilisateur.'.idUtilisateur');
            $this->db->where($idCategorie);
            $query = $this->db->get()->result();
            return $query;
        }
        
        
        public function suppAgent($id)
        {
            $this->db->select('utilisateur_idutilisateur');
            $this->db->from($this->agent);
            $this->db->where($id);
            $query = $this->db->get()->result(); 
            $this->db->where($id);
            $this->db->delete($this->agent);
            $this->db->where('idUtilisateur', $query[0]->utilisateur_idutilisateur);
            $this->db->delete($this->utilisateur);
        }
        
        public function suppVendeur($id)
        {
            $this->db->select('utilisateur_idutilisateur');
            $this->db->from($this->vendeur);
            $this->db->where($id);
            $query = $this->db->get()->result(); 
           
            
            $this->db->where($id);
            $this->db->delete($this->vendeur);
            $this->db->where('idUtilisateur', $query[0]->utilisateur_idutilisateur);
            $this->db->delete($this->utilisateur);
            
            
        }
        public function suppCategorie($id)
        {
            
            $this->db->where('idcategorie', $id);
            $this->db->delete($this->categorie);
        }
        public function reinitAgent($id,$data){
            $this->db->set($data);
            
            $this->db->where('idAgent', $id);
           
            $this->db->update($this->agent);
        }
        public function ChangeMdpAgent($data){
            $dat=['pwd'=>$data['pwd']];
            $this->db->set($dat);
            
            $this->db->where('idAgent', $data['idagent']);
           
            $this->db->update($this->agent);
        }
        public function updateCategorie($data,$id){
            
            $this->db->set($data);
            
            $this->db->where('idcategorie', $id);
           
            $this->db->update($this->categorie);
        }

        public function updateVendeur($data,$id){
            $this->db->select('utilisateur_idutilisateur');
            $this->db->from($this->vendeur);
            $this->db->where('idvendeur', $id);
            $query = $this->db->get()->result(); 
            $info=array('nom'=>$data['nom'],'email'=>$data['email']);
            $this->db->set($info);
            $this->db->where('idUtilisateur', $query[0]->utilisateur_idutilisateur);
            $this->db->update($this->utilisateur);
            $this->db->where('idvendeur', $id);
            $vendeur=array('matricule'=>$data['matricule'],'phone'=>$data['phone'],'adresse'=>$data['adresse'],'categorie_idcategorie'=>$data['categorie_idcategorie']);
            $this->db->set($vendeur);
           
            $this->db->update($this->vendeur);
        }
        public function updateVendeurPaiment($data,$id){
            $this->db->set($data);
            
            $this->db->where('idattribution', $id);
           
            $this->db->update($this->attribution);
        }
        
        
    }?>