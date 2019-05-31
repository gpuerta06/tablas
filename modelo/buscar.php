<?php
class buscar
{
	private $pdo;

//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function ObtenerJugador(){
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM jugadores ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
        }
	public function ObtenerJugadorAJAX($cons){

		
		
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM jugadores WHERE Id_no LIKE ? OR Name LIKE ? OR ClubName LIKE ? OR Rtg_Nat LIKE ? OR Title LIKE ?  ");
                      

            $stm->execute(array('%'.trim($cons).'%','%'.trim($cons).'%','%'.trim($cons).'%','%'.trim($cons).'%',trim($cons).'%'));
              return $stm->fetchAll(PDO::FETCH_OBJ);
                }
                catch(Exception $e)
                {
                    die($e->getMessage());
         }
    }

        
        
      

  }

  


?>