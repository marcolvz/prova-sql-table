$(button).click(function () {
    var nome = $("#nomeInput").val();
    var cognome = $("#cognomeInput").val();
    var annoNascita = $("#annoInput").val();

    $.ajax({
        url: 'php/ricerca.php',
        data: {
            nome: nome,
            cognome: cognome,
            annoNascita: annoNascita
        },
        success: function (response) {
            $('#result').html(response);
        },
        error: function (response) {
            alert('Si è verificato un errore');
        }
    })
});