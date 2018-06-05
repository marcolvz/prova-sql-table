$(":button").click(function(){
    var input = $("searchInput").val();
    
    $.ajax({
        url: '',
        data: input,
        success: function(response) {
            
        },
        error: function(response) {
            alert('Si è verificato un errore');
        }
    })
});