<?php
	echo "<h2>Koreksi data news</h2>";
	echo form_open('berita/simpan_news');
	echo "<table align='left' width='100%'>";
		$field1=array('name' => 'news_id','size'=>'15','value'=>$databuku[0]->news_id);
		echo "<tr><td width='10%'>No news</td><td width='1%'> :</td><td>".form_input($field1)."</td></tr>";
  
		$field2=array('name' => 'news_title','size'=>'30','value'=>$databuku[0]->news_title);
		echo "<tr><td>Title</td><td> :</td><td>".form_input($field2)."</td></tr>";
  
		$field3=array('name' => 'news_description','size'=>'30','value'=>$databuku[0]->news_description);
		echo "<tr><td>Desc</td><td> :</td><td>".form_input($field3)."</td></tr>";
 
		$field4=array('name' => '','size'=>'30','value'=>$databuku[0]->isbn);
		echo "<tr><td>ISBN</td><td> :</td><td>".form_input($field4)."</td></tr>";
  
		$field5=array('name' => 'stok_buku','size'=>'11','value'=>$databuku[0]->stok_buku);
		echo "<tr><td>Stock</td><td> :</td><td>".form_input($field5)."</td></tr>";
  
		echo form_hidden('mode', 'koreksi');
		echo "<tr><td>".form_submit('mysubmit','Simpan')."</tr></td>" ;
 
		echo "</table>";
		echo form_close();
		echo "<p>".anchor('perpustakaan', 'Kembali')."</p>";
?>