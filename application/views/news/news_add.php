<?php
	echo "<h2>Tambah data news</h2>";
	echo form_open('berita/simpan_news');
	echo "<table align='left' width='100%'>";
 
		$field1=array('name' => 'news_id','size'=>'15');
		echo "<tr><td width='10%'>No News</td><td width='1%'> :</td><td>".form_input($field1)."</td></tr>";
 
		$field2=array('name' => 'news_title','size'=>'30');
		echo "<tr><td>Title</td><td> :</td><td>".form_input($field2)."</td></tr>";
 
		$field3=array('name' => 'news_description','size'=>'30');
		echo "<tr><td>Desc</td><td> :</td><td>".form_input($field3)."</td></tr>";
 
		$field4=array('name' => 'news_date_created','size'=>'30');
		echo "<tr><td>Date</td><td> :</td><td>".form_input($field4)."</td></tr>";
 
		$field5=array('name' => 'news_last_update','size'=>'11');
		echo "<tr><td>Update</td><td> :</td><td>".form_input($field5)."</td></tr>";
 
		echo form_hidden('mode', 'baru');
		echo "<tr><td>".form_submit('mysubmit','Simpan')."</tr></td>" ;
 
		echo "</table>";
		echo form_close();
		echo "<p>".anchor('Berita', 'Kembali')."</p>";
?>