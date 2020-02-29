<?php



function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}


//hitung posingan

function getFileList($dir)
{
		// array to hold return value
		$retval = [];

		// add trailing slash if missing
		if (substr($dir, -1) != "/")
		{
				$dir .= "/";
		}

		// open pointer to directory and read list of files
		$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
		while (false !== ($entry = $d->read()))
		{
				// skip hidden files
				if ($entry{0} == ".") continue;
				if (is_dir("{$dir}{$entry}"))
				{
						$retval[] = ['name' => "{$entry}/"

						];
				}
				elseif (is_readable("{$dir}{$entry}"))
				{
						$retval[] = ['name' => "{$entry}"

						];
				}
		}
		$d->close();

		return $retval;
}


function tabel_status(){
require 'connect.php';
$query=mysqli_query($con, "select * from tbl_status");
while ($r=mysqli_fetch_assoc($query)) {
	$array[] = array('id' => $r['id'], 'status_name' => $r['status_name']);
}
	$result =json_encode($array);
	return $result;
}

function tabel_task($id,$projectName){
require 'connect.php';
$query=mysqli_query($con, "SELECT * FROM tbl_task WHERE status_id='$id' AND project_name ='$projectName'");

	while ($r=mysqli_fetch_assoc($query)) {
		$array[] = array('id' => $r['id'], 'project_name' => $r['project_name'], 'title' => $r['title'],'description' => $r['description'],'project_name' => $r['project_name'],'status_id' => $r['status_id'],'created_at' => $r['created_at']);
	}

if (mysqli_num_rows($query) != null) {
	$result =json_encode($array);
	return $result;
}

}



 ?>
