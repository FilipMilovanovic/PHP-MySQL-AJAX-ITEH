$(function () {
    vratiSveParfeme();
    obrisiParfem();
    pretraziParfeme();
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

function pretraziParfeme() {

    $(document).on('click', '#button-search', function () {

        var model = $('#pretraga').val();

        $.ajax(
            {
                url: 'db/pretragaParfema.php',
                method: 'post',
                data: { model_parfema: model },

                success: function (parfemi) {
                    {
                        $('tbody').html(parfemi);
                    }
                }
            }
        )
    })
}