<?php

class GalleryModel
{

	public function getGalleryImages($dbSrc){
		
		$imgs= array();
		$res = array();
		$file = fopen("csvDB/".$dbSrc.'.csv', "r") or die("Cannot open");

		$templateArr =(fgetcsv($file));

		$index=0;
		while(!feof($file)){
			$storageArray = array();
			$elems = fgetcsv($file);
			for ($i = 0; $i <= count($templateArr)-1; $i++){
				$storageArray[$templateArr[$i]] = $elems[$i];
			}
			$res[$index++] = $storageArray;
		}

		fclose($file);

		foreach($res as $value)
		{
			$imgs[] = array("rel"=>$value["rel"],"src"=>$value["src"],"alt"=>$value["alt"]);
		}

		return $imgs;
	}

}