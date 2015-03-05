<script type="text/javascript">
$('input[name=published]').on('click', function (){
    if ( $(this).is(":checked") ){
        $('input[name=published_on]').val(getCurrentDate());
    } else {
        $('input[name=published_on]').val(null);
    }
});

function getCurrentDate(){
    var today = new Date();
    var dd    = today.getDate();
    var mm    = today.getMonth()+1; //January is 0!
    var yyyy  = today.getFullYear();

    if(dd<10) {
        dd='0'+dd
    } 

    if(mm<10) {
        mm='0'+mm
    } 

    today = yyyy + '-' + mm + '-' + dd;
    return today;
}
</script>