<?php
interface DBAuth{
    const url = "localhost";
    const uname = "root";
    const pwd = "";
    const db = "print_buddies";
}

class MySql implements DBAuth {
    private $con = null;
    private $procedure = null;
    private $query = null;
    private $stmt = null;
    private $resultset = null;
    private $resultArray = null;
    private $fieldsArray = null;
    private $parameters = array();
	private $paramCount = "";

    function __construct(){
        try{
            $this->con = mysqli_connect(DBAuth::url, DBAuth::uname, DBAuth::pwd, DBAuth::db);
            if ($x=mysqli_connect_errno($this->con)){
                echo $x;
                throw new Exception("Failed to connect to MySQL: ". mysqli_connect_error());

            }
        }catch(Exception $e){
            echo $e;
        }
    }

    public function executeQuery($import){
        try{
            $result = mysqli_query($this->con,$import);
        }catch (Exception $e){
            echo $e;
        }
        return $result;
    }
    public function getResultArray(){
        return $this->resultArray;
    }

    private function fetchRows(){
        try{
            if(is_null($this->stmt)){
                throw new Exception("null pointer exception.");
            }
            do{
                //var_dump($this->stmt);
                //if ($res = $this->stmt->fetch_row()) {
                if($this->resultset = $this->stmt->get_result()){
                    $this->resultArray = mysqli_fetch_all($this->resultset);
                    $this->fieldsArray = $this->resultset->fetch_fields();
                    mysqli_free_result($this->resultset);
                    //var_dump($this->fieldsArray);
                    //mysqli_free_result($res);
                }
            }while ($this->stmt->more_results() && $this->stmt->next_result());
        }catch(Exception $e){
            throw $e;
        }
    }



	public function executeDML(){
		 if(is_null($this->query)){
                throw new Exception("null pointer exception");
         }
         if (!($this->stmt = $this->con->prepare($this->query))) {
			 
                    throw new Exception("Prepare failed: (" . $this->con->errno . ") " . $this->con->error);
          }
		 //$this->stmt = $this->con->prepare($this->query);
		 if(!($this->stmt->execute())){
			 throw new Exception("Execute failed: (" . $this->stmt->errno . ") " . $this->stmt->error);
			 //return $this->stmt->insert_id;
             getErrMsg("Execution failed");
		 }
		 $rowId = '';
		 $result = $this->stmt->get_result();
		 if($result != false){
			 $row = mysqli_fetch_array($result); 
			 $rowId = $row['insertId'];
		 }
		 return $rowId;
	}
	function getErrMsg($msg){
		 echo '{"errmsg":"{$msg}"}';
	}
    function __destruct() {
        try{
            mysqli_close($this->con);
        }catch(Exception $e){
            try{
                mysqli_close($this->con);
            }catch(Exception $e){
                throw $e;
            }
        }
        //print "Destroying ";
    }
    function write_log($import)
    {
        try{
            $curdate = date("d-m-Y H:i:s");
            $dir=date("M-y");
            $logdate=date("d-m-y");
            $path="C:\wamp\www\Springtime\Internal"."/".$dir;
            //$path= $_SERVER."/".$dir;
            //$path="boxingtool/Query_Log"."/".$dir;
            $myfile=$logdate.'.txt';
            if( is_dir($dir) === false )
            {
                mkdir($dir,0777,true);
            }
            if(!is_null($import))
            {
                if(strpos($import,'INSERT') !== false)
                {
                $fp=fopen($path."/".$myfile,"a");
                if($fp==null)
                {

                    die("File cannot be opened. Try again !!!");
                }
                $printline = "$curdate :     $import ";
                fprintf($fp,"\r\n%s",$printline);
                fclose($fp);
                return true;
                }
                elseif(strpos($import,'UPDATE') != false)
                {
                    $fp=fopen($path."/".$myfile,"a");
                    if($fp==null)
                    {

                        die("File cannot be opened. Try again !!!");
                    }
                    $printline = "$curdate :     $import ";
                    fprintf($fp,"\r\n%s",$printline);
                    fclose($fp);
                    return true;
                }
                elseif(strpos($import,'DELETE') !== false)
                {
                    $fp=fopen($path."/".$myfile,"a");
                    if($fp==null)
                    {

                        die("File cannot be opened. Try again !!!");
                    }
                    $printline = "$curdate :     $import ";
                    fprintf($fp,"\r\n%s",$printline);
                    fclose($fp);
                    return true;
                }

            }
            if(!is_null($this->procedure))
            {
                $fp=fopen($path."/".$myfile,"a");
                if($fp==null)
                {

                    die("File cannot be opened. Try again !!!");
                }
                $printline = "$curdate :     $this->procedure ";
                fprintf($fp,"\r\n%s",$printline);
                fclose($fp);
                return true;
            }
            if(!is_null($this->query))
            {
                $fp=fopen("$path/$myfile","a");
                if($fp==null)
                {

                    die("File cannot be opened. Try again !!!");
                }
                $printline = "$curdate :     $this->query ";
                fprintf($fp,"\r\n%s",$printline);
                fclose($fp);
                return true;
            }
        }
        catch(Exception $e)
        {
            throw $e;
        }

    }
    function write_Exception($import)
   {
       try{
           $curdate = date("d-m-Y H:i:s");
           $dir=date("M-y");
           $logdate=date("d-m-y");
           $path="C:\wamp\www\NEWBUSTOOL\Exceptions"."/".$dir;

           $myfile=$logdate.'.txt';

           if(!is_null($import))
           {
                   $fp=fopen($path."/".$myfile,"a");
                   if($fp==null)
                   {

                       die("File cannot be opened. Try again !!!");
                   }
                   $printline = "$curdate :     $import ";
                   fprintf($fp,"\r\n%s",$printline);
                   fclose($fp);
                   return true;

           }
       }
       catch(Exception $e)
       {
           throw $e;
       }

   }
}

?>