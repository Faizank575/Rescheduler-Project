$(document).ready(function(){
    $("#show_records").on('click',function(){
        $("#table_display").load("../includes/showClassRecords.php");
    })
})