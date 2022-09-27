<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">


</script>
<script type="text/javascript">
 function submitData(action) {
    $(document).ready(function(){
        var data ={
            action: action,
            nim: $("#nim").val(),
            nama: $("#nama").val(),
            alamat: $("#alamat").val(),
            fakultas: $("#fakultas").val(),
        };
        $.ajax({
            url:'function.php',
            type:'post',
            data : data,
            success:function(response){
                alert(response);
                if (response == "Deleted Success"){
                    $("#"+ action).css("display", "none");
                }
            }
        });
    });
 }

</script>