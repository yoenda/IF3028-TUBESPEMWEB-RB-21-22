<table id="tabeldata">
        <tr>
            <th>Laporan</th>
            <th>Aspek</th>
            <th>Lampiran</th>
            <th>Time</th>
            <th>Setting</th>
        </tr>        
        <?php
        include "db.php";
        $hasil=mysqli_query($kon,"select * from lapor_id order by time asc");

        while($data = mysqli_fetch_array($hasil)):
        ?>
        <tr>
            <td><?php echo $data['lapor_text']; ?></td>
            <td><?php echo $data['lapor_aspek']; ?></td>
            <td><?php echo $data['data_file']; ?></td>
            <td><?php echo $data['time']; ?></td>
            <td><input id="btn_edit" type="button" value="Edit Data"><br><input id="btn_hapus" type="button" value="Hapus Data"></td>
        </tr>
        <?php endwhile; ?>
</table>
<script>
    $(document).ready(function(){

        $('#tabeldata').on('click','#btn_edit',function(){
            $('html, body').animate({scrollTop: 0});
            var baris = $(this).closest('tr').find("td:first").html();
            $('#time').val(baris);
            $('#edit').show();
            $('#batal').show();
            $('#time').show();
        });

        $('#tabeldata').on('click','#btn_hapus', function(){
            var id = $(this).closest('tr').find("td:first").html();
            var data = {lapor_text:baris};
            $.ajax({
                type : "POST",
                url : "erase.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load("output_laporan.php");
                }
            });
        });      
    });
</script>