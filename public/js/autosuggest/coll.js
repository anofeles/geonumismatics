$(document).ready(function() {
   $('.autosuggest6').keyup(function(){
     var search_coll = $(this).attr('value');
     $.post('/ajax/search_coll.php', {search_coll:search_coll}, function(data) {
        $('.result6').html(data);
        
        $('.result6 li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest6').attr('value', result_value);
            $('.result6').html('');
        })
     });
   });
});