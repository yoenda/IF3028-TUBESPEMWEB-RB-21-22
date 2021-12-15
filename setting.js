$(document).ready(function(){
        $('#batal').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
        $('#edit').click(function(){
            
            var data = $('#form_lapor').serialize();
            $.ajax({
                type : "POST",
                url : "edit_laporan.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load('output_laporan.php');
                }
            });
        });
        $('#edit').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
        $('#tampil_data').load("output_laporan.php");
        $('#tabeldata').click(function(){
            var data = $('#form_laporan').serialize();
            $.ajax({
                type : "POST",
                url : "erase_laporan.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load('output_laporan.php');
                }
            });
        });
    });