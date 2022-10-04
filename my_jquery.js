$(document).ready(function () {
    $("#country").on("change",function(){
       var country_id = this.value;
       console.log(country_id);
       $.ajax({
        url:"state.php",
        type:"post",
        data:{country_id : country_id },
        success:function(data){
          $("#state").html(data);
        }
    })
    });
    // for city data //
    $("#state").on("change",function(){
       var state_id = this.value;
       console.log(state_id);
       $.ajax({
        url:"city.php",
        type:"post",
        data:{state_id : state_id },
        success:function(data){
          $("#city").html(data);
        }
    })
    });
    
});