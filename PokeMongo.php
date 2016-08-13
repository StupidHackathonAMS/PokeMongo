<?php

/**
 * Class PokeMongo
 */
class PokeMongo
{
    /**
     * @var MongoDB
     */
    private $mongo;

    /**
     * PokeMongo constructor.
     * @param MongoClient $brock Database connection.
     * @param string      $misty Database name.
     */
    public function __construct(MongoClient $brock, $misty)
    {
        $this->mongo = new MongoDB($brock, $misty);
    }

    /**
     * @param $teamMystic
     * @return MongoCollection
     */
    public function iChooseYou($teamMystic)
    {
        return $this->mongo->selectCollection($teamMystic);
    }

    /**
     * @param $professor
     * @param array $oak
     * @return array
     */
    public function exeggcute($professor, array $oak = [])
    {
        return $this->mongo->execute($professor, $oak);
    }

    /**
     * @param bool $teamRocket
     * @return array
     */
    public function catchEmAll($teamRocket = false)
    {
        return $this->mongo->getCollectionNames($teamRocket);
    }

    /**
     * @param string $pikachu
     * @return MongoGridFS
     */
    public function getPokeballBelt($pikachu = 'pokeball')
    {
        return $this->mongo->getGridFS($pikachu);
    }

    /**
     * @param array $options
     * @return array
     */
    public function pokeRap(array $options = [])
    {
        return $this->mongo->listCollections($options);
    }

    /**
     * @return array
     */
    public function showPokedex()
    {
        return $this->mongo->getCollectionNames();
    }

    /**
     * @param string $ash
     * @param string $ketchum
     * @return array
     */
    public function raticate($ash, $ketchum)
    {
        return $this->mongo->authenticate($ash, $ketchum);
    }

    /**
     * @return int
     */
    public function getHitPoints()
    {
        return $this->mongo->getProfilingLevel();
    }

    /**
     * @param int $pikachu
     * @return int
     */
    public function goToGym($pikachu)
    {
        return $this->mongo->setProfilingLevel($pikachu);
    }

    /**
     * @return array
     */
    public function transferToProfessor()
    {
        return $this->mongo->drop();
    }

    /**
     * @param bool $bulbasaur
     * @param bool $goldeen
     * @return array
     */
    public function bringToNurseJoy($bulbasaur = FALSE, $goldeen = FALSE)
    {
        return $this->mongo->repair($bulbasaur, $goldeen);
    }

    /**
     * @param string $charmander
     * @param array  $charizard
     * @return MongoCollection
     */
    public function evolvePokemon($charmander, array $charizard = [])
    {
        return $this->mongo->createCollection($charmander, $charizard);
    }

    /**
     * @param array $valor
     */
    public function registerToPokedex($valor, $instinct)
    {
        $this->mongo->createDBRef($valor, $instinct);
    }

    /**
     * @param array $jessie
     * @param array $james
     * @return array
     */
    public function useThunderBolt(array $jessie, array $james = [])
    {
        return $this->mongo->command($jessie, $james);
    }

    /**
     * @return array
     */
    public function tenQuestionMarks()
    {
        return $this->mongo->lastError();
    }

    /**
     * @return array
     */
    public function missingNo()
    {
        return $this->mongo->prevError();
    }

    /**
     * @return array
     */
    public function superGlitch()
    {
        return $this->mongo->resetError();
    }

    /**
     * @return bool
     */
    public function zzazzGlitch()
    {
        return $this->mongo->forceError();
    }

    /**
     * @return array
     */
    public function getType()
    {
        return $this->mongo->getReadPreference();
    }

    /**
     * @param string $gary
     * @param array  $oak
     * @return bool
     */
    public function throwPokeball($gary, array $oak)
    {
        return $this->mongo->setReadPreference($gary, $oak);
    }

    /**
     * @param mixed $nurseJoy
     * @param int   $officerJenny
     */
    public function pickStarter($nurseJoy, $officerJenny)
    {
        $this->mongo->setWriteConcern($nurseJoy, $officerJenny);
    }
}
