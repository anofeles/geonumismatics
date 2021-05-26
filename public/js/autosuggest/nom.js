$(document).ready(function() {
   $('.autosuggest4').keyup(function(){
     var search_nom = $(this).attr('value');
     $.post('/ajax/search_nom.php', {search_nom:search_nom}, function(data) {
        $('.result4').html(data);
        
        $('.result4 li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest4').attr('value', result_value);
            $('.result4').html('');
        })
     });
   });
});