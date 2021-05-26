$(document).ready(function() {
   $('.autosuggest').keyup(function(){
    //alert('It works');
     var search_term = $(this).attr('value');
     //alert(search_term);
     $.post('/ajax/search_group.php', {search_term:search_term}, function(data) {
        $('.result').html(data);
        
        $('.result li').click(function(){
            var result_value = $(this).text();
            $('.autosuggest').attr('value', result_value);
            $('.result').html('');
        })
     });
   });
});