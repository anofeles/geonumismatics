$(document).ready(function() {
   $('.autosuggest5').keyup(function(){
     var search_date = $(this).attr('value');
     $.post('/ajax/search_date.php', {search_date:search_date}, function(data) {
        $('.result5').html(data);
        
        $('.result5 li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest5').attr('value', result_value);
            $('.result5').html('');
        })
     });
   });
});