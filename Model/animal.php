<?PHP

class client{
	private $id;
	private $nom;
	private $poids;
	private $type;
	private $race;
	private $idClient;

	public function __construct($id, $nom, $poids, $type, $race, $idClient)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->poids = $poids;
        $this->type = $type;
        $this->race = $race;
        $this->idClient = $idClient;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPoids()
    {
        return $this->poids;
    }

    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function setRace($race)
    {
        $this->race = $race;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

}
?>
