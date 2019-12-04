<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<style>


#formTable{
    border: 1px solid black;
	width: 100%;
    margin-bottom: 20px;
}

 th{
padding-right:  40px;
padding-left: 40px;
border-right: 1px solid black;

}
</style>

<body>
     <h2>
        Tefem Registration 
    </h2>
    <table id="formTable">
        <thead>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>email</th>
                <th>phone_number</th>
                <th>marital_status</th>
                <th>date_of_birth</th>
                <th>health_challenge</th>
                <th>address</th>
                <th>course</th>
                <th>next_of_kin_first_name</th>
                <th>next_of_kin_last_name</th>
                <th>next_of_kin_address</th>
                <th>next_of_kin_phone</th>
            </tr>
        </thead>
        <tbody id="tefemtable"></tbody>
    </table>
    
    <br><br><br><br><br><br><br>
    
    <script>
    
    $.getJSON("{{url('get-members')}}", function(data){
	 console.log(data); 
    $.each(data, function(key, value){
  	    $('#tefemtable')
            .append($("<tr>")
            .append($("<td>").append(value.first_name)).append($("</td>"))
            .append($("<td>").append(value.last_name)).append($("</td>"))
            .append($("<td>").append(value.email)).append($("</td>"))
            .append($("<td>").append(value.phone_number)).append($("</td>"))
            .append($("<td>").append(value.marital_status)).append($("</td>"))
            .append($("<td>").append(value.date_of_birth)).append($("</td>"))
            .append($("<td>").append(value.health_challenge)).append($("</td>"))
            .append($("<td>").append(value.address)).append($("</td>"))
            .append($("<td>").append(value.course)).append($("</td>"))
            .append($("<td>").append(value.next_of_kin_first_name)).append($("</td>"))
            .append($("<td>").append(value.next_of_kin_last_name)).append($("</td>"))
            .append($("<td>").append(value.next_of_kin_address)).append($("</td>"))
            .append($("<td>").append(value.next_of_kin_phone)).append($("</td>"))
            .append($("</tr>"))  
        );
  });
})
	.done(function(){
		alert("Completed");
	})
	.fail(function(e){
		console.log('error:');
		console.error(e);
	})
	.always(function(){
		
	});
    
    </script>
</body>
    </html>
