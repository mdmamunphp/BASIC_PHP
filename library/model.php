 <?php

class Models
{
	private $con;
	public $Id;

	function __construct()
	{
		$this->con = new mysqli("localhost","mamunphp_hasan","hasan123","mamunphp_upwork");
	}
	public function Insert($table, $data)
	{

		$sql = "";
		foreach ($data as $key => $value){
			if ($sql) {
				$sql .= ",";

			}
			$sql .= "{$key}='" .$this->ES($value) . "'";

		}
		$sql = "insert into {$table} set {$sql};";

		echo $sql ;
		if ($this->con->query($sql)) {
			$this->Id = $this->con->insert_id;

			return true;
		}
		return false;
	}



	public function Upd($table, $data, $id){
		$sql = "";
		foreach ($data as $key => $value) {
			if ($sql) {
				$sql .=',';
			}
			$sql .="{$key}='".$value."'";
		}

		$sql ="update {$table} set {$sql} where id={$id}";
		$this->con->query($sql);
		if ($this->con->affected_rows > 0) {
			return true;
      echo $sql;
		}
		return false;
	}
	public function deleted($table,$data){

		$sql = "delete from {$table} where id ='$data'";
		$result = $this->con->query($sql);
		if($result){

			return $result;
		}else{

			return false ;

		}
	}

	public function View($select, $table, $orders = "", $where = "",$relations="", $limit="")
	{

		$temp_orders = "";
		$temp_wheres = "";
		$temp_limit = "";
		$sql = "select {$select} from {$table}";

		if ($relations) {
			foreach ($relations as $where_i => $where_v) {
				if ($temp_wheres) {
					$temp_wheres .=" and ";
				}
				else{
					$temp_wheres .=" where ";
				}
				$temp_wheres .="{$where_i} = ".$where_v;
			}
		}

		if($where){
			foreach ($where as $where_i => $where_v) {
				if ($temp_wheres) {
					$temp_wheres .= " and ";
				} else {
					$temp_wheres .= " where ";
				}
				$temp_wheres .= "{$where_i} = '". $this->ES($where_v)."'";

			}
		}

		if ($orders) {
			foreach ($orders as $order_i => $order_v) {
				if ($temp_orders) {
					$temp_orders .= ", ";
				} else {
					$temp_orders .= " order by ";
				}
				$temp_orders .= "{$order_i} {$order_v}";
			}
		}

		if ($limit) {
			$temp_limit .= " limit ".$limit;
		}else{
			$temp_limit = "";
		}

		$sql = $sql . $temp_wheres . $temp_orders. $temp_limit;
  // echo $sql;
		return $this->con->query($sql);
	}

	public function DBRaw($sql){

		return $this->con->query($sql);
	}

	private function ES($data){
		return $this->con->real_escape_string($data);
	}
};
