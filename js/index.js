$(":button").click(function () {
    var nome = $("#searchInput").val();

    $.ajax({
        url: 'php/ricerca.php',
        data: {
            nome
        },
        success: function (response) {
            $('#result').html(response);
        },
        error: function (response) {
            alert('Si è verificato un errore');
        }
    })
});