$(document).ready(function() {
   $('.autosuggest3').keyup(function(){
     var search_mint = $(this).attr('value');
     $.post('/ajax/search_mint.php', {search_mint:search_mint}, function(data) {
        $('.result3').html(data);
        
        $('.result3 li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest3').attr('value', result_value);
            $('.result3').html('');
        })
     });
   });
});