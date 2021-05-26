$(document).ready(function() {
   $('.autosuggest1').keyup(function(){
     var search_type = $(this).attr('value');
     $.post('/ajax/search_type.php', {search_type:search_type}, function(data) {
        $('.result1').html(data);
        
        $('.result1 li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest1').attr('value', result_value);
            $('.result1').html('');
        })
     });
   });
});