<?php



	class Application
	{
		function __construct(){
			$server_name = "localhost";
			$user_name = "root";
			$pass="";
			$database = "avesh";

      $this->dbConnect = new mysqli($server_name, $user_name, $pass,$database);

		}

		function exec_query($sql){
			$response = array();
        $result = mysqli_query($this->dbConnect,$sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($response, $row);
            }
        }else{
            $response=0;
        }
        //echo mysqli_error($this->dbConnect);
        return $response;
		}

		//function to update database
		function updateQuery($sql,$lastInsert=false) {
        $response =0;
        $result = mysqli_query($this->dbConnect,$sql);
        if ($result) {
            if($lastInsert==true){
                $response=mysqli_insert_id($this->dbConnect);
            }else{
                $response=1;
            }
        }else{
            $response=0;
        }
        return $response;
    }

	}
?>
