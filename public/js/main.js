$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
/*$(document).ready(function(){
   $(document).ready(function(){
    $('.product').css('opacity', 0.7)
    .mouseover(function() {
      $(this).css('opacity', 1);
    })
    .mouseout(function() {
      $(this).css('opacity', 0.7);
 });


});*/

var BaseRecord={
top9: 1,
search: '',

more: function(){
    var ajaxSetting={
    method: 'get',
    url: '/',    //vagrant './'
    data: {
    	top9: this.top9,
    	search: this.search,
},
  success: function(data){
    //alert(data.table)
    $('.row.products_row').html(data.table);
},
};
$.ajax(ajaxSetting);
},

clearall: function(){
      var ajaxSetting={
      method: 'post',
      url: '/clearall',    //vagrant './'
    success: function(data){
     //alert(data)
     BaseRecord.cart();
  },
  };
  $.ajax(ajaxSetting);
},

removeone: function(id){
    var ajaxSetting={
    method: 'post',
    url: '/clearone',    //vagrant './'
    data: {
    	id: id,
},
  success: function(data){
   //alert(data)
   BaseRecord.cart();
},
};
$.ajax(ajaxSetting);
},

cart: function(){
  var ajaxSetting={
  method: 'get',
  url: '/cart',    //vagrant './'

  success: function(data){
    $('.cart_items_list').html(data.table);
    $('.listbuttonremove').click(function(){
     BaseRecord.removeone($(this).attr('id'));
     return false;
   });
},
};
$.ajax(ajaxSetting);
},

mailer: function(message, contact){
  //if(message!='' && contact!=''){
      var ajaxSetting={
      method: 'post',
      url: '/mailer',    //vagrant './'
      data: {
       message : message,  
       contact : contact,   //$request->contact
  },

      success: function(data){
  //alert(data.answer)
    //alert(data)
    if(data.answer){  
       var data_json=JSON.parse(data.answer);
        if(data_json['mail'] && data_json['request']){
        $('.result_to_email').html('Your message successfully has been sent...');
        $('.result_to_email').css('color', 'green');
        } else {
        $('.result_to_email').html('There is any mistake..');
        $('.result_to_email').css('color', 'red');
           }
              } else {
                var data_json=JSON.parse(data);
                var error_str='';
                for (var i in data_json){
                  error_str+=data_json[i]+'\n';
                }
                alert(error_str)
              }
  },
  };
     $.ajax(ajaxSetting);
// } else {
       //alert('Field shouldnt be empty');
 //}
},


};