<?php

class Admin_model {

	private $table = 'tb_admin';
	private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login()
    {
    	$this->db->query('SELECT * FROM '. $this->table .' WHERE username=:username AND password=:password');
        $this->db->bind('username', $_POST['user']);
        $this->db->bind('password', $_POST['pass']);
        $this->db->execute();
        $data = $this->db->single();

        if ($this->db->rowCount() > 0) {
            
            $_SESSION['idAdmin'] = $data['id_admin'];
            return true;
        }
    }

    //fungsi ambil data admin
    public function getUser()
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_admin=:id');
        $this->db->bind('id', $_SESSION['idAdmin']);

        return $this->db->single();
    }

    //fungsi logout/keluar
    public function logout()
    {
        session_destroy();
        return true;
    }

    public function ubahPassword($id)
    {
    	$this->db->query('SELECT * FROM '. $this->table .' WHERE id_admin=:id AND password=:password');
        $this->db->bind('id', $id);
        $this->db->bind('password', $_POST['lama']);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            
            if ($_POST['baru'] == $_POST['ulangi']) {
                
                $query = "UPDATE ". $this->table ." SET password=:password WHERE id_admin=:id";
        
                $this->db->query($query);
                $this->db->bind('password', $_POST['baru']);
                $this->db->bind('id', $id);
                $this->db->execute();
                return true;
            }else{
                ?>
                <script>
                    alert('Password yang Anda ulangi tidak sesuai.');
                    document.location.href="<?= BASEURL ?>/ubah_password";
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert('Password lama tidak sesuai.');
                document.location.href="<?= BASEURL ?>/ubah_password";
            </script>
            <?php
        }
    }
}