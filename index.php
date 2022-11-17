<form id="form_mahasiswa">
<label for="prodi">
Program Studi
</label>
<select name="prodi" id="prodi">
    <option value="" selected=""> Pilih Program Studi </option>
    <option value="IF"> Teknik Informatika </option>
    <option value="PWK"> Perencanaan Wilayah dan Kota </option>
    <option value="DKV"> Desain Komunikasi Visual </option>
    <option value="TA"> Teknik Pertambangan </option>
    <option value="SI"> Teknik Sipil </option>
</select>
</form>
<br>
<div id="show"><table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
$(document).ready(function(){
    $("#prodi").change(function(){
        var value=$(this).val();
    $.ajax({
        url:"tampil.php",
        type:"POST",
        data:"request=" + value,
        success:function(data){
            $("#show").html(data);
        }
    }) 
});
});
</script>