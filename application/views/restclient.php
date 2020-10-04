  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rest API Layout</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
    	
    	<div class="accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%;">
		         <span style="margin-right:30px;float: left;color: #28a745;">Post</span>
		         <span style=" float: left;">  /restserver/createrouter </span>
		         <span style="float: right;">Create router with unique loopback and hostname</span>
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">

		       <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">API-KEY:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="cr_api_key" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="button" class="btn btn-default" onclick="createRouter()">Submit</button>
				    </div>
				  </div>
				</form>

				<div class="cr_jsonresponse"></div>

		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="width: 100%;">
		           <span style="margin-right:30px;float: left;color: #c5862b;">Put</span>
		         <span style=" float: left;">  /restserver/routerip </span>
		         <span style="float: right;">Update router based on IP</span>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body">
		        <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">API-KEY:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="up_api_key" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">loopback:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="up_loopback" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">sapid:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="up_sapid" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">hostname:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="up_hostname" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">mac_address:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="up_mac_address" placeholder="">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="button" class="btn btn-default" onclick="updateRouter()">Submit</button>
				    </div>
				  </div>
				</form>

				<div class="update_jsonresponse"></div>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="width: 100%;">
		          <span style="margin-right:30px;float: left;color: #0f6ab4;">Get</span>
		         <span style=" float: left;">  /restserver/routerbysapid/{sapid} </span>
		         <span style="float: right;">List all the router based on sapid</span>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		        <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">API-KEY:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="get1_api_key" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">sapid:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="get1_sapid" placeholder="">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="button" class="btn btn-default" onclick="getrouterbysapid()">Submit</button>
				    </div>
				  </div>
				</form>

				<div class="get1_jsonresponse"></div>
		      </div>
		    </div>



		  </div>

		    <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"  style="width: 100%;">
		           <span style="margin-right:30px;float: left;color: #0f6ab4;">Get</span>
		         <span style=" float: left;">  /restserver/routerbyiprange/{iprange} </span>
		         <span style="float: right;">List all the router based on IP range</span>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		        <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">API-KEY:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="get2_api_key" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">loopback:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="get2_loopback" placeholder="">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="button" class="btn btn-default" onclick="getrouterbyiprange()">Submit</button>
				    </div>
				  </div>
				</form>

				<div class="get2_jsonresponse"></div>
		      </div>
		    </div>


		    
		  </div>

		    <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="width: 100%;">
		           <span style="margin-right:30px;float: left;color: #a41e22;">Delete</span>
		         <span style=" float: left;">  /restserver/deleterouterbyip/{loopback} </span>
		         <span style="float: right;">Delete record as per IP</span>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		       <form class="form-horizontal">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">API-KEY:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="del_api_key" placeholder="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">loopback:</label>
				    <div class="col-sm-10" >
				      <input type="text" class="form-control" id="del_loopback" placeholder="">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="button" class="btn btn-default" onclick="deleterouterbyip()">Submit</button>
				    </div>
				  </div>
				</form>

				<div class="del_jsonresponse"></div>
		      </div>
		    </div>


		    
		  </div>
</div>
    </section>

    </div>



    <script>
    function createRouter(){
    	$('.cr_jsonresponse').html('');
    	  var reqdata = {};
		  reqdata.api_key= $('#cr_api_key').val();
		  $.ajax({
		        type:'ajax',
		        method:'post',
		        url: base_url+`/restclient/createRouter`, 
		        async:false,
		        data:reqdata,
		        dataType:'json',
		        success:function(res)
		        { 
		        	res = JSON.stringify(res, null, '\t');
		        	$('.cr_jsonresponse').html(res);
		           console.log(res);
		          
		        },
		        error:function(res)
		        {
		            alert('Something went wrong!'); 
		        }
		    });
		}
		 function updateRouter(){
    		$('.update_jsonresponse').html('');
    	  var reqdata = {};
		   reqdata.api_key= $('#up_api_key').val();
		  reqdata.loopback= $('#up_loopback').val();
		  reqdata.sapid= $('#up_sapid').val();
		  reqdata.hostname= $('#up_hostname').val();
		  reqdata.mac_address= $('#up_mac_address').val();
		  $.ajax({
		        type:'ajax',
		        method:'post',
		        url: base_url+`/restclient/updateRouter`, 
		        async:false,
		        data:reqdata,
		        dataType:'json',
		        success:function(res)
		        { 
		        	res = JSON.stringify(res, null, '\t');
		        	$('.update_jsonresponse').html(res);
		           console.log(res);
		          
		        },
		        error:function(res)
		        {
		            alert('Something went wrong!'); 
		        }
		    }); 
		}

		function getrouterbysapid(){
    	$('.get1_jsonresponse').html('');
    	  var reqdata = {};
		  reqdata.api_key= $('#get1_api_key').val(); 
		  reqdata.sapid= $('#get1_sapid').val();
		  $.ajax({
		        type:'ajax',
		        method:'post',
		        url: base_url+`/restclient/getrouterbysapid`, 
		        async:false,
		        data:reqdata,
		        dataType:'json',
		        success:function(res)
		        { 
		        	res = JSON.stringify(res, null, '\t');
		        	$('.get1_jsonresponse').html(res);
		           console.log(res);
		          
		        },
		        error:function(res)
		        {
		            alert('Something went wrong!'); 
		        }
		    });
		}

		function getrouterbyiprange(){
    	$('.get2_jsonresponse').html('');
    	  var reqdata = {};
		  reqdata.api_key= $('#get2_api_key').val(); 
		  reqdata.loopback= $('#get2_loopback').val();
		  $.ajax({
		        type:'ajax',
		        method:'post',
		        url: base_url+`/restclient/getrouterbyiprange`, 
		        async:false,
		        data:reqdata,
		        dataType:'json',
		        success:function(res)
		        { 
		        	res = JSON.stringify(res, null, '\t');
		        	$('.get2_jsonresponse').html(res);
		           console.log(res);
		          
		        },
		        error:function(res)
		        {
		            alert('Something went wrong!'); 
		        }
		    });
		}

		function deleterouterbyip(){
    	$('.del_jsonresponse').html('');
    	  var reqdata = {};
		  reqdata.api_key= $('#del_api_key').val(); 
		  reqdata.loopback= $('#del_loopback').val();
		  $.ajax({
		        type:'ajax',
		        method:'post',
		        url: base_url+`/restclient/deleterouterbyip`, 
		        async:false,
		        data:reqdata,
		        dataType:'json',
		        success:function(res)
		        { 
		        	res = JSON.stringify(res, null, '\t');
		        	$('.del_jsonresponse').html(res);
		           console.log(res);
		          
		        },
		        error:function(res)
		        {
		            alert('Something went wrong!'); 
		        }
		    });
		}

    </script>