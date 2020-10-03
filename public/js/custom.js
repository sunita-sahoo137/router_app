 $(window).on("load",function(){
   getRouterList();
});

function getRouterList(){
   $.ajax({
        type:'ajax',
        url: base_url+'/router/getRouterList', 
        async:false,
        dataType:'json',
        success:function(res)
        {
          var $html = '';
          console.log(res['data']);
          if(res['data'].length>0){
            $.each(res['data'], function( index, value ) {  
                $html += `<tr>
                  <td>${value.sapid}</td>
                  <td>${value.hostname}</td>
                  <td>${value.loopback}</td>
                  <td>${value.mac_address}</td>
                  <td><span class="edit_router" data-id="${value.id}" style="margin-right:20px;color:blue">Edit</span><span style="color:blue" class="delete_router" data-id="${value.id}">Delete</span></td>
                </tr>`;
            });
                 
          }else{
            $html = '<tr><td>No results found</td></tr>';
          }
           $('#routerList tbody').html($html);
        },
        error:function(res)
        {
            alert('Something went wrong!'); 
        }
    });
}

$(document).on("click",".edit_router",function() {
  $('.addRouterBtn').attr('data-id',$(this).attr('data-id'));
  $('.modal-title').html('Update Router');
  var reqdata = {};
  reqdata.id= $(this).attr('data-id');
  $.ajax({
        type:'ajax',
        method:'post',
        url: base_url+`/router/getRouterDetails`, 
        async:false,
        data:reqdata,
        dataType:'json',
        success:function(res)
        {
           $('#sapid').val(res.sapid);
          $('#hostname').val(res.hostname);
          $('#loopback').val(res.loopback);
          $('#macaddress').val(res.mac_address);
          $('#addRouterModal').modal('show');
          
          
        },
        error:function(res)
        {
            alert('Something went wrong!'); 
        }
    });
});

$(document).on("click","#add_router",function() {
  $('.addRouterBtn').attr('data-id','');
  $('#addRouterModal .modal-title').html('Add New Router');
  $('#sapid').val('');
  $('#hostname').val('');
  $('#loopback').val('');
  $('#macaddress').val('');
  $('#addRouterModal').modal('show');
});

$(document).on("click",".addRouterBtn",function() {
  var id = $('.addRouterBtn').attr('data-id');
  var reqdata = {};
    reqdata.sapid = $('#sapid').val();
    reqdata.hostname = $('#hostname').val();
    reqdata.loopback = $('#loopback').val();
    reqdata.mac_address = $('#macaddress').val();
    var url = base_url+'/router/addRouter';
    if(id != ''){
      reqdata.id = id;
      url = base_url+'/router/updateRouter';
    }
      $.ajax({
        type:'ajax',
        method:'post',
        url: url, 
        async:false,
        data:reqdata,
        dataType:'json',
        success:function(res)
        {
          alert(res.message);
          if(res.status == 'success'){
            getRouterList();
            $('#addRouterModal').modal('hide');
          }
          
          
        },
        error:function(res)
        {
            alert('Something went wrong!'); 
        }
    });

});

$(document).on("click",".delete_router",function() {
  $('.deleteBtn').attr('data-id',$(this).attr('data-id'));
  $('#deleteModal').modal('show');
  });

$(document).on("click",".deleteBtn",function() {
  var id = $(this).attr('data-id'); 
  var reqdata = {};
    reqdata.id = id;
      $.ajax({
        type:'ajax',
        method:'post',
        url: base_url+'/router/deleteRouter', 
        async:false,
        data:reqdata,
        dataType:'json',
        success:function(res)
        {
          alert('Router deleted successfully');
          getRouterList();
          $('#deleteModal').modal('hide');
          
          
        },
        error:function(res)
        {
            alert('Something went wrong!'); 
        }
    });
  });