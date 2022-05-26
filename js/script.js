$(function () {
    vratiSveParfeme();
});

function vratiSveParfeme() {

    $.ajax(
        {
            url: 'db/vratiSveParfemeBaza.php',
            method: 'get',
            success: function (parfemi) {
                {
                    $('#tabela-body-parfemi').html(parfemi);
                }
            }
        }
    )
}