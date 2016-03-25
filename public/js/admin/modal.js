/**
 * Created by marce on 20/02/2016.
 */
jQuery(function()
{

    $('.modal-delete').click(function(e)
    {
        $('#modal-delete').modal();
    });

    $('.confirm-delete').click(function()
    {
        $('#form-delete').submit();
    });
});