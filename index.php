function adddotstring($strNum) {
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
		$n = 0;
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
			$n++;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );		
        $result = $con.$result;	
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+(1*$n));   
        }
		return $result;
        
}
