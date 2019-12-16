<?PHP

class conexPGSeguridad
{
    private $validacionConexion;

    function __construct()
    {
        $this->validacionConexion = pg_connect("host=192.168.0.22 dbname=botdorid user=postgres password=root options='--client_encoding=UTF8'") or die('NO HAY CONEXION: ' . pg_last_error());
        pg_client_encoding($this->validacionConexion);
    }

    public function getConexion()
    {
        return $this->validacionConexion;
    }
    public function consultaComplejaNorAso($sql)
    {
        $result = pg_query($this->validacionConexion, $sql);
        if (pg_num_rows($result)>0)
        {
            return pg_fetch_assoc($result);
        }else
        {
            return 0;
        }

    }
    public function consultaComplejaNor($sql)
    {
        $result = pg_query($this->validacionConexion, $sql);

        return $result;
    }
    public function consultaComplejaAso($sql)
    {
        $result = pg_query($this->validacionConexion, $sql);
        if (pg_num_rows($result)>0)
        {
            while ($row = pg_fetch_assoc($result)) {
                $data[] = $row;
            }
        }else
        {
            $data=0;
        }

        return $data;
    }

    public function consultaSimple($sql)
    {
        pg_query($this->validacionConexion, $sql);
    }
}

