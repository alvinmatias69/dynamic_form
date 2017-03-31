<?php
if ($_POST) {
	echo json_encode($_POST);
}else{
	header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
	echo '{
		"name":"module_1",
		"formula_type": "case", 
		"table_name": "tt_2profiling",
		"case":{
			"week_1":"105%",
			"week_2":"104%"
		},
		"formula":null,
		"forms":[
			{
				"name":"fullname",
		   		"type":"text",
		   		"id":"full_name",
		   		"label":"Nama Lengkap",
		   		"max_length":25,
		   		"required":true
		  	}, {
		   		"name":"gender",
		   		"type":"radio",
				"id":"gender",
		   		"label":"Jenis Kelamin",
		   		"required":true,
		   		"options":[
		    		{
		     			"value":"male",
		     			"text":"Pria"
		    		}, {
		     			"value":"female",
		     			"text":"Wanita"
		    		}
				]
	  		}, {
		   		"name":"education[]",
		   		"type":"checkbox",
				"id":"education",
		   		"label":"Pendidikan",
		   		"required":false,
		   		"options":[
		    		{
		     			"value":"sd",
		     			"text":"Sekolah Dasar"
		    		}, {
		     			"value":"smp",
		     			"text":"Sekolah Menengah Pertama"
		    		}, {
		    			"value":"sma",
		    			"text":"Sekolah Menengah Atas"
		    		}
				]
	  		}, {
		   		"name":"status",
		   		"type":"select",
				"id":"status",
		   		"label":"Status",
		   		"required":true,
		   		"options":[
		    		{
		     			"value":"married",
		     			"text":"Menikah"
		    		}, {
		     			"value":"single",
		     			"text":"Lajang"
		    		}, {
		    			"value":"wait",
		    			"text":"Menunggu Mujizat"
		    		}
				]
	  		}, {
				"name":"experience",
		   		"type":"textarea",
		   		"id":"experience",
		   		"label":"pengalaman",
		   		"max_length":25,
		   		"required":true
		  	}
		]
	}';
}