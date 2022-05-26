$(function () {
    vratiSveParfeme();
    obrisiParfem();
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

function obrisiParfem() {

    $(document).on('click', '#button-delete', function () {

        let id = $(this).attr('value');

        alert(id)
        $.ajax(
            {
                url: 'db/obrisiParfem.php',
                method: 'post',
                data: { parfem_id: id },
            }
        )
    })
}